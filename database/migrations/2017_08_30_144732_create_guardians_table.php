<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stud_id');
            $table->string('prim_fname');
            $table->string('prim_sname');
            $table->string('prim_email');
            $table->integer('prim_cell');
            $table->string('prim_rel');
            $table->string('sec_fname');
            $table->string('sec_sname');
            $table->string('sec_email');
            $table->integer('sec_cell');
            $table->string('sec_rel');
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
        Schema::dropIfExists('guardians');
    }
}
