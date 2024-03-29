<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->foreignId('city_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->string('first_name', 6);
            $table->string('middle_name', 60)->nullable();
            $table->string('last_name', 60);
            $table->string('address', 120);
            $table->char('zip', 10);
            $table->date('birthdate')->nullable();
            $table->date('date_hired')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
