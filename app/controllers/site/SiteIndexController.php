<?php

class SiteIndexController extends SiteController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$viDes = DesContent::find(1);
		$enDes = DesContent::find(2);
		// dd(LaravelLocalization::setLocale());
		return View::make('site.index')->with(compact('viDes', 'enDes'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function slug($slug)
	{
		//from $slug to get model_name and model_id in the menus table
		$menu = Menu::findBySlug($slug);
		if (empty($menu)) {
			return Redirect::action('SiteIndexController@404');
		}
		if ($menu->model_name == 'AboutUs') {
			return Redirect::action('SiteIndexController@aboutUs');
		}
		if ($menu->model_name == 'Contact') {
			return Redirect::action('SiteIndexController@contact');
		}
		return Redirect::action('SiteIndexController@typeNew');
	}

}
