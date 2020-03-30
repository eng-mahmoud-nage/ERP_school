<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLevelsTable extends Migration {

	public function up()
	{
		Schema::create('levels', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar');
			$table->string('name_en');
			$table->float('cost');
			$table->integer('stage_id')->unsigned();
			$table->float('st_instalment')->nullable();
			$table->float('nd_instalment')->nullable();
			$table->float('rd_instalment')->nullable();
			$table->float('th_instalment')->nullable();
			$table->date('st_inst_date')->nullable();
			$table->date('nd_inst_date')->nullable();
			$table->string('rd_inst_date')->nullable();
			$table->string('th_inst_date')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('levels');
	}
}