<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPatientsIdToPatientsVitals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients_vitals', function(Blueprint $table)
            {
                $table->integer('patients_id')->unsigned();

                $table->foreign('patients_id')
                      ->references('id')->on('patients_reg')
                      ->onDelete('cascade');   
            });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}