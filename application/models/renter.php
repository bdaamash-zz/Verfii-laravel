<?php

class Renter extends Eloquent {

	/**
	 * The name of the table associated with the model.
	 *
	 * @var string
	 */
	public static $table = 'renters';

	/**
	 * Indicates if the model has update and creation timestamps.
	 *
	 * @var bool
	 */
	public static $timestamps = false;
}