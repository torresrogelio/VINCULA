<?php

class ExchangesController extends BaseController {

	/**
	 * Exchange Repository
	 *
	 * @var Exchange
	 */
	protected $exchange;

	public function __construct(Exchange $exchange)
	{
		$this->exchange = $exchange;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exchanges = $this->exchange->all();

		return View::make('exchanges.index', compact('exchanges'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$students = Student::select(DB::raw('CONCAT(first_name, \' \', last_name, \' - \', number) AS name, id'))->get()->lists('name', 'id');
		return View::make('exchanges.create')->withStudents($students);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Exchange::$rules);

		if ($validation->passes())
		{
			$this->exchange->create($input);

			return Redirect::route('exchanges.index');
		}

		return Redirect::route('exchanges.create')
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
		$exchange = $this->exchange->findOrFail($id);

		return View::make('exchanges.show', compact('exchange'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exchange = $this->exchange->find($id);

		if (is_null($exchange))
		{
			return Redirect::route('exchanges.index');
		}

		return View::make('exchanges.edit', compact('exchange'));
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
		$validation = Validator::make($input, Exchange::$rules);

		if ($validation->passes())
		{
			$exchange = $this->exchange->find($id);
			$exchange->update($input);

			return Redirect::route('exchanges.show', $id);
		}

		return Redirect::route('exchanges.edit', $id)
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
		$this->exchange->find($id)->delete();

		return Redirect::route('exchanges.index');
	}

}
