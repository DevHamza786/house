<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->integer('plot');
            $table->integer('serial');
            $table->integer('area');
            $table->integer('phase');
            $table->string('name');
            $table->string('address');
            $table->string('date');
            $table->integer('msd');
            $table->string('phone');


            $table->index('user_id');
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
        Schema::dropIfExists('entries');
    }
}
