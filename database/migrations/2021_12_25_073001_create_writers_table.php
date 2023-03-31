<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',20);
            $table->string('lastName',20);
            $table->string('email',300)->unique();
            $table->string('image',300)->nullable();
            $table->text('work')->nullable();
            $table->date('dob')->nullable();
            $table->string('password',300);
            $table->text('bio')->nullable();
            $table->text('website')->nullable();
            $table->enum('user_type',['active','inactive'])->default('active');
            $table->string('phone',30)->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writers');
    }
}
