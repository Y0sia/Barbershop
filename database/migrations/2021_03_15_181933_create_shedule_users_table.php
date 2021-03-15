<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheduleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shedule_users', function (Blueprint $table) {
            $table->unsignedBigInteger('shedule_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->primary(['shedule_id', 'user_id']);
            $table->foreign('shedule_id')->references('id')->on('shedules');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('shedule_users');
    }
}
