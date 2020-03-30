<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateControlsTable extends Migration {

	public function up()
	{
		Schema::create('controls', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar');
			$table->string('name_en');
			$table->integer('term');
			$table->integer('level_id')->unsigned();
			$table->integer('academic_year_id')->unsigned()->default('1');
		});
	}

	public function down()
	{
		Schema::drop('controls');
	}
}