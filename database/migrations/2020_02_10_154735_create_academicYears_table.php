<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcademicYearsTable extends Migration {

	public function up()
	{
		Schema::create('academicYears', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('year');
			$table->boolean('active')->default(0);
			$table->integer('order')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('academicYears');
	}
}