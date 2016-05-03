<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitals', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('temp');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('bp_sys')->nullable();
            $table->integer('bp_dias')->nullable();
            $table->integer('pulse')->nullable();
            $table->integer('oxy_sat')->nullable();
            $table->integer('head_cir')->nullable();
            $table->integer('waist_cir')->nullable();
            $table->integer('BMI')->nullable();
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')
                  ->references('id')->on('patients')
                  ->onDelete('cascade');
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
        Schema::drop('vitals'); 
    }
}
