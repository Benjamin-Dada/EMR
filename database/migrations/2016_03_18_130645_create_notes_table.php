<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes',function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('notes')->nullable();
            $table->string('test')->nullable();
            $table->string('prescription')->nullable();
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
       // Schema::drop('notes');
    }
}
