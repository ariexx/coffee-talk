<?php

namespace App\Traits;

use Faker\Core\Number;
use Illuminate\Support\Str;

trait HasId
{
    protected static function bootHasId()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = random_int(000000, 999999);
            }
        });
    }
}
