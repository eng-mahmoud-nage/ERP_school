<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckOutTable extends Migration {

	public function up()
	{
		Schema::create('check_out', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->bigInteger('student_code');
			$table->integer('academic_year_id')->unsigned();
			$table->date('date');
			$table->text('note_ar')->nullable();
			$table->text('note_en')->nullable();
			$table->float('return_amount')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('check_out');
	}
}