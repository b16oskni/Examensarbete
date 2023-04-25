<?php

namespace App\Controllers;
use App\Models\Game_model;

class Pages extends BaseController {

    private bool $countTime = false;
    public function index() {
        return view('welcome_message');
    }

    public function view() {
        
        $game_model = model(Game_model::class);
        $team_model = model(Team_model::class);
        $player_model = model(Player_model::class);

        $name = $this->request->getGet('name');
        $option = $this->request->getGet('option');
        if (!$this->countTime) {
            $this->countTime = !empty($this->request->getGet('countTime'));
        }
        if ($this->request->getMethod() === 'get') {

            if ($option == "") {
                $startTime = microtime(true);
                $data = ['games' => $game_model->get_games($name)->getResultArray()];
                $this->countTime($name, $option, $startTime);
                echo view('templates/header');
                echo view('templates/game_search', $data);
                echo view('templates/footer');
            }elseif ($option == 'Player') {
                $startTime = microtime(true);
                $data = ['players' => $player_model->get_players($name)->getResultArray()];
                $this->countTime($name, $option, $startTime);
                echo view('templates/header');
                echo view('templates/player_search', $data);
                echo view('templates/footer');
            } else {
                $startTime = microtime(true);
                $data = ['teams' => $team_model->get_teams($name)->getResultArray()];
                $this->countTime($name, $option, $startTime);
                echo view('templates/header');
                echo view('templates/team_search', $data);
                echo view('templates/footer');
            }

        }else {

            echo view('templates/header');
            echo view('templates/footer');
            
        }
        
    }

    private function countTime(String $searchValue, $searchOption, float $startTime) {
        if ($this->countTime) {
            $time = microtime(true) - $startTime;
            $option = $searchOption == '' ? 'Game' : $searchOption;
            $row = [$option, $searchValue, $time];
            $path = '../../Data/codeigniter-measurments.csv';
            $fp = fopen($path, 'a');
            fputcsv($fp, $row);
            fclose($fp);
        }
    }

}
