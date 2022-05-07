<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;


class OrdersTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $listeners = ['ordersRefresh' => 'render'];
    public function render()
    {
        return view('livewire.components.orders-table',[
            'orders' => Order::search($this->search)
                ->whereNull('invoice_id')
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
}
