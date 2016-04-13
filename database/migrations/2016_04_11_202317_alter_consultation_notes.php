<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterConsultationNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
         Schema::table('consultation_notes', function(Blueprint $table){
            $table->foreign('patient_id')
                  ->references('id')->on('patients_reg')
                  ->onDelete('cascade');
         
        }
        );  
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
