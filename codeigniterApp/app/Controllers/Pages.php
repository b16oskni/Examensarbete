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

        //$data['title'] = ucfirst($page);    //capitalizes first letter

        echo view('templates/header');
        echo view('pages/' . $page);
        echo view('templates/footer');
        
    }
}
