<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinancialsTable extends Migration {

	public function up()
	{
		Schema::create('financials', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->float('amount_paid');
			$table->integer('paymrnt_method');
			$table->integer('student_id')->unsigned();
			$table->bigInteger('student_code');
			$table->integer('academic_year_id')->unsigned();
			$table->integer('receipt_num');
			$table->string('cheque_num')->nullable();
			$table->boolean('cheque_confirmed')->default(0);
			$table->string('cheque_bank_name')->nullable();
			$table->string('cheque_owner_name')->nullable();
			$table->date('cheque_exchange_date')->nullable();
			$table->string('payment_image')->nullable();
			$table->boolean('is_Deposit')->default(0);
			$table->boolean('is_recovery')->default(0);
			$table->integer('type');
			$table->integer('financialable_id');
			$table->string('financialable_type');
			$table->integer('bank_id')->unsigned();
			$table->string('bank_Deposit_number');
			$table->text('note_ar')->nullable();
			$table->text('note_en')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('financials');
	}
}