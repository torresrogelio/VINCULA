<?php

class Current_graduate_student_jobsController extends BaseController {

	/**
	 * Current_graduate_student_job Repository
	 *
	 * @var Current_graduate_student_job
	 */
	protected $current_graduate_student_job;

	public function __construct(Current_graduate_student_job $current_graduate_student_job)
	{
		$this->current_graduate_student_job = $current_graduate_student_job;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$current_graduate_student_jobs = $this->current_graduate_student_job->all();

		return View::make('current_graduate_student_jobs.index', compact('current_graduate_student_jobs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('current_graduate_student_jobs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Current_graduate_student_job::$rules);

		if ($validation->passes())
		{
			$this->current_graduate_student_job->create($input);

			return Redirect::route('current_graduate_student_jobs.index');
		}

		return Redirect::route('current_graduate_student_jobs.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$current_graduate_student_job = $this->current_graduate_student_job->findOrFail($id);

		return View::make('current_graduate_student_jobs.show', compact('current_graduate_student_job'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$current_graduate_student_job = $this->current_graduate_student_job->find($id);

		if (is_null($current_graduate_student_job))
		{
			return Redirect::route('current_graduate_student_jobs.index');
		}

		return View::make('current_graduate_student_jobs.edit', compact('current_graduate_student_job'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Current_graduate_student_job::$rules);

		if ($validation->passes())
		{
			$current_graduate_student_job = $this->current_graduate_student_job->find($id);
			$current_graduate_student_job->update($input);

			return Redirect::route('current_graduate_student_jobs.show', $id);
		}

		return Redirect::route('current_graduate_student_jobs.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->current_graduate_student_job->find($id)->delete();

		return Redirect::route('current_graduate_student_jobs.index');
	}

}
