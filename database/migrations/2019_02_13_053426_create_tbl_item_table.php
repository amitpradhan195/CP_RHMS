<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_items', function (Blueprint $table) {
            $table->increments('itemId');
            $table->unsignedInteger('itemTypeId');
            $table->string('brand');
            $table->string('modelName');
            $table->integer('cc');
            $table->integer('cylinder');
            $table->integer('noOfGears');
            $table->integer('mileage');
            $table->string('frontBrake');
            $table->string('rearBrake');
            $table->string('fuelType');
            $table->string('ABS');
            $table->double('price');
            $table->string('img');
            $table->year('modelYear');
            $table->longtext('description');
            $table->foreign('itemTypeId')->references('id')->on('tbl_itemType');
            
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
        Schema::dropIfExists('tbl_items');
    }
}
