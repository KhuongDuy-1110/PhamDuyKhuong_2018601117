<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ModelAdmin');
        $this->load->model('ModelHome');
        // User login status
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    }
    public function index(){
        if($this->isUserLoggedIn)
            redirect('Welcome/layout');
        else
            redirect('Welcome/login');
    }
    public function layout(){
        $data = array();
        if($this->isUserLoggedIn){
            $con =  array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->ModelAdmin->getRows($con);
            $data['infor'] = $this->ModelHome->modelRead();
            $this->load->view('dangkytiem', $data);
        }
        else
            redirect('Welcome/login');
    }
    public function login(){
        $data = array();

        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');

            if($this->form_validation->run() == true){
                $con = array(
                    'returnType' => 'single',
                    'conditions' => array(
                        'email'=> $this->input->post('email'),
                        'password' => $this->input->post('password')
//                        'status' => 1
                    )
                );
                $checkLogin = $this->ModelAdmin->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn', TRUE);
                    $this->session->set_userdata('userId', $checkLogin['id']);
                    $this->session->set_userdata('name', $checkLogin['name']);
//                    var_dump($this->session->userdata('userId'));
                    redirect('Welcome/layout/');
                }
                else{
                    $data['error_msg'] = '* Wrong email or password, please try again.';
                }
            }else{
                $data['error_msg'] = '* Please fill all the mandatory fields.';
            }
        }
        $this->load->view('Home', $data);
    }

    public function register(){
        $this->load->view('dangky');
    }

    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('Welcome/login');
    }

}
