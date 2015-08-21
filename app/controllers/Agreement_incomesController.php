<?php

class Agreement_incomesController extends BaseController {

	/**
	 * Agreement_income Repository
	 *
	 * @var Agreement_income
	 */
	protected $agreement_income;

	public function __construct(Agreement_income $agreement_income)
	{
		$this->agreement_income = $agreement_income;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$agreement_incomes = $this->agreement_income->all();

		return View::make('agreement_incomes.index', compact('agreement_incomes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agreement_incomes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Agreement_income::$rules);

		if ($validation->passes())
		{
			$this->agreement_income->create($input);

			return Redirect::route('agreement_incomes.index');
		}

		return Redirect::route('agreement_incomes.create')
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
		$agreement_income = $this->agreement_income->findOrFail($id);

		return View::make('agreement_incomes.show', compact('agreement_income'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agreement_income = $this->agreement_income->find($id);

		if (is_null($agreement_income))
		{
			return Redirect::route('agreement_incomes.index');
		}

		return View::make('agreement_incomes.edit', compact('agreement_income'));
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
		$validation = Validator::make($input, Agreement_income::$rules);

		if ($validation->passes())
		{
			$agreement_income = $this->agreement_income->find($id);
			$agreement_income->update($input);

			return Redirect::route('agreement_incomes.show', $id);
		}

		return Redirect::route('agreement_incomes.edit', $id)
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
		$this->agreement_income->find($id)->delete();

		return Redirect::route('agreement_incomes.index');
	}

}
