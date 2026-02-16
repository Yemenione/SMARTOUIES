<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasTranslations;

    protected $fillable = ['title', 'description', 'image_path', 'category'];

    public $translatable = ['title', 'description'];
}
