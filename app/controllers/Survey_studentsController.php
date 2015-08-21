<?php

class Survey_studentsController extends BaseController {

	/**
	 * Survey_student Repository
	 *
	 * @var Survey_student
	 */
	protected $survey_student;

	public function __construct(Survey_student $survey_student)
	{
		$this->survey_student = $survey_student;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$survey_students = $this->survey_student->all();

		return View::make('survey_students.index', compact('survey_students'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('survey_students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Survey_student::$rules);

		if ($validation->passes())
		{
			$this->survey_student->create($input);

			return Redirect::route('survey_students.index');
		}

		return Redirect::route('survey_students.create')
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
		$survey_student = $this->survey_student->findOrFail($id);

		return View::make('survey_students.show', compact('survey_student'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$survey_student = $this->survey_student->find($id);

		if (is_null($survey_student))
		{
			return Redirect::route('survey_students.index');
		}

		return View::make('survey_students.edit', compact('survey_student'));
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
		$validation = Validator::make($input, Survey_student::$rules);

		if ($validation->passes())
		{
			$survey_student = $this->survey_student->find($id);
			$survey_student->update($input);

			return Redirect::route('survey_students.show', $id);
		}

		return Redirect::route('survey_students.edit', $id)
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
		$this->survey_student->find($id)->delete();

		return Redirect::route('survey_students.index');
	}

}
