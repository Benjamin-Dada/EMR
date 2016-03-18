<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_vitals', function (Blueprint $table)
        {
            $table->increments('id')->unsigned();
/*            $table->integer('patients_id');
*/          $table->integer('temp');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('bp_sys')->nullable();
            $table->integer('bp_dias')->nullable();
            $table->integer('pulse')->nullable();
            $table->integer('oxy_sat')->nullable();
            $table->integer('head_cir')->nullable();
            $table->integer('waist_cir')->nullable();
            $table->integer('BMI')->nullable();
            $table->timestamps();
            
            /*$table->foreign('patients_id')
                  ->references('id')->on('patients_reg')
                  ->onDelete('cascade');*/

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients_vitals'); 
    }
}
