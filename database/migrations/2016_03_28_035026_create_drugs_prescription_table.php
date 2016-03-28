<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugsPrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs_prescription', function (Blueprint $table){
            $table->integer('id');
            $table->integer('patient_id')->unsigned();
            $table->string('name');
            $table->integer('dose');
            $table->datetime('duration');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('drugs_presciption');
    }
}
