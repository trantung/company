<?php

class AdminTeamController extends AdminController {

    public function index()
    {
        $teams = AdminTeam::orderBy('id', 'desc')->get();
        return View::make('admin.team.index')->with(compact('teams'));
    }

    public function create()
    {
        return View::make('admin.team.create');
    }

    public function store()
    {
        $input = Input::except('_token', 'image_url');
        $teamId = AdminTeam::create($input)->id;
        $inputImg['image_url'] = CommonUpload::uploadImage($teamId, UPLOADIMG, 'image_url', UPLOAD_TEAM);
        CommonNormal::update($teamId, ['image_url' => $inputImg['image_url']]);
        return Redirect::action('AdminTeamController@index');
    }

    public function show($id) {

    }

    public function edit($id) {
        $team = AdminTeam::find($id);
        return View::make('admin.team.edit')->with(compact('team'));
    }

    public function update($id)
    {
        $inputTeam = Input::except('_token', 'image_url');
        CommonNormal::update($id, $inputTeam);
        $imageTeam = AdminTeam::find($id);
        $input['image_url'] = CommonUpload::uploadImage($id, UPLOADIMG, 'image_url', UPLOAD_TEAM, $imageTeam->image_url);
        CommonNormal::update($id, ['image_url' => $input['image_url']]);

        return Redirect::action('AdminTeamController@index');
    }

    public function destroy($id)
    {
        AdminTeam::find($id)->delete();
        return Redirect::action('AdminTeamController@index');
    }
}