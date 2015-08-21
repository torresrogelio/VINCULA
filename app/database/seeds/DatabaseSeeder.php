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
		$this->call('ExchangesTableSeeder');
		$this->call('Agreement_typesTableSeeder');
		$this->call('Agreement_incomesTableSeeder');
		$this->call('Agreement_seatsTableSeeder');
		$this->call('Agreement_seat_studentsTableSeeder');
		$this->call('Exchange_subjectsTableSeeder');
		$this->call('Survey_studentsTableSeeder');
		$this->call('Work_offersTableSeeder');
		$this->call('Work_offer_studentsTableSeeder');
		$this->call('Survey_managersTableSeeder');
	}

}
