<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
class InvoicesTable extends Component
{
    use WithPagination;



    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.components.invoices-table',[
            'invoices' => Invoice::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
    public function generate_invoices()
    {
        abort_if(Gate::denies('crear:factura'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newOrders = Order::whereNull('invoice_id')->get();
        $ordersPerUser = $newOrders->groupBy('user_id');

        foreach($ordersPerUser as $userOrders){
            $total = 0;
            $subTotal = 0;
            $invoice = Invoice::Create([
                'user_id'=>$userOrders->first()->user_id,
                'sub_total'=>$subTotal,
                'total'=>$total
            ]);
            foreach($userOrders as $order){

                $total +=  $order->product->price;
                $subTotal +=  $order->product->price_without_tax();
                $order->invoice_id = $invoice->id;
                $order->save();
            }
            $invoice->total=$total;
            $invoice->sub_total=$subTotal;
            $invoice->save();

            $this->emit('ordersRefresh');
        }


    }
}

