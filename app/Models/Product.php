<?php

namespace App\Models;

use App\Traits\HasId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasId;

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
