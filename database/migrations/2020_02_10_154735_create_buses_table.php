<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusesTable extends Migration {

	public function up()
	{
		Schema::create('buses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('driver_name_ar');
			$table->string('driver_name_en');
			$table->string('driver_phone');
			$table->string('driver_national_id');
			$table->string('bus_num');
			$table->string('traffic_ar');
			$table->string('traffic_en');
		});
	}

	public function down()
	{
		Schema::drop('buses');
	}
}