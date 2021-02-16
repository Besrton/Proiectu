<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id(); //integer unsigned increment
            $table->string('name'); //varchar
            $table->string('email')->unique(); //unique === element unic no pot ser igual
            $table->timestamp('email_verified_at')->nullable();  // nullable === opcional
            $table->string('password'); //
            $table->rememberToken(); //vacar100 guarda un toquen
            $table->timestamps(); //2 columnes create_at update_at
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
