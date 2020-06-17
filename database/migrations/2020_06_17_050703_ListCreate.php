<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TodoInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('who_create');
            $table->boolean('finish');
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
        Schema::drop('TodoInfo');
    }
}
