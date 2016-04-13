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
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->string('name');
            $table->integer('dose');
            $table->string('duration');
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
        Schema::drop('drugs_prescription');
    }
}
