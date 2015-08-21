<?php

class AgreementsController extends BaseController {

	/**
	 * Agreement Repository
	 *
	 * @var Agreement
	 */
	protected $agreement;

	public function __construct(Agreement $agreement)
	{
		$this->agreement = $agreement;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$agreements = $this->agreement->all();

		return View::make('agreements.index', compact('agreements'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agreements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Agreement::$rules);

		if ($validation->passes())
		{
			$this->agreement->create($input);

			return Redirect::route('agreements.index');
		}

		return Redirect::route('agreements.create')
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
		$agreement = $this->agreement->findOrFail($id);

		return View::make('agreements.show', compact('agreement'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agreement = $this->agreement->find($id);

		if (is_null($agreement))
		{
			return Redirect::route('agreements.index');
		}

		return View::make('agreements.edit', compact('agreement'));
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
		$validation = Validator::make($input, Agreement::$rules);

		if ($validation->passes())
		{
			$agreement = $this->agreement->find($id);
			$agreement->update($input);

			return Redirect::route('agreements.show', $id);
		}

		return Redirect::route('agreements.edit', $id)
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
		$this->agreement->find($id)->delete();

		return Redirect::route('agreements.index');
	}

}
