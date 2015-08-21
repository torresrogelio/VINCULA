<?php

class Work_offersController extends BaseController {

	/**
	 * Work_offer Repository
	 *
	 * @var Work_offer
	 */
	protected $work_offer;

	public function __construct(Work_offer $work_offer)
	{
		$this->work_offer = $work_offer;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$work_offers = $this->work_offer->all();

		return View::make('work_offers.index', compact('work_offers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('work_offers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Work_offer::$rules);

		if ($validation->passes())
		{
			$this->work_offer->create($input);

			return Redirect::route('work_offers.index');
		}

		return Redirect::route('work_offers.create')
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
		$work_offer = $this->work_offer->findOrFail($id);

		return View::make('work_offers.show', compact('work_offer'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$work_offer = $this->work_offer->find($id);

		if (is_null($work_offer))
		{
			return Redirect::route('work_offers.index');
		}

		return View::make('work_offers.edit', compact('work_offer'));
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
		$validation = Validator::make($input, Work_offer::$rules);

		if ($validation->passes())
		{
			$work_offer = $this->work_offer->find($id);
			$work_offer->update($input);

			return Redirect::route('work_offers.show', $id);
		}

		return Redirect::route('work_offers.edit', $id)
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
		$this->work_offer->find($id)->delete();

		return Redirect::route('work_offers.index');
	}

}
