<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasTranslations;

    protected $fillable = ['title', 'description', 'image_path', 'category'];

    public $translatable = ['title', 'description'];
}
