<?php

class Survey_managersController extends BaseController {

	/**
	 * Survey_manager Repository
	 *
	 * @var Survey_manager
	 */
	protected $survey_manager;

	public function __construct(Survey_manager $survey_manager)
	{
		$this->survey_manager = $survey_manager;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$survey_managers = $this->survey_manager->all();

		return View::make('survey_managers.index', compact('survey_managers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('survey_managers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Survey_manager::$rules);

		if ($validation->passes())
		{
			$this->survey_manager->create($input);

			return Redirect::route('survey_managers.index');
		}

		return Redirect::route('survey_managers.create')
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
		$survey_manager = $this->survey_manager->findOrFail($id);

		return View::make('survey_managers.show', compact('survey_manager'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$survey_manager = $this->survey_manager->find($id);

		if (is_null($survey_manager))
		{
			return Redirect::route('survey_managers.index');
		}

		return View::make('survey_managers.edit', compact('survey_manager'));
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
		$validation = Validator::make($input, Survey_manager::$rules);

		if ($validation->passes())
		{
			$survey_manager = $this->survey_manager->find($id);
			$survey_manager->update($input);

			return Redirect::route('survey_managers.show', $id);
		}

		return Redirect::route('survey_managers.edit', $id)
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
		$this->survey_manager->find($id)->delete();

		return Redirect::route('survey_managers.index');
	}

}
