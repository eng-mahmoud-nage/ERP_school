<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDebtsTable extends Migration {

	public function up()
	{
		Schema::create('debts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->bigInteger('student_code');
			$table->integer('academic_year_id')->unsigned();
			$table->tinyInteger('type');
			$table->float('amount');
			$table->float('paid');
			$table->float('residual')->default('0');
			$table->integer('debtable_id')->unsigned();
			$table->string('debtable_type');
		});
	}

	public function down()
	{
		Schema::drop('debts');
	}
}