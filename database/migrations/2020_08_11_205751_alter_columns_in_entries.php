<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnsInEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->integer('plot')->nullable()->default(null)->change();
            $table->integer('serial')->nullable()->default(null)->change();
            $table->integer('area')->nullable()->default(null)->change();
            $table->integer('phase')->nullable()->default(null)->change();
            $table->string('name')->nullable()->default(null)->change();
            $table->string('address')->nullable()->default(null)->change();
            $table->string('date')->nullable()->default(null)->change();
            $table->integer('msd')->nullable()->default(null)->change();
            $table->string('phone')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entries', function (Blueprint $table) {
            //
        });
    }
}
