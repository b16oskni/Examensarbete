<?php

namespace App\Models;

use CodeIgniter\Model;

    class Game_model extends Model {


        protected $table = 'game';

        public function get_games($name = false) {

            //show only 10 results if no search term
            if($name === FALSE || $name === "") {
                $this->select('*');
                $query = $this->get(10);
                return $query;
            }
            
            $this->select('*');
            $this->where('redteam =', $name);
            $this->orWhere('blueteam =', $name);
            $query = $this->get();

            return $query;
        }

    }