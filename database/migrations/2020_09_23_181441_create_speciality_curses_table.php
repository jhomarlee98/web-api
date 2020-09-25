<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialityCursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciality_curses', function (Blueprint $table) {
            $table->id('cod');
            $table->unsignedBigInteger('cod_speciality');
            $table->unsignedBigInteger('cod_curse');
            $table->timestamps();

        $table->foreign('cod_speciality')
            ->references('cod')
            ->on('specialities');

        $table->foreign('cod_curse')
            ->references('cod')
            ->on('curses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speciality_curses');
    }
}
