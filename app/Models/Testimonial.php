<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'client_name',
        'client_title',
        'client_photo',
        'content',
        'rating',
        'featured',
        'order',
        'published',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published' => 'boolean',
        'order' => 'integer',
        'rating' => 'integer',
    ];
}
