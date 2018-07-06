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
            $table->increments('id');
            $table->string('email', 250)->unique();
            $table->string('password', 64);
            $table->string('fullname', 250)->charset('utf8');
            $table->string('avatar', 14)->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone', 32)->nullable();
            $table->unsignedTinyInteger('status')->default(0)->comment('Account Status (0: Active, 1: Deactive)');
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
