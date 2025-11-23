<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'og_image',
        'published',
        'order',
    ];

    protected $casts = [
        'published' => 'boolean',
        'order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            if (empty($page->slug)) {
                $page->slug = Str::slug($page->title);
            }
        });
    }

    /**
     * Get the blade template name for this page
     */
    public function getTemplateName(): string
    {
        // Map slugs to template names
        return match($this->slug) {
            'team', 'equipo' => 'team',
            'training', 'formacion' => 'training',
            'certification', 'certificacion' => 'certification',
            'team-coaching', 'coaching-equipos' => 'team-coaching',
            default => 'default',
        };
    }
}
