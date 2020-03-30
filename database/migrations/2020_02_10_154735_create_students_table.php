<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();

			$table->string('name_ar');
			$table->string('name_en');
			$table->string('password')->nullable();
			$table->string('student_code')->nullable()->unique();
			$table->date('dob');
			$table->string('phone')->unique();
			$table->integer('parentt_id')->unsigned();
			$table->string('image')->nullable();
			$table->string('national_id')->unique();
			$table->tinyInteger('religion');
			$table->tinyInteger('gender');
			$table->string('address_ar');
			$table->string('address_en');
			$table->tinyInteger('second_lang')->default(0);
			$table->tinyInteger('class_major')->default(0);
			$table->integer('nationality_id')->unsigned();
			$table->integer('place_id')->unsigned();
			$table->integer('region_id')->nullable();
			$table->boolean('check_out')->default(0);
			$table->boolean('status')->default(0);

		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}