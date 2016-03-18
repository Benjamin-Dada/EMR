<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_reg', function (Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->date('DOB');
            $table->string('marital_stat')->nullable();
            $table->longText('address')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable()->default('08090952186');
            $table->string('mm_name')->nullable()->default('dada');
            $table->string('kin_name')->nullable()->default('dada');
            $table->string('kin_phone')->nullable()->default('08090952186');
            $table->longText('kin_address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer_name')->nullable();
            $table->longText('work_address')->nullable();
            $table->string('religion')->nullable();
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
            Schema::drop('patients_reg');
    }
}
