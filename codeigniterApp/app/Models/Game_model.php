<?php

namespace App\Models;

use CodeIgniter\Model;

    class Game_model extends Model {

        /* public function __construct() {
            $this->load->database();
        } */

        protected $table = 'game';

        public function get_games($name = false) {

            //FIX TO ONLY SHOW 5 latest games or w/e
            if($name === FALSE) {
                $query = $this->db->get('game');
                return $query->result_array();
            }
            
            $this->select('*');
            $this->where('redteam =', $name);
            $this->orWhere('blueteam =', $name);
            $this->join('team', 'team.matchid = game.matchid');
            $query = $this->get();

            return $query->getResult();
        }
    }