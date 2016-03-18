<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_tests', function (Blueprint $table)
        {
            $table->increments('id')->unsigned();
            /*$table->integer('patients_id');
*/            $table->integer('ua');
            $table->integer('blood_count');
            $table->integer('pcv');
            $table->integer('esr')->nullable();
            $table->integer('pap_smear')->nullable();
            $table->integer('hiv_12_screening')->nullable();
            $table->integer('hb_ag_test')->nullable();
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
        Schema::drop('lab_tests');
    }
}
