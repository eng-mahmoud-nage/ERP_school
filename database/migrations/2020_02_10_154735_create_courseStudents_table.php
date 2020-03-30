<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseStudentsTable extends Migration {

	public function up()
	{
		Schema::create('courseStudents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->bigInteger('student_code')->unique();
			$table->integer('academic_year_id')->unsigned();
			$table->float('st_mid_term');
			$table->string('nd_mid_term')->default('0');
			$table->float('st_term_grade')->default('0');
			$table->float('nd_term_grade')->default('0');
			$table->float('st_performance_grade')->default('0');
			$table->float('nd_performance_grade')->default('0');
			$table->float('st_total_grade');
			$table->float('nd_total_grade')->default('0');
			$table->float('total_course_grade');
			$table->float('low_course_grade');
			$table->boolean('std_status');
			$table->boolean('course_status');
		});
	}

	public function down()
	{
		Schema::drop('courseStudents');
	}
}