<?php

class Create_Renters_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::create('renters', function($table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('driver_license_number');
			$table->string('driver_license_state');
			$table->date('date_of_birth');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('renters');
	}

}