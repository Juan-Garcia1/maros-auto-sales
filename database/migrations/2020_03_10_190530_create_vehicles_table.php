<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('make_id');
            $table->string('model');
            $table->integer('year');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('color_id');
            $table->integer('owners');
            $table->integer('seats');
            $table->string('image');
            $table->integer('price');
            $table->integer('mileage');
            $table->unsignedBigInteger('transmission_id');
            $table->unsignedBigInteger('cylinder_id');
            $table->unsignedBigInteger('drivetrain_id');
            $table->json('features')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
