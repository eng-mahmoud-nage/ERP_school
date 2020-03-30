<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLevelStudentsTable extends Migration {

	public function up()
	{
		Schema::create('level_student', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->integer('academic_year_id')->unsigned();
			$table->integer('level_id')->unsigned();
			$table->integer('stage_id')->unsigned();
			$table->integer('class_id')->unsigned();
			$table->bigInteger('student_code');
			$table->boolean('bus_subscription')->default(-1);
			$table->boolean('std_status')->default(-1);
		});


	}

	public function down()
	{
		
		Schema::drop('level_students');
		
	}
}