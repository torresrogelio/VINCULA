<?php

class Company_typesController extends BaseController {

	/**
	 * Company_type Repository
	 *
	 * @var Company_type
	 */
	protected $company_type;

	public function __construct(Company_type $company_type)
	{
		$this->company_type = $company_type;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$company_types = $this->company_type->all();

		return View::make('company_types.index', compact('company_types'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('company_types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Company_type::$rules);

		if ($validation->passes())
		{
			$this->company_type->create($input);

			return Redirect::route('company_types.index');
		}

		return Redirect::route('company_types.create')
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
		$company_type = $this->company_type->findOrFail($id);

		return View::make('company_types.show', compact('company_type'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$company_type = $this->company_type->find($id);

		if (is_null($company_type))
		{
			return Redirect::route('company_types.index');
		}

		return View::make('company_types.edit', compact('company_type'));
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
		$validation = Validator::make($input, Company_type::$rules);

		if ($validation->passes())
		{
			$company_type = $this->company_type->find($id);
			$company_type->update($input);

			return Redirect::route('company_types.show', $id);
		}

		return Redirect::route('company_types.edit', $id)
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
		$this->company_type->find($id)->delete();

		return Redirect::route('company_types.index');
	}

}
