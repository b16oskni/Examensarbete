<?php

namespace App\Models;

use CodeIgniter\Model;

    class Game_model extends Model {


        protected $table = 'game';

        public function get_games($name = false) {

            //FIX TO ONLY SHOW 5 latest games or w/e
            /* if($name === FALSE) {
                $query = $this->db->get('game');
                return $query;
            } */
            
            $this->select('*');
            $this->where('redteam =', $name);
            $this->orWhere('blueteam =', $name);
            $query = $this->get();

            return $query;
        }

    }