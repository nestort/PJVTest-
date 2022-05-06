<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'tax'
    ];
    public function price_without_tax()
    {
        return $this->price/(1+($this->tax/100));
    }
    public function calculated_tax()
    {
        return $this->price-$this->price_without_tax();
    }
}
