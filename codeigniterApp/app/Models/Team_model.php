<?php

namespace App\Models;

use CodeIgniter\Model;

    class Team_model extends Model {


        protected $table = 'team';

        public function get_teams($name = false) {

            
            $this->select('*');
            $this->where('teamname =', $name);
            $query = $this->get();

            return $query;
        }
    }