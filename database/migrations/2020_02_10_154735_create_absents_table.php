<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsentsTable extends Migration {

	public function up()
	{
		Schema::create('absents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->integer('student_code');
			$table->integer('academic_year_id')->unsigned();
			$table->date('date');
			$table->text('note_ar')->nullable();
			$table->text('note_en');
		});
	}

	public function down()
	{
		Schema::drop('absents');
	}
}