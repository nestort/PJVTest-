<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller

{
    public function my_orders()
    {
        //abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $my_id = Auth::id();
        $orders = Order::where('user_id',$my_id)->get();
        return view('orders.my_orders',compact('orders'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'tax' => 'required|numeric|min:0|max:100',
        ]);
        Product::create($validated);
        return redirect()->route('products.index');
    }
    public function show(Product $product)
    {

        return view('products.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    public function update(Request $request,Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'tax' => 'required|numeric|min:0|max:100',
        ]);
        $product->update($validated);
        return redirect()->route('products.index');



    }
    public function destroy(Product $product)
    {

        $product->delete();

        return redirect()->route('products.index');
    }
}
