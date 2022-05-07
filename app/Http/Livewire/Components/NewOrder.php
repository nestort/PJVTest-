<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class NewOrder extends Component
{
    public $products;
    public function mount(){
        $this->products = Product::all();
    }
    public function buy($product_id)
    {
        $user_id= Auth::id();
        $new_order= Order::create([
            'user_id'=>$user_id,
            'product_id'=>$product_id
        ]);

        return redirect()->route('my_orders');
    }
}
