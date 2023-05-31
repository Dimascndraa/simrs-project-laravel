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
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('title');
            $table->string('gender');
            $table->string('religion');
            $table->string('blood_group')->nullable();
            $table->string('allergy')->nullable();
            $table->string('married_status')->nullable();
            $table->string('laguage');
            $table->string('citizenship')->nullable();
            $table->string('id_card')->nullable();
            $table->string('address');
            $table->string('ward');
            $table->string('subdistrict');
            $table->string('regency');
            $table->string('province')->nullable();
            $table->string('mobile_phone_number');
            $table->string('email')->nullable();
            $table->string('last_education');
            $table->string('ethnic');
            $table->string('job');
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
