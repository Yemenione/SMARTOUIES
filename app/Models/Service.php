<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use \Spatie\Translatable\HasTranslations;

    protected $fillable = ['title', 'description', 'icon', 'sort_order', 'is_active'];
    protected $translatable = ['title', 'description'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
