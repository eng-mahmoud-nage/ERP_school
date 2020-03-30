<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommitteesTable extends Migration {

	public function up()
	{
		Schema::create('committees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar');
			$table->string('name_en');
			$table->string('locatiom');
			$table->integer('control_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('committees');
	}
}