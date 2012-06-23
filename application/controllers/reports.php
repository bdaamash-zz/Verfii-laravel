<?php

class Reports_Controller extends Controller {

	/**
	 * The layout being used by the controller.
	 *
	 * @var string
	 */
	public $layout = 'reports.layout';

	/**
	 * Indicates if the controller uses RESTful routing.
	 *
	 * @var bool
	 */
	public $restful = true;

	/**
	 * View all of the reports.
	 *
	 * @return void
	 */
	public function get_index()
	{
		$reports = Report::all();

		$this->layout->title   = 'Reports';
		$this->layout->content = View::make('reports.index')->with('reports', $reports);
	}

	/**
	 * Show the form to create a new report.
	 *
	 * @return void
	 */
	public function get_create()
	{
		$this->layout->title   = 'New Report';
		$this->layout->content = View::make('reports.create');
	}

	/**
	 * Create a new report.
	 *
	 * @return Response
	 */
	public function post_create()
	{
		$validation = Validator::make(Input::all(), array(
			'title' => array('required', 'max:255'),
			'agreement_start_date' => array('required'),
			'agreement_end_date' => array('required'),
			'message' => array('required'),
			'type' => array('required', 'integer'),
			'renter_id' => array('required', 'integer'),
			'company_id' => array('required', 'integer'),
			'status' => array('required', 'integer'),
		));

		if($validation->valid())
		{
			$report = new Report;

			$report->title = Input::get('title');
			$report->agreement_start_date = Input::get('agreement_start_date');
			$report->agreement_end_date = Input::get('agreement_end_date');
			$report->message = Input::get('message');
			$report->type = Input::get('type');
			$report->renter_id = Input::get('renter_id');
			$report->company_id = Input::get('company_id');
			$report->status = Input::get('status');

			$report->save();

			Session::flash('message', 'Added report #'.$report->id);

			return Redirect::to('reports');
		}

		else
		{
			return Redirect::to('reports/create')->with_errors($validation->errors);
		}
	}

	/**
	 * View a specific report.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_view($id)
	{
		$report = Report::find($id);

		if(is_null($report))
		{
			return Redirect::to('reports');
		}

		$this->layout->title   = 'Viewing Report #'.$id;
		$this->layout->content = View::make('reports.view')->with('report', $report);
	}

	/**
	 * Show the form to edit a specific report.
	 *
	 * @param  int   $id
	 * @return void
	 */
	public function get_edit($id)
	{
		$report = Report::find($id);

		if(is_null($report))
		{
			return Redirect::to('reports');
		}

		$this->layout->title   = 'Editing Report';
		$this->layout->content = View::make('reports.edit')->with('report', $report);
	}

	/**
	 * Edit a specific report.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function post_edit($id)
	{
		$validation = Validator::make(Input::all(), array(
			'title' => array('required', 'max:255'),
			'agreement_start_date' => array('required'),
			'agreement_end_date' => array('required'),
			'message' => array('required'),
			'type' => array('required', 'integer'),
			'renter_id' => array('required', 'integer'),
			'company_id' => array('required', 'integer'),
			'status' => array('required', 'integer'),
		));

		if($validation->valid())
		{
			$report = Report::find($id);

			if(is_null($report))
			{
				return Redirect::to('reports');
			}

			$report->title = Input::get('title');
			$report->agreement_start_date = Input::get('agreement_start_date');
			$report->agreement_end_date = Input::get('agreement_end_date');
			$report->message = Input::get('message');
			$report->type = Input::get('type');
			$report->renter_id = Input::get('renter_id');
			$report->company_id = Input::get('company_id');
			$report->status = Input::get('status');

			$report->save();

			Session::flash('message', 'Updated report #'.$report->id);

			return Redirect::to('reports');
		}

		else
		{
			return Redirect::to('reports/edit/'.$id)->with_errors($validation->errors);
		}
	}

	/**
	 * Delete a specific report.
	 *
	 * @param  int       $id
	 * @return Response
	 */
	public function get_delete($id)
	{
		$report = Report::find($id);

		if( ! is_null($report))
		{
			$report->delete();

			Session::flash('message', 'Deleted report #'.$report->id);
		}

		return Redirect::to('reports');
	}
}