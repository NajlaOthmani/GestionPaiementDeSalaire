<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('cin')->unique();
            $table->string('name');
            $table->string('lastName');
            $table->string('dateBirth');
            $table->string('sex');
            $table->string('maritalStatus');
            $table->string('city');
            $table->string('adress');
            $table->string('email')->unique();
            $table->string('phoneNumber')->nullable();
            $table->string('cnss')->unique();
            $table->string('function');
            $table->string('typeContract');
            $table->string('hiringDate');
            $table->string('contractEndDate');
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
        Schema::dropIfExists('employees');
    }
}
