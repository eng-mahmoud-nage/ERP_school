<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApprovalDegreesTable extends Migration {

	public function up()
	{
		Schema::create('approval_degrees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->bigInteger('student_code');
			$table->integer('academic_year_id')->unsigned();
			$table->float('total_year_degree');
			$table->float('student_total_degree');
			$table->boolean('std_status');
		});
	}

	public function down()
	{
		Schema::drop('approval_degrees');
	}
}