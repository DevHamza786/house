<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnBalanceIntoEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->string('cost_of_land')->nullable();
            $table->string('other_charges')->nullable();
            $table->string('bounder_wall_charges')->nullable();
            $table->string('balance')->nullable();
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
            $table->dropColumn('c/l');
            $table->dropColumn('o/c');
            $table->dropColumn('b/c');
            $table->dropColumn('balance');
        });
    }
}
