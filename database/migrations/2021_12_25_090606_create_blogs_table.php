<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
           
                $table->id();
                $table->string('title');
                $table->string('blogSlug');
                $table->string('intro',300);
                $table->string('coverImage',300);
                $table->text('details');
     
                $table->unsignedBigInteger('writer_id');
                $table->foreign('writer_id')->references('id')->on('writers')->onUpdate('cascade')->onDelete('cascade');
     
                $table->enum('state',['Pending','Approve','Decline'])->default('Pending');
                $table->timestamp('date');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
