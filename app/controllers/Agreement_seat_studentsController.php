<?php

class Agreement_seat_studentsController extends BaseController {

	/**
	 * Agreement_seat_student Repository
	 *
	 * @var Agreement_seat_student
	 */
	protected $agreement_seat_student;

	public function __construct(Agreement_seat_student $agreement_seat_student)
	{
		$this->agreement_seat_student = $agreement_seat_student;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$agreement_seat_students = $this->agreement_seat_student->all();

		return View::make('agreement_seat_students.index', compact('agreement_seat_students'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agreement_seat_students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Agreement_seat_student::$rules);

		if ($validation->passes())
		{
			$this->agreement_seat_student->create($input);

			return Redirect::route('agreement_seat_students.index');
		}

		return Redirect::route('agreement_seat_students.create')
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
		$agreement_seat_student = $this->agreement_seat_student->findOrFail($id);

		return View::make('agreement_seat_students.show', compact('agreement_seat_student'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agreement_seat_student = $this->agreement_seat_student->find($id);

		if (is_null($agreement_seat_student))
		{
			return Redirect::route('agreement_seat_students.index');
		}

		return View::make('agreement_seat_students.edit', compact('agreement_seat_student'));
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
		$validation = Validator::make($input, Agreement_seat_student::$rules);

		if ($validation->passes())
		{
			$agreement_seat_student = $this->agreement_seat_student->find($id);
			$agreement_seat_student->update($input);

			return Redirect::route('agreement_seat_students.show', $id);
		}

		return Redirect::route('agreement_seat_students.edit', $id)
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
		$this->agreement_seat_student->find($id)->delete();

		return Redirect::route('agreement_seat_students.index');
	}

}
