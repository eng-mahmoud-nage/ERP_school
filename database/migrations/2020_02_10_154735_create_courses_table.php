<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar');
			$table->float('performance_grade');
			$table->float('mid_term_grade');
			$table->float('term_grade');
			$table->float('total_course_grade');
			$table->float('low_course_grade');
			$table->integer('control_authority');
			$table->float('degree_factor')->nullable();
			$table->integer('level_id')->unsigned();
			$table->string('name_en');
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}