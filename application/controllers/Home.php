<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pinter Hits Boxs';
        $data['category'] = $this->db->get('tb_category')->result_array();
        $this->load->view('template/home_head', $data);
        $this->load->view('template/home_navbar');
        $this->load->view('home/index', $data);
        $this->load->view('template/home_footer');
    }
    public function about()
    {
        $data['title'] = 'About Pinter Hits Boxs';
        $this->load->view('template/home_head', $data);
        $this->load->view('template/home_navbar');
        $this->load->view('home/about', $data);
        $this->load->view('template/home_footer');
    }
    public function blog()
    {
        $data['title'] = 'Blog Pinter Hits Boxs';
        $data['blog'] = $this->db->get('artikel')->result_array();
        $this->load->view('template/home_head', $data);
        $this->load->view('home/blog', $data);
        $this->load->view('template/home_footer');
    }
    public function challenge()
    {
        $data['title'] = 'Challenge Pinter Hits Boxs';
        $data['challenge'] = $this->db->get('challenge')->result_array();
        $this->load->view('template/home_head', $data);
        $this->load->view('home/challenge', $data);
        $this->load->view('template/home_footer');
    }
    public function read($id)
    {
        $data['title'] = 'Blog Pinter Hits Boxs';
        $this->db->where_in('id_artikel', $id);
        $data['blog'] = $this->db->get('artikel')->result();
        $this->load->view('template/home_head', $data);
        $this->load->view('home/detail_blog', $data);
        $this->load->view('template/home_footer');
    }
    public function detail($id)
    {
        $data['title'] = 'Pinter Hits Boxs Challenge';
        $this->db->where_in('id', $id);
        $data['challenge'] = $this->db->get('challenge')->result();
        $this->load->view('template/home_head', $data);
        $this->load->view('home/detail_challenge', $data);
        $this->load->view('template/home_footer');
    }
    public function variasi($id)
    {
        $data['title'] = 'Variasi Menu';
        $this->db->where_in('id_category', $id);
        $data['variasi'] = $this->db->get('tb_variasi_menu')->result();
        $this->load->view('template/home_head', $data);
        $this->load->view('home/daftar_menu', $data);
        $this->load->view('template/home_footer');
    }
    public function menu($id)
    {
        $data['title'] = 'Variasi Menu';
        $this->db->where_in('id_variasi', $id);
        $data['variasi'] = $this->db->get('tb_variasi_menu')->result();
        $this->load->view('template/home_head', $data);
        $this->load->view('home/detail_menu', $data);
        $this->load->view('template/home_footer');
    }
}
