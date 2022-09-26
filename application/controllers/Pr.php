<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pr extends CI_Controller
{
    public function article()
    {
        $data['title'] = 'Article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['article'] = $this->db->get('artikel')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('public_relations/index', $data);
        $this->load->view('template/footer');
    }
    public function add_article()
    {
        $data['title'] = 'Add Article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('public_relations/add_article', $data);
        $this->load->view('template/footer');
    }
}
