<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user_buyer(){
        return $this->belongsTo(Order::class, 'buyer_id', 'id');
    }

    public function user_freelancer(){
        return $this->belongsTo(Order::class, 'freelancer_id', 'id');
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function order_status(){
        return $this->belongsTo(OrderStatus::class);
    }
}
