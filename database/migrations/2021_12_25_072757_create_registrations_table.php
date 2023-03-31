<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('reg_id');
            $table->string('first_name',30)->nullable();
            $table->string('last_name',30)->nullable();
            $table->string('email',100);
            $table->string('phone',30);
            $table->text('address')->nullable();
            $table->string('occupation',30);
            $table->string('institute_name',100);
            $table->tinyInteger('previous_experience');
            $table->text('purpose');
            $table->text('current_use');
            $table->string('created_at_mil',100);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
