<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fieldsets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('handle', 255)->unique();
            $table->longText('data')->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fieldsets');
    }
};
