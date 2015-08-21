<?php

class Agreement_typesController extends BaseController {

	/**
	 * Agreement_type Repository
	 *
	 * @var Agreement_type
	 */
	protected $agreement_type;

	public function __construct(Agreement_type $agreement_type)
	{
		$this->agreement_type = $agreement_type;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$agreement_types = $this->agreement_type->all();

		return View::make('agreement_types.index', compact('agreement_types'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agreement_types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Agreement_type::$rules);

		if ($validation->passes())
		{
			$this->agreement_type->create($input);

			return Redirect::route('agreement_types.index');
		}

		return Redirect::route('agreement_types.create')
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
		$agreement_type = $this->agreement_type->findOrFail($id);

		return View::make('agreement_types.show', compact('agreement_type'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agreement_type = $this->agreement_type->find($id);

		if (is_null($agreement_type))
		{
			return Redirect::route('agreement_types.index');
		}

		return View::make('agreement_types.edit', compact('agreement_type'));
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
		$validation = Validator::make($input, Agreement_type::$rules);

		if ($validation->passes())
		{
			$agreement_type = $this->agreement_type->find($id);
			$agreement_type->update($input);

			return Redirect::route('agreement_types.show', $id);
		}

		return Redirect::route('agreement_types.edit', $id)
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
		$this->agreement_type->find($id)->delete();

		return Redirect::route('agreement_types.index');
	}

}
