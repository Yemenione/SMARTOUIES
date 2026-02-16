<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    protected $guarded = [];

    protected $casts = [
        'site_logo' => 'array', 
    ];
}
