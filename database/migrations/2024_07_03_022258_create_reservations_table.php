<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;//Esta línea importa la clase Schema de Laravel, que se utiliza para crear y manipular la estructura de la base de datos.

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->string('guest_name');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
