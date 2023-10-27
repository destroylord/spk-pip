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
        Schema::create('form_generators', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('name');
            $table->string('type');
            $table->string('attribute');
            $table->string('criteria_weight')->comment('Bobot Kriteria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_generators');
    }
};
