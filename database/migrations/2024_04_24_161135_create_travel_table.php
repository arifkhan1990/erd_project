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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('airlines_name');
            $table->string('ticket_number');
            $table->string('ticket_number_text');
            $table->string('ticket_purchased');
            $table->date('date_of_departure');
            $table->string('port_of_embarkation');
            $table->string('name_of_city');
            $table->date('date_of_arrival');
            $table->string('port_of_disembarkation');
            $table->string('name_of_city_2');
            $table->string('approximate_distance');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
