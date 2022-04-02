<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    if(!Schema::hasTable('students')){
            Schema::create('students', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('phone')->unique();
                $table->string('email')->unique()->nullable();
                $table->string('password')->nullable();
                $table->date('dob')->nullable();
                $table->string('marital')->nullable();
                $table->string('secondary')->nullable();
                $table->string('field')->nullable();
                $table->enum('study', ['full_time', 'part_time'])->nullable();
                $table->string('country')->nullable();
                $table->string('location')->nullable();
                $table->unsignedBigInteger('course_id')->nullable();
                $table->timestamps();
                $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
