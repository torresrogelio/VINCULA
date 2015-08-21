<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyExchangesStudents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exchanges', function(Blueprint $table)
		{
			$table->foreign('student_id')
			      ->references('id')->on('students')
			      ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exchanges', function(Blueprint $table)
		{
			$table->dropForeign(['student_id']);
		});
	}

}
