<?php

class Admin_Users_Controller extends Controller {

	/**
	 * The layout being used by the controller.
	 *
	 * @var string
	 */
	public $layout = 'users.layout';

	/**
	 * Indicates if the controller uses RESTful routing.
	 *
	 * @var bool
	 */
	public $restful = true;

	/**
	 * View all of the users.
	 *
	 * @return void
	 */
	public function get_index()
	{
		$users = User::all();

		$this->layout->title   = 'Users';
		$this->layout->content = View::make('users.index')->with('users', $users);
	}

	/**
	 * Show the form to create a new user.
	 *
	 * @return void
	 */
	public function get_create()
	{
		$this->layout->title   = 'New User';
		$this->layout->content = View::make('users.create');
	}

	/**
	 * Create a new user.
	 *
	 * @return Response
	 */
	public function post_create()
	{
		$validation = Validator::make(Input::all(), array(
			'username' => array('required', 'max:255'),
			'email' => array('required', 'max:255'),
			'first_name' => array('required', 'max:255'),
			'middle_name' => array('required', 'max:255'),
			'last_name' => array('required', 'max:255'),
		));

		if($validation->valid())
		{
			$user = new User;

			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->middle_name = Input::get('middle_name');
			$user->last_name = Input::get('last_name');

			$user->save();

			Session::flash('message', 'Added user #'.$user->id);

			return Redirect::to('admin/users');
		}

		else
		{
			return Redirect::to('admin/users/create')->with_errors($validation->errors);
		}
	}

	/**
	 * View a specific user.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_view($id)
	{
		$user = User::find($id);

		if(is_null($user))
		{
			return Redirect::to('admin/users');
		}

		$this->layout->title   = 'Viewing User #'.$id;
		$this->layout->content = View::make('users.view')->with('user', $user);
	}

	/**
	 * Show the form to edit a specific user.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_edit($id)
	{
		$user = User::find($id);

		if(is_null($user))
		{
			return Redirect::to('admin/users');
		}

		$this->layout->title   = 'Editing User';
		$this->layout->content = View::make('users.edit')->with('user', $user);
	}

	/**
	 * Edit a specific user.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function post_edit($id)
	{
		$validation = Validator::make(Input::all(), array(
			'username' => array('required', 'max:255'),
			'email' => array('required', 'max:255'),
			'first_name' => array('required', 'max:255'),
			'middle_name' => array('required', 'max:255'),
			'last_name' => array('required', 'max:255'),
		));

		if($validation->valid())
		{
			$user = User::find($id);

			if(is_null($user))
			{
				return Redirect::to('admin/users');
			}

			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->middle_name = Input::get('middle_name');
			$user->last_name = Input::get('last_name');

			$user->save();

			Session::flash('message', 'Updated user #'.$user->id);

			return Redirect::to('admin/users');
		}

		else
		{
			return Redirect::to('admin/users/edit/'.$id)->with_errors($validation->errors);
		}
	}

	/**
	 * Delete a specific user.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function get_delete($id)
	{
		$user = User::find($id);

		if( ! is_null($user))
		{
			$user->delete();

			Session::flash('message', 'Deleted user #'.$user->id);
		}

		return Redirect::to('admin/users');
	}
}
