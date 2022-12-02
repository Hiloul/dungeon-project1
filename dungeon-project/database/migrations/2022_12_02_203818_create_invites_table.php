<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('invites', function (Blueprint $table) {
        $table->increments('id');
        $table->string('email');
        $table->string('token', 16)->unique();
        $table->timestamps();
    });
}
public function down()
{
    Schema::drop('invites');
}

    /**
     * Reverse the migrations.
     *
     * 
     */
   
};
