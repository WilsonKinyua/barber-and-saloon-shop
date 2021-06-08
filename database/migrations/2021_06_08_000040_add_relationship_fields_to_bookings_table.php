<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBookingsTable extends Migration
{
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id', 'service_fk_4122052')->references('id')->on('services');
            $table->unsignedBigInteger('barber_id')->nullable();
            $table->foreign('barber_id', 'barber_fk_4122054')->references('id')->on('barbers');
        });
    }
}
