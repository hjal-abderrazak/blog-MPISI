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
            $table->string('name');
            $table->string('email', 190)->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('code_postale');
            $table->string('adresse');
            $table->string('ville');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('role', ['admin', 'user'])->default('user');
            
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
