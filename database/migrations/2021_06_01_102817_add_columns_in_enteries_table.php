<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInEnteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->string('name2')->nullable()->default(null);
            $table->string('name3')->nullable()->default(null);
            $table->string('name4')->nullable()->default(null);
            $table->string('name5')->nullable()->default(null);
            $table->string('name6')->nullable()->default(null);
            $table->string('name7')->nullable()->default(null);
            $table->string('name8')->nullable()->default(null);
            $table->string('name9')->nullable()->default(null);
            $table->string('name10')->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enteries', function (Blueprint $table) {
            //
        });
    }
}
