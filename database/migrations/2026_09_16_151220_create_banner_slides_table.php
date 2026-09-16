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
        Schema::create('banner_slides', function (Blueprint $table) {
            $table->id();
            $table->string('item_class');
            $table->string('category');
            $table->string('title');
            $table->text('text');
            $table->string('primary_label');
            $table->string('primary_url')->default('#');
            $table->string('secondary_label');
            $table->string('secondary_url')->default('#');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_slides');
    }
};
