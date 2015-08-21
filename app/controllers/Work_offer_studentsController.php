<?php

class Work_offer_studentsController extends BaseController {

	/**
	 * Work_offer_student Repository
	 *
	 * @var Work_offer_student
	 */
	protected $work_offer_student;

	public function __construct(Work_offer_student $work_offer_student)
	{
		$this->work_offer_student = $work_offer_student;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$work_offer_students = $this->work_offer_student->all();

		return View::make('work_offer_students.index', compact('work_offer_students'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('work_offer_students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Work_offer_student::$rules);

		if ($validation->passes())
		{
			$this->work_offer_student->create($input);

			return Redirect::route('work_offer_students.index');
		}

		return Redirect::route('work_offer_students.create')
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
		$work_offer_student = $this->work_offer_student->findOrFail($id);

		return View::make('work_offer_students.show', compact('work_offer_student'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$work_offer_student = $this->work_offer_student->find($id);

		if (is_null($work_offer_student))
		{
			return Redirect::route('work_offer_students.index');
		}

		return View::make('work_offer_students.edit', compact('work_offer_student'));
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
		$validation = Validator::make($input, Work_offer_student::$rules);

		if ($validation->passes())
		{
			$work_offer_student = $this->work_offer_student->find($id);
			$work_offer_student->update($input);

			return Redirect::route('work_offer_students.show', $id);
		}

		return Redirect::route('work_offer_students.edit', $id)
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
		$this->work_offer_student->find($id)->delete();

		return Redirect::route('work_offer_students.index');
	}

}
