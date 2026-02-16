<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use \Spatie\Translatable\HasTranslations;

    protected $fillable = ['name', 'role', 'bio', 'image_path', 'social_links'];
    protected $translatable = ['role', 'bio'];

    protected $casts = [
        'social_links' => 'array',
    ];
}
