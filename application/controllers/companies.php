<?php

class Companies_Controller extends Controller {

	/**
	 * The layout being used by the controller.
	 *
	 * @var string
	 */
	public $layout = 'companies.layout';

	/**
	 * Indicates if the controller uses RESTful routing.
	 *
	 * @var bool
	 */
	public $restful = true;

	/**
	 * View all of the companies.
	 *
	 * @return void
	 */
	public function get_index()
	{
		$companies = Company::all();

		$this->layout->title   = 'Companies';
		$this->layout->content = View::make('companies.index')->with('companies', $companies);
	}

	/**
	 * Show the form to create a new company.
	 *
	 * @return void
	 */
	public function get_create()
	{
		$this->layout->title   = 'New Company';
		$this->layout->content = View::make('companies.create');
	}

	/**
	 * Create a new company.
	 *
	 * @return Response
	 */
	public function post_create()
	{
		$validation = Validator::make(Input::all(), array(
			'name' => array('required', 'max:255'),
			'address' => array('required', 'max:255'),
			'city' => array('required', 'max:255'),
			'state' => array('required', 'max:255'),
			'zipcode' => array('required', 'max:255'),
			'phone' => array('required', 'integer'),
			'email' => array('required', 'max:255'),
			'fax' => array('required', 'integer'),
			'date_joined' => array('required'),
			'contact_name' => array('required', 'max:255'),
		));

		if($validation->valid())
		{
			$company = new Company;

			$company->name = Input::get('name');
			$company->address = Input::get('address');
			$company->city = Input::get('city');
			$company->state = Input::get('state');
			$company->zipcode = Input::get('zipcode');
			$company->phone = Input::get('phone');
			$company->email = Input::get('email');
			$company->fax = Input::get('fax');
			$company->date_joined = Input::get('date_joined');
			$company->contact_name = Input::get('contact_name');

			$company->save();

			Session::flash('message', 'Added company #'.$company->id);

			return Redirect::to('companies');
		}

		else
		{
			return Redirect::to('companies/create')->with_errors($validation->errors);
		}
	}

	/**
	 * View a specific company.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_view($id)
	{
		$company = Company::find($id);

		if(is_null($company))
		{
			return Redirect::to('companies');
		}

		$this->layout->title   = 'Viewing Company #'.$id;
		$this->layout->content = View::make('companies.view')->with('company', $company);
	}

	/**
	 * Show the form to edit a specific company.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_edit($id)
	{
		$company = Company::find($id);

		if(is_null($company))
		{
			return Redirect::to('companies');
		}

		$this->layout->title   = 'Editing Company';
		$this->layout->content = View::make('companies.edit')->with('company', $company);
	}

	/**
	 * Edit a specific company.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function post_edit($id)
	{
		$validation = Validator::make(Input::all(), array(
			'name' => array('required', 'max:255'),
			'address' => array('required', 'max:255'),
			'city' => array('required', 'max:255'),
			'state' => array('required', 'max:255'),
			'zipcode' => array('required', 'max:255'),
			'phone' => array('required', 'integer'),
			'email' => array('required', 'max:255'),
			'fax' => array('required', 'integer'),
			'date_joined' => array('required'),
			'contact_name' => array('required', 'max:255'),
		));

		if($validation->valid())
		{
			$company = Company::find($id);

			if(is_null($company))
			{
				return Redirect::to('companies');
			}

			$company->name = Input::get('name');
			$company->address = Input::get('address');
			$company->city = Input::get('city');
			$company->state = Input::get('state');
			$company->zipcode = Input::get('zipcode');
			$company->phone = Input::get('phone');
			$company->email = Input::get('email');
			$company->fax = Input::get('fax');
			$company->date_joined = Input::get('date_joined');
			$company->contact_name = Input::get('contact_name');

			$company->save();

			Session::flash('message', 'Updated company #'.$company->id);

			return Redirect::to('companies');
		}

		else
		{
			return Redirect::to('companies/edit/'.$id)->with_errors($validation->errors);
		}
	}

	/**
	 * Delete a specific company.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function get_delete($id)
	{
		$company = Company::find($id);

		if( ! is_null($company))
		{
			$company->delete();

			Session::flash('message', 'Deleted company #'.$company->id);
		}

		return Redirect::to('companies');
	}
}