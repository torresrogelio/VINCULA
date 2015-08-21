<?php

class Agreement_seatsController extends BaseController {

	/**
	 * Agreement_seat Repository
	 *
	 * @var Agreement_seat
	 */
	protected $agreement_seat;

	public function __construct(Agreement_seat $agreement_seat)
	{
		$this->agreement_seat = $agreement_seat;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$agreement_seats = $this->agreement_seat->all();

		return View::make('agreement_seats.index', compact('agreement_seats'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agreement_seats.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Agreement_seat::$rules);

		if ($validation->passes())
		{
			$this->agreement_seat->create($input);

			return Redirect::route('agreement_seats.index');
		}

		return Redirect::route('agreement_seats.create')
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
		$agreement_seat = $this->agreement_seat->findOrFail($id);

		return View::make('agreement_seats.show', compact('agreement_seat'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agreement_seat = $this->agreement_seat->find($id);

		if (is_null($agreement_seat))
		{
			return Redirect::route('agreement_seats.index');
		}

		return View::make('agreement_seats.edit', compact('agreement_seat'));
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
		$validation = Validator::make($input, Agreement_seat::$rules);

		if ($validation->passes())
		{
			$agreement_seat = $this->agreement_seat->find($id);
			$agreement_seat->update($input);

			return Redirect::route('agreement_seats.show', $id);
		}

		return Redirect::route('agreement_seats.edit', $id)
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
		$this->agreement_seat->find($id)->delete();

		return Redirect::route('agreement_seats.index');
	}

}
