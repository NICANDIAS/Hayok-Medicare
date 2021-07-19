<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('oname');
            $table->string('f_name');
            $table->integer('age');
            $table->string('height');
            $table->string('weight');
            $table->string('BMI');
            $table->string('ward');
            $table->string('state');
            $table->string('LGA');
            $table->string('genotype');
            $table->string('bloodgroup');
            $table->string('Patient_underline_illness');
            $table->string('Patient_department');
            $table->string('patient_next_of_kin');
            $table->string('patient_next_of_kin_relationship');
            $table->string('patient_next_of_kin_phone');
            $table->string('patient_next_of_kin_address');
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
        Schema::dropIfExists('patients');
    }
}
