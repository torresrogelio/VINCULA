<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExchangeSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exchange_subjects', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('exchange_id')->unsigned();
			$table->string('foreign_subject');
			$table->string('local_subject');
			$table->integer('grade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exchange_subjects');
	}

}
