
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('courses')){
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructor_id')->nullable();
            $table->unsignedBigInteger('dep_id')->nullable();
            $table->string('name')->nullable();
            $table->text('desc')->nullable();
            $table->string('grade_cert')->nullable();
            $table->string('grade_dip')->nullable();
            $table->string('entry')->nullable();
            $table->enum('exam', ['KNEC', 'NITA', 'C&G'])->nullable();
            $table->string('photo')->nullable();
            $table->string('duration')->nullable();
            $table->enum('status', ['popular'])->nullable();
            $table->timestamps();
            
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->foreign('dep_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}
