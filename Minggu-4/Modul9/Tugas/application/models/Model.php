<?php

class Model extends CI_model {
    
    public function login($username, $password) {
        return $this->db->get_where('user', ['username' => $username, 'password' => $password])->row_array();
    }

    public function get_username($username) {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function is_login_session_expired() {
        $login_session_duration = 3600;
        $current_time = time();

        if(isset($_SESSION['logged_in_time']) && isset($_SESSION['username'])) {
            if(($current_time - $this->session->userdata('logged_in_time')) > $login_session_duration) {
                return true;
            }
        }

        return false;
    }

    public function get_username_by_id($user_id) {
        return $this->db->get_where('user', ['id' => $user_id])->row_array();
    }

    public function get_user_id_by_username($username) {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function get_articles() {
        return $this->db->select('article.id, user.username, article.text_article')->from('article')->join('user', 'user.id=article.id_user')->get()->result();
    }

    public function insert_article($content) {
        if(NULL !== $this->session->userdata('id')) {
            $article = array(
                'id_user' => $this->session->userdata('id'),
                'text_article' => $content
            );
    
            $this->db->insert('article', $article);
        }
        
        redirect('User');
    }

    public function delete_article($id) {
        if(NULL !== $this->session->userdata('id')) {
            if($this->session->userdata('fname') == 'Administrator') {
                $this->db->delete('article', array('id' => $id));
            } else {
                $this->db->delete('article', array('id' => $id, 'id_user' => $this->session->userdata('id')));
            }
        }
        
        redirect('User');
    }

    public function update_article($id, $article) {
        if(NULL !== $this->session->userdata('id')) {
            if($this->session->userdata('fname') == 'Administrator') {
                $this->db->update('article', $article, array('id' => $id));
            } else {
                $this->db->update('article', $article, array('id' => $id, 'id_user' => $this->session->userdata('id')));
            }
        }
        
        redirect('User');
    }

}