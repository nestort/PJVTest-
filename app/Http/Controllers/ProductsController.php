<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Product;

class ProductsController extends Controller

{
    public function index()
    {
        abort_if(Gate::denies('ver:productos'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $products = Product::all();

        return view('products.index', compact('products'));
    }
    public function create()
    {
        abort_if(Gate::denies('crear:productos'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('products.create');
    }
    public function store(Request $request)
    {
        abort_if(Gate::denies('crear:productos'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        abort_if(Gate::denies('ver:productos'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('products.show', compact('product'));
    }
    public function edit(Product $product)
    {
        abort_if(Gate::denies('editar:productos'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('products.edit',compact('product'));
    }
    public function update(Request $request,Product $product)
    {
        abort_if(Gate::denies('editar:productos'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        abort_if(Gate::denies('eliminar:productos'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $product->delete();

        return redirect()->route('products.index');
    }
}
