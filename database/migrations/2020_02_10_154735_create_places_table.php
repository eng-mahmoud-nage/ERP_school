<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlacesTable extends Migration {

	public function up()
	{
		Schema::create('places', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar');
			$table->string('name_en');
		});
	}

	public function down()
	{
		Schema::drop('places');
	}
}