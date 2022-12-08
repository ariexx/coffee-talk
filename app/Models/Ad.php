<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'active',
        'link',
        'description',
        'type',
        'product_id',
    ];

    public function getImageLinkAttribute(): string
    {
        return asset('storage/' . $this->image);
    }
}
