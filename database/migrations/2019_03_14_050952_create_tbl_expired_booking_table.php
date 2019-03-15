<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblExpiredBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_expired_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('expiredDate');
            $table->unsignedInteger('userId');
            $table->unsignedInteger('itemId');
            $table->foreign('userId')->references('id')->on('tbl_users');
            $table->foreign('itemId')->references('itemId')->on('tbl_items');
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
        Schema::dropIfExists('tbl_expired_booking');
    }
}
