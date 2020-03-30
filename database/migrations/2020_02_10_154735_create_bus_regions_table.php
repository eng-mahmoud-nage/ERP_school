<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusRegionsTable extends Migration {

	public function up()
	{
		Schema::create('bus_regions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('bus_id')->unsigned();
			$table->integer('region_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('bus_regions');
	}
}