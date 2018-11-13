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
            $table->increments('id');
            $table->string('name');
            $table->string('national_id')->nullable();
            $table->binary('national_id_image')->nullable();
            $table->string('drivers_id')->nullable();
            $table->binary('drivers_id_image')->nullable();
            $table->string('passport_id')->nullable();
            $table->binary('passport_id_image')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('sex')->nullable();
            $table->string('marrital_status');
            $table->timestamp('dob')->nullable();
            $table->longtext('profile')->nullable();

            $table->binary('avatar')->nullable();
            $table->string('user_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();




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
