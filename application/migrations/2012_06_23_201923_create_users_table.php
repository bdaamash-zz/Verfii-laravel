<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::create('users', function($table)
		{
			$table->increments('id');

			$table->string('username');
			$table->string('email');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');

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
		Schema::drop('users');
	}

}
