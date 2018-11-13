<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('province')->nullable();

            $table->string('current_pastor_id');

            $table->string('current_sec_id');

            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('coodinates')->nullable();
            $table->string('contacts')->nullable();

            $table->longtext('profile')->nullable();
            $table->binary('church_image')->nullable();

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
        Schema::dropIfExists('churches');
    }
}
