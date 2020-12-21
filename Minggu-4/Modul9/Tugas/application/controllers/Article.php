<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }

    public function insert() {
        $content = $this->input->post('content');

        $insert = $this->model_model->insert_article($content);
    }

    public function delete() {
        $id = $this->input->post('id');

        $insert = $this->model_model->delete_article($id);
    }

    public function update() {
        $id = $this->input->post('id');
        $isi = $this->input->post('text_article');

        $article = array(
            'text_article' => $isi
        );

        $insert = $this->model_model->update_article($id, $article);
    }
}
