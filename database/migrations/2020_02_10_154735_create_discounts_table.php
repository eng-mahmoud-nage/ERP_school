<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscountsTable extends Migration {

	public function up()
	{
		Schema::create('discounts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('type');
			$table->float('discount');
			$table->integer('student_id')->unsigned();
			$table->bigInteger('student_code');
			$table->integer('academic_year_id')->unsigned();
			$table->date('date')->nullable();
			$table->text('note_ar')->nullable();
			$table->integer('discountable_id')->unsigned();
			$table->string('discountable_type');
			$table->text('note_en')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('discounts');
	}
}