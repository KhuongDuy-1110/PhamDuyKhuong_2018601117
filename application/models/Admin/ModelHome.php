<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelHome extends CI_Model{
    public function __construct()
    {
        $this->table = ('customers');
    }

    public function modelRead(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($this->table);

        return $query->result();
    }

}
