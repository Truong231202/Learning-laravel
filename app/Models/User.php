<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'user_name', 
        'birthday',
        'address',
        'email',
        'phone_number',
        'account_name',
        'password',
        'gender',
        'user_image'
    ];
    public function cart(){
        return $this->hasMany(Cart::class,'user_id','cart_id');
    }
    

}
