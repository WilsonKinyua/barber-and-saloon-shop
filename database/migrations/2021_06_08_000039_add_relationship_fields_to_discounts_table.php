<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDiscountsTable extends Migration
{
    public function up()
    {
        Schema::table('discounts', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id', 'customer_fk_4122118')->references('id')->on('users');
            $table->unsignedBigInteger('customer_date_of_birth_id')->nullable();
            $table->foreign('customer_date_of_birth_id', 'customer_date_of_birth_fk_4122121')->references('id')->on('users');
        });
    }
}
