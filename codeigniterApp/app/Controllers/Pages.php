<?php

namespace App\Controllers;
use App\Models\Game_model;

class Pages extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function view($name = NULL) {
        
        $model = model(Game_model::class);

        $data['games'] = $model->get_games();

        
        echo view('templates/header');
        echo view('templates/team_search', $data);
        echo view('templates/footer');
        
    }
}
