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

			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name');
			$table->string('driver_license_number');
			$table->string('driver_license_state');
			$table->date('date_of_birth');

			$table->integer('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

			$table->timestamps();
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
