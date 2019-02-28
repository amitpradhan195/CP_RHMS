<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',60)->unique();
            $table->string('password');
            $table->string('firstName');
            $table->string('lastName');
            $table->enum('Gender',['Male', 'Female', 'Others']);
            $table->string('address');
            $table->string('contactNo');
            $table->string('email',60)->unique();
            $table->date('dateOfBirth');
            $table->unsignedInteger('userTypeId');
            $table->foreign('userTypeId')->references('userTypeId')->on('tbl_userType');

            $table->rememberToken();
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
        Schema::dropIfExists('tbl_users');
    }
}
