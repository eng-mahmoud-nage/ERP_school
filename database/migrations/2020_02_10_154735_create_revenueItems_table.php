<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevenueItemsTable extends Migration {

	public function up()
	{
		Schema::create('revenueItems', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar');
			$table->string('name_en');
			$table->integer('category_id')->unsigned();
			$table->float('cost');
			$table->integer('academic_year_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('revenueItems');
	}
}