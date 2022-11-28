<?php

namespace App\Models;

use App\Traits\HasId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory, HasId;

    protected $fillable = [
        'user_id',
        'order_number',
        'email',
        'name',
        'table_number',
        'status',
        'total_price',
        'is_confirmation'
    ];

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_number', 'order_number');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
