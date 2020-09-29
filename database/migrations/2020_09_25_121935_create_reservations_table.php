<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_id')->constrained()->onDelete('cascade');
            $table->dateTime('reservation_date');
            $table->unsignedInteger('hrs');
            $table->foreignId('player_id')->constrained()->ondDelete('cascade');
            $table->enum('status',array('PENDING','DONE','CANCELED'));
            $table->unsignedFloat('price');
            $table->date('termination_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
