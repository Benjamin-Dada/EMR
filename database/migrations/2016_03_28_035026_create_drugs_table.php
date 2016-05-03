<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('dose');
            $table->string('duration');
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
        Schema::drop('drugs');
    }
}
