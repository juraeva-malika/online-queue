<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function(Blueprint $table){
            $table-> increments('id');
            $table-> unsignedBigInteger('doctors_id');
            $table->foreign('doctors_id')->refences('id')->on('doctors');
            $table-> string('date');
            $table-> string('fullname');
            $table-> string('phone');
            $table-> unsignedBigInteger('service_id');
            $table->foreign('service_id')->refences('id')->on('services');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("orders");
    }
};
