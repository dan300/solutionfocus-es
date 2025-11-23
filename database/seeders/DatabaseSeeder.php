<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Orsi Szabo',
            'email' => 'admin@solutionfocus.es',
            'password' => Hash::make('password'),
        ]);

        // Call the pages content seeder
        $this->call(PagesContentSeeder::class);

        // Create Settings
        Setting::create([
            'key' => 'site_name',
            'value' => 'Orsi Szabo - Solution Focused Coaching',
            'type' => 'text',
            'description' => 'Website name',
        ]);

        Setting::create([
            'key' => 'contact_email',
            'value' => 'info@solutionfocus.es',
            'type' => 'email',
            'description' => 'Main contact email',
        ]);

        Setting::create([
            'key' => 'phone',
            'value' => '+34 XXX XXX XXX',
            'type' => 'text',
            'description' => 'Phone number',
        ]);

        Setting::create([
            'key' => 'address',
            'value' => 'Spain',
            'type' => 'text',
            'description' => 'Address',
        ]);
    }
}
