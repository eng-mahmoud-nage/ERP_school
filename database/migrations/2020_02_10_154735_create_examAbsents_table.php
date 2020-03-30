<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamAbsentsTable extends Migration {

	public function up()
	{
		Schema::create('examAbsents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->bigInteger('student_code');
			$table->integer('course_id')->unsigned();
			$table->integer('academic_year_id')->unsigned();
			$table->date('date');
			$table->text('note_ar')->nullable();
			$table->text('note_en')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('examAbsents');
	}
}