<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('RFC', 13);
			$table->integer('type')->unsigned();
			$table->string('street');
			$table->integer('exterior_number');
			$table->integer('interior_number');
			$table->integer('postal_code');
			$table->string('city');
			$table->string('satate');
			$table->string('country');
			$table->tinyInteger('is_internal_company');
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
		Schema::drop('companies');
	}

}
