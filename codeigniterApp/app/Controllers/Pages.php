<?php

namespace App\Controllers;
use App\Models\Game_model;

class Pages extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function view() {
        
        $model = model(Game_model::class);
        $model2 = model(Team_model::class);

        $name = $this->request->getGet('gsearch');

        if ($this->request->getMethod() === 'get') {
            
            $data = [
                'games' => $model->get_games($name)->getResultArray(),
                'teams' => $model2->get_teams($name)->getResultArray(),
            ];

            echo view('templates/header');
            echo view('templates/team_search', $data);
            echo view('templates/footer');
        }else {

            echo view('templates/header');
            //echo view('templates/team_search', $data);
            echo view('templates/footer');
            
        }

        
    }

}
