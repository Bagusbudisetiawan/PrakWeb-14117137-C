<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }

    public function index() {
        if($this->session->userdata('username') == NULL) {
            $this->session->set_flashdata('message', '<p>Maaf, anda harus login terlebih dahulu.</p>');
            redirect('Login');
        } else {
            if($this->model_model->is_login_session_expired()) {
                $this->session->set_flashdata('message', '<p>Sesi login telah habis, silahkan login kembali.</p>');
                redirect('user/logout');
            }
        }

        $user_session = $this->session->userdata('username');
        $data['user'] = $this->model_model->get_username($user_session);
        $this->load->view('user/index', $data);
    }

    public function logout() {
        if($this->session->flashdata('message') == NULL) {
            $this->session->set_flashdata('message', '<p>Sesi login telah habis, silahkan login kembali.</p>');
        } else {
            $this->session->set_flashdata('message', '<p>Sukses logout!</p>');
        }

        $this->session->unset_userdata('username');
        redirect('Login');
    }
}
