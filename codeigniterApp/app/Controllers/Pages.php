<?php

namespace App\Controllers;
use App\Models\Game_model;

class Pages extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function view() {
        
        $game_model = model(Game_model::class);
        $team_model = model(Team_model::class);
        $player_model = model(Player_model::class);

        $name = $this->request->getGet('gsearch');
        $option = $this->request->getGet('searchOpt');
        if ($this->request->getMethod() === 'get') {
            
            if ($option == 'Team' || $option == "") {
                $data = ['games' => $game_model->get_games($name)->getResultArray()];

                echo view('templates/header');
                echo view('templates/team_search', $data);
                echo view('templates/footer');
            }elseif ($option == 'Player') {
                $data = ['players' => $player_model->get_players($name)->getResultArray()];

                echo view('templates/header');
                echo view('templates/player_search', $data);
                echo view('templates/footer');
            }

        }else {

            echo view('templates/header');
            echo view('templates/footer');
            
        }

        
    }

}
