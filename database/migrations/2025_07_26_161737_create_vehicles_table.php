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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('description');
            $table->string('year');
            $table->string('make');
            $table->string('body');
            $table->string('exterior_color');
            $table->string('interior_color');
            $table->decimal('mileage', 10, 2);
            $table->string('transmission');
            $table->string('condition');
            $table->decimal('price', 10, 2);
            $table->text('main_image');

            $table->text('image_2')->nullable();
            $table->text('image_3')->nullable();
            $table->text('image_4')->nullable();
            $table->text('image_5')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
