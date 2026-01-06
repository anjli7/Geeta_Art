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
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('image');              // slider image
            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(1); // 1 = active
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('home_sliders');
    }
};
