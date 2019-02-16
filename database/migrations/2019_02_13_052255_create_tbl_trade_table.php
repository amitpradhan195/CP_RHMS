<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_trade', function (Blueprint $table) {
            $table->increments('tradeId');
            $table->string('tradeType');
            $table->string('username',60);
            $table->unsignedInteger('itemId');
            $table->foreign('username')->references('username')->on('tbl_users');
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
        Schema::dropIfExists('tbl_trade');
    }
}
