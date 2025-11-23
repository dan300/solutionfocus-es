<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesContentSeeder extends Seeder
{
    public function run(): void
    {
        // English Pages (SEO data only - content in blade templates)
        
        Page::create([
            'title' => 'Meet the Team',
            'slug' => 'team',
            'meta_title' => 'Meet the Team - Solution Focused Coaching',
            'meta_description' => 'Meet the professionals committed to your development through solution-focused coaching.',
            'published' => true,
            'order' => 1,
        ]);

        Page::create([
            'title' => 'Training',
            'slug' => 'training',
            'meta_title' => 'Training - Solution Focused Coaching',
            'meta_description' => 'Training programs in solution-focused coaching. Learn a simple, effective, and respectful approach.',
            'published' => true,
            'order' => 2,
        ]);

        Page::create([
            'title' => 'Coach Certification',
            'slug' => 'certification',
            'meta_title' => 'Coach Certification - Solution Focused Coaching',
            'meta_description' => 'Become a certified solution-focused coach. Internationally recognized certification program.',
            'published' => true,
            'order' => 3,
        ]);

        Page::create([
            'title' => 'Team Coaching',
            'slug' => 'team-coaching',
            'meta_title' => 'Team Coaching - Solution Focused Coaching',
            'meta_description' => 'Solution-focused team coaching sessions. We help teams build the future they desire.',
            'published' => true,
            'order' => 4,
        ]);

        // Spanish Pages (SEO data only - content in blade templates)
        
        Page::create([
            'title' => 'Equipo',
            'slug' => 'equipo',
            'meta_title' => 'Equipo - Coaching Centrado en Soluciones',
            'meta_description' => 'Conoce al equipo de profesionales comprometidos con tu desarrollo a través del coaching centrado en soluciones.',
            'published' => true,
            'order' => 5,
        ]);

        Page::create([
            'title' => 'Formación',
            'slug' => 'formacion',
            'meta_title' => 'Formación - Coaching Centrado en Soluciones',
            'meta_description' => 'Programas de formación en coaching centrado en soluciones. Aprende un enfoque simple, efectivo y respetuoso.',
            'published' => true,
            'order' => 6,
        ]);

        Page::create([
            'title' => 'Certificación de Coach',
            'slug' => 'certificacion',
            'meta_title' => 'Certificación de Coach - Coaching Centrado en Soluciones',
            'meta_description' => 'Conviértete en un coach certificado centrado en soluciones. Programa de certificación reconocido internacionalmente.',
            'published' => true,
            'order' => 7,
        ]);

        Page::create([
            'title' => 'Coaching de Equipos',
            'slug' => 'coaching-equipos',
            'meta_title' => 'Coaching de Equipos - Coaching Centrado en Soluciones',
            'meta_description' => 'Sesiones de coaching de equipos centradas en soluciones. Ayudamos a los equipos a construir el futuro que desean.',
            'published' => true,
            'order' => 8,
        ]);
    }
}
