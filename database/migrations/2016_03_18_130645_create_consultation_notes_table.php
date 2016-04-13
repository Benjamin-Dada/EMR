<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_notes',function (Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->string('notes')->nullable();
            $table->string('prescription')->nullable();
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
        Schema::drop('consultation_notes');
    }
}
