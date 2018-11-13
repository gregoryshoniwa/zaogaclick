<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinistryAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministry_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->decimal('debt',8,2);
            $table->decimal('credit',8,2);
            $table->decimal('balance',8,2);
            $table->string('ministry_id');

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
        Schema::dropIfExists('ministry_accounts');
    }
}
