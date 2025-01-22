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
         Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->decimal('price_per_hour', 8, 2)->nullable();
            $table->enum('status', ['available', 'booked', 'maintaining']);
            $table->integer('capacity')->nullable();
            $table->string('location')->nullable();
            $table->integer('slot_duration');
            $table->time('service_start_time');
            $table->time('service_end_time');
            $table->integer('cleaning_duration')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
