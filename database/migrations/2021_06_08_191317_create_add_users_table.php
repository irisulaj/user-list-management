<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_users', function (Blueprint $table) {
            $table->id();
        
            
            
            $table->timestamps();
        });
        Schema::table('add_users', function (Blueprint $table) {
            $table->string('name');
            $table->string('lastname');
            $table->string('username');
            $table->string('email');
            $table->boolean('status');
            $table->string('dob');
            $table->string('address');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_users');
    }
}
