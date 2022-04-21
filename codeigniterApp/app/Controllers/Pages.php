<?php

namespace App\Controllers;

class Pages extends BaseController {
    
    public function index() {
        return view('welcome_message');
    }

    public function view($page = 'home') {
        
        if(! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            //show error msg
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        if($this->request->getMethod() === 'post'){
            //add get from model using slug
        }

        echo view('templates/header');
        echo view('pages/' . $page);
        echo view('templates/team_search');
        echo view('templates/footer');
        
    }
}
