<?php

namespace App\Models;

use CodeIgniter\Model;

    class Player_model extends Model {


        protected $table = 'player';

        public function get_players($name = false) {

            $this->select('*');
            $this->where('playername =', $name);
            $query = $this->get();

            return $query;
        }
    }