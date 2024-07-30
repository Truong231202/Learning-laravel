<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'product_name','
        product_description',
        'product_image', 
        'price',
        'category_id' , 
        'size_id'
    ];

    public function category(){
        return $this->belongsTo(Categories::class,'category_id','product_id');
    }

    public function size(){
        return $this->hasMany(Size::class,'size_id','product_id');
    }

    
}
