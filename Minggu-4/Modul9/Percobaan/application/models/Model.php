<?php

class Model extends CI_model {
    
    public function login($username, $password) {
        return $this->db->get_where('user', ['username' => $username, 'password' => $password])->row_array();
    }

    public function get_username($username) {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function is_login_session_expired() {
        $login_session_duration = 5;
        $current_time = time();

        if(isset($_SESSION['logged_in_time']) && isset($_SESSION['username'])) {
            if(($current_time - $this->session->userdata('logged_in_time')) > $login_session_duration) {
                return true;
            }
        }

        return false;
    }

}