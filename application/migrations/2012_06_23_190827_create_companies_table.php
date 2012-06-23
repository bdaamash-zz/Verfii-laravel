<?php

class Create_Companies_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::create('companies', function($table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->string('zipcode');
			$table->integer('phone');
			$table->string('email');
			$table->integer('fax');
			$table->date('date_joined');
            $table->integer('status');
			$table->string('contact_name');

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
		Schema::drop('companies');
	}

}
