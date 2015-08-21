<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkOfferStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_offer_students', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('work_offer_id')->unsigned();
			$table->integer('student_id')->unisgned();
			$table->date('start_date');
			$table->date('completion_date');
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
		Schema::drop('work_offer_students');
	}

}
