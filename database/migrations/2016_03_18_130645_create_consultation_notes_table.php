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
/*           $table->integer('patients_id');
*/           $table->string('notes');
           $table->string('prescription'); 
           $table->timestamps();

         /*  $table->foreign('patients_id')
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
        Schema::drop('consultation_notes');
    }
}
