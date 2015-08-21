<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TeachersTableSeeder');
		$this->call('StudentsTableSeeder');
		$this->call('CompaniesTableSeeder');
		$this->call('AgreementsTableSeeder');
		$this->call('Company_typesTableSeeder');
		$this->call('Work_offersTableSeeder');
	}

}
