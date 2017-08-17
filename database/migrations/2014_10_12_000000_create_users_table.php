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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('Primary key');
            $table->bigInteger('uid')->comment('User ID');
            $table->string('user_name',50)->comment('login user name,like phone number,and wechat/QQ login tag');
            $table->string('nick_name',50)->comment('user nick name,display on the app and admin dashboard');
            $table->tinyInteger('login_type')->comment('1:phone number 2:email 3:wechat 4:QQ 5:more and more');
            $table->string('password',50)->comment('login password,encrypt by md5 or aes-256-cfb');
            $table->string('token',50)->comment('every time login automatic generate as login only dentiﬁer');
            $table->string('verify_code',50)->comment('when user change the password use it as Security code');
            $table->string('phone',11)->comment('phone number');
            $table->tinyInteger('sex')->comment('sex 1: man 2: woman');
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
        Schema::dropIfExists('users');
    }
}
