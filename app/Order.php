<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','date','address','province','postal','phone_no','city','status'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function OrderItems(){
        return $this->hasMany(OrderItems::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class,'order_items');
    }
}
