<?php

class Renters_Controller extends Controller {

	/**
	 * The layout being used by the controller.
	 *
	 * @var string
	 */
	public $layout = 'renters.layout';

	/**
	 * Indicates if the controller uses RESTful routing.
	 *
	 * @var bool
	 */
	public $restful = true;

	/**
	 * View all of the renters.
	 *
	 * @return void
	 */
	public function get_index()
	{
		$renters = Renter::all();

		$this->layout->title   = 'Renters';
		$this->layout->content = View::make('renters.index')->with('renters', $renters);
	}

	/**
	 * Show the form to create a new renter.
	 *
	 * @return void
	 */
	public function get_create()
	{
		$this->layout->title   = 'New Renter';
		$this->layout->content = View::make('renters.create');
	}

	/**
	 * Create a new renter.
	 *
	 * @return Response
	 */
	public function post_create()
	{
		$validation = Validator::make(Input::all(), array(
			'name' => array('required', 'max:255'),
			'driver_license_number' => array('required', 'max:255'),
			'driver_license_state' => array('required', 'max:255'),
			'date_of_birth' => array('required'),
		));

		if($validation->valid())
		{
			$renter = new Renter;

			$renter->name = Input::get('name');
			$renter->driver_license_number = Input::get('driver_license_number');
			$renter->driver_license_state = Input::get('driver_license_state');
			$renter->date_of_birth = Input::get('date_of_birth');

			$renter->save();

			Session::flash('message', 'Added renter #'.$renter->id);

			return Redirect::to('renters');
		}

		else
		{
			return Redirect::to('renters/create')->with_errors($validation->errors);
		}
	}

	/**
	 * View a specific renter.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_view($id)
	{
		$renter = Renter::find($id);

		if(is_null($renter))
		{
			return Redirect::to('renters');
		}

		$this->layout->title   = 'Viewing Renter #'.$id;
		$this->layout->content = View::make('renters.view')->with('renter', $renter);
	}

	/**
	 * Show the form to edit a specific renter.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_edit($id)
	{
		$renter = Renter::find($id);

		if(is_null($renter))
		{
			return Redirect::to('renters');
		}

		$this->layout->title   = 'Editing Renter';
		$this->layout->content = View::make('renters.edit')->with('renter', $renter);
	}

	/**
	 * Edit a specific renter.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function post_edit($id)
	{
		$validation = Validator::make(Input::all(), array(
			'name' => array('required', 'max:255'),
			'driver_license_number' => array('required', 'max:255'),
			'driver_license_state' => array('required', 'max:255'),
			'date_of_birth' => array('required'),
		));

		if($validation->valid())
		{
			$renter = Renter::find($id);

			if(is_null($renter))
			{
				return Redirect::to('renters');
			}

			$renter->name = Input::get('name');
			$renter->driver_license_number = Input::get('driver_license_number');
			$renter->driver_license_state = Input::get('driver_license_state');
			$renter->date_of_birth = Input::get('date_of_birth');

			$renter->save();

			Session::flash('message', 'Updated renter #'.$renter->id);

			return Redirect::to('renters');
		}

		else
		{
			return Redirect::to('renters/edit/'.$id)->with_errors($validation->errors);
		}
	}

	/**
	 * Delete a specific renter.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function get_delete($id)
	{
		$renter = Renter::find($id);

		if( ! is_null($renter))
		{
			$renter->delete();

			Session::flash('message', 'Deleted renter #'.$renter->id);
		}

		return Redirect::to('renters');
	}
}