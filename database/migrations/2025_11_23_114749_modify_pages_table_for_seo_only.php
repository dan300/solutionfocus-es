<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            // Make content nullable since it won't be used
            $table->longText('content')->nullable()->change();
            
            // Add OG image field if not exists
            if (!Schema::hasColumn('pages', 'og_image')) {
                $table->string('og_image')->nullable()->after('meta_description');
            }
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->longText('content')->nullable(false)->change();
        });
    }
};
