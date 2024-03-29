<?php

namespace App\Models;

use App\Traits\HasId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, HasId;

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'image',
        'status',
        'is_discount',
        'discount',
    ];

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getDiscountPriceAttribute()
    {
        if($this->is_discount) {
            return $this->price - ($this->price * $this->discount / 100);
        }else{
            return $this->price;
        }
    }
}
