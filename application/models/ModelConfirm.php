<?php

class ModelConfirm extends CI_Model{
    public function __construct() {
        $this->table = 'customers';
    }

    public function modelCreate(){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'age' => $this->input->post('age'),
            'address' => $this->input->post('address'),
            'noitiem' => $this->input->post('noitiem'),
            'doituong' => $this->input->post('doituong'),
            'ngaytiem' => $this->input->post('ngaytiem')
        );
        $this->db->insert($this->table, $data);
    }
}
