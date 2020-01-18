<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
