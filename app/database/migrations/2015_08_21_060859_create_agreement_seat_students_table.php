<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgreementSeatStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agreement_seat_students', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('agreement_seats_id')->unsigned();
			$table->integer('student_id')->unsigned();
			$table->dateTime('start_date');
			$table->dateTime('completion_date');
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
		Schema::drop('agreement_seat_students');
	}

}
