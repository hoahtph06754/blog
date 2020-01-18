<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_detail()
    {
        return $this->hasOne(Order_detail::class);
    }
}
