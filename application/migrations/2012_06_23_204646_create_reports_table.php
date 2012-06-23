<?php

class Create_Reports_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::create('reports', function($table)
		{
			$table->increments('id');

			$table->string('title');
			$table->date('agreement_start_date');
			$table->date('agreement_end_date');
			$table->text('message');
			$table->integer('type');
			$table->integer('status');

			$table->integer('renter_id');
            $table->foreign('renter_id')->references('id')->on('renters');
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
		Schema::drop('reports');
	}

}
