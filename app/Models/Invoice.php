<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total',
        'sub_total'

    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function orders()
    {
        return $this->belongsTo(Order::class,'id');
    }
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%');
    }


}
