<?php

namespace App\Controllers;

class Pages extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function view($name = NULL) {
        
        /* if(! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            //show error msg
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        } */

        /* if($this->request->getMethod() === 'post'){
            //add get from model using slug
            $data['games'] = $this->game_model->get_games($name);
        } */

        $model = model(Game_model::class);
        $data['games'] = $model->get_games($name);


        echo view('templates/header');
        echo view('templates/team_search', $data);
        echo view('templates/footer');
        
    }
}
