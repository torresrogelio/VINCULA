<?php

class Exchange_subjectsController extends BaseController {

	/**
	 * Exchange_subject Repository
	 *
	 * @var Exchange_subject
	 */
	protected $exchange_subject;

	public function __construct(Exchange_subject $exchange_subject)
	{
		$this->exchange_subject = $exchange_subject;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exchange_subjects = $this->exchange_subject->all();

		return View::make('exchange_subjects.index', compact('exchange_subjects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('exchange_subjects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Exchange_subject::$rules);

		if ($validation->passes())
		{
			$this->exchange_subject->create($input);

			return Redirect::route('exchange_subjects.index');
		}

		return Redirect::route('exchange_subjects.create')
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
		$exchange_subject = $this->exchange_subject->findOrFail($id);

		return View::make('exchange_subjects.show', compact('exchange_subject'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exchange_subject = $this->exchange_subject->find($id);

		if (is_null($exchange_subject))
		{
			return Redirect::route('exchange_subjects.index');
		}

		return View::make('exchange_subjects.edit', compact('exchange_subject'));
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
		$validation = Validator::make($input, Exchange_subject::$rules);

		if ($validation->passes())
		{
			$exchange_subject = $this->exchange_subject->find($id);
			$exchange_subject->update($input);

			return Redirect::route('exchange_subjects.show', $id);
		}

		return Redirect::route('exchange_subjects.edit', $id)
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
		$this->exchange_subject->find($id)->delete();

		return Redirect::route('exchange_subjects.index');
	}

}
