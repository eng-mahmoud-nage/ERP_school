<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommitteStudentsTable extends Migration {

	public function up()
	{
		Schema::create('committe_students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->bigInteger('student_code');
			$table->integer('academic_year_id')->unsigned();
			$table->integer('committe_id')->unsigned();
			$table->tinyInteger('religion');
			$table->integer('setting_num');
		});
	}

	public function down()
	{
		Schema::drop('committe_students');
	}
}