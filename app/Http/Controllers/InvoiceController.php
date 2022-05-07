<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('invoices.index');
    }
    public function show($id){
        $invoice = Invoice::find($id);
        $orders = Order::where('invoice_id',$id)->orderBy('created_at','asc')->get();

        return view('invoices.show',compact(['invoice','orders']));
    }
}
