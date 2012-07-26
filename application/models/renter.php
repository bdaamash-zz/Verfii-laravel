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
	public static $timestamps = true;

    public function company() {
        return $this->belongs_to('Company');
    }

    public function reports() {
        return $this->has_many('Report');
    }
}
