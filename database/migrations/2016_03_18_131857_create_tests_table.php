<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('ua');
            $table->integer('blood_count');
            $table->integer('pcv');
            $table->integer('esr')->nullable();
            $table->integer('pap_smear')->nullable();
            $table->integer('hiv_12_screening')->nullable();
            $table->integer('hb_ag_test')->nullable();
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')
                  ->references('id')
                  ->on('patients')->onDelete('cascade');
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
        Schema::drop('tests');
    }
}
