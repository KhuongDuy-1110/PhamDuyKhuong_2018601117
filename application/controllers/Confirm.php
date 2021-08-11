<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirm extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelConfirm');
    }
    public function index(){
        $this->ModelConfirm->modelCreate();
        redirect('Welcome/index/');
    }

}
