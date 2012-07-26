<?php

class Company extends Eloquent {

	/**
	 * The name of the table associated with the model.
	 *
	 * @var string
	 */
	public static $table = 'companies';

	/**
	 * Indicates if the model has update and creation timestamps.
	 *
	 * @var bool
	 */
	public static $timestamps = false;

    public function users() {
        return $this->has_many('User');
    }

    public function renters() {
        return $this->has_many('Renter');
    }

    public function reports() {
        return $this->has_many('Report');
    }
}
