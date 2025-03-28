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
        Schema::create('reservations', function (Blueprint $table) {  // Rename table to 'reservations'
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 15);
            $table->date('reservation_date');
            $table->time('reservation_time');
            $table->integer('num_people');
            $table->text('message')->nullable();
            $table->timestamps();
            $table->unique(['reservation_date', 'reservation_time']);  // Unique constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');  // Drop table 'reservations'
    }
};
