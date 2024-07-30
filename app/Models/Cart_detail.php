<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_detail extends Model
{
    use HasFactory;
    protected $table = 'cart_details';
    protected $fillable = [

        'quantity', 
        'price', 
        'total',
        'product_id', 
        'cart_id', 
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    
}
