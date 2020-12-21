<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }
    
    public function index() {
        if($this->session->userdata('email')) {
            redirect('User');
        }

        $this->load->view('login/index');
    }

    public function cek_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $get_user = $this->model_model->login($username, $password);

        if($get_user) {
            $data = [
                'username' => $username,
                'logged_in_time' => time()
            ];

            $this->session->set_userdata($data);
            redirect('User');
        } else {
            $this->session->set_flashdata('message', '<p>User tidak terdaftar.</p>');
            redirect('Login');
        }
    }
}
