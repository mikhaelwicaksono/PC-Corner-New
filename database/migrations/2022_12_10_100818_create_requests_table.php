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
        Schema::create('requests', function (Blueprint $table) {
            $table->id('request_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('users_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type');
            $table->string('brand');
            $table->string('model_code');
            $table->string('more_information');
            $table->string('img');
            $table->date('request_date');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
};
