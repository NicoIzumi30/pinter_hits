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
        $this->form_validation->set_rules('judul_artikel', 'Artikel', 'required');
        $this->form_validation->set_rules('berita', 'Berita', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('public_relations/add_article', $data);
            $this->load->view('template/footer');
        } else {

            $config['upload_path']          = './assets/image/artikel/';
            $config['allowed_types']        = 'gif|jpg|png|webp|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                echo "Failed add article ";
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];

                $dataa = array(
                    'judul_artikel' => $this->input->post('judul_artikel', TRUE),
                    'berita' => $this->input->post('berita', TRUE),
                    'penulis' => $this->input->post('penulis', TRUE),
                    'image' => $image

                );
                $this->db->insert('artikel', $dataa);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Article added!!
                 </div>');
                redirect('pr/article');
            }
        }
    }
    public function delete($id)
    {
        $where = array(
            'id_artikel' => $id
        );
        $this->M_pr->delete($where, 'artikel');
        redirect('pr/article');
    }
    // public function edit_article($id)
    // {
    //     $data['title'] = 'Edit Article';
    //     $data['article'] = $this->M_pr->article_where($id);
    //     $this->load->view('template/header', $data);
    //     $this->load->view('public_relations/edit_article', $data);
    //     $this->load->view('template/footer');
    // }
    public function edit_article($id)
    {
        $data['title'] = 'Edit Article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul_artikel', 'Artikel', 'required');
        $this->form_validation->set_rules('berita', 'Berita', 'required');

        if ($this->form_validation->run() == false) {
            $data['article'] = $this->M_pr->article_where($id);
            $this->load->view('template/header', $data);
            $this->load->view('public_relations/edit_article', $data);
            $this->load->view('template/footer');
        } else {

            $id = $this->input->post('id');
            if ($_FILES['image']['name'] != "") {
                $config['upload_path']          = './assets/image/artikel/';
                $config['allowed_types']        = 'gif|jpg|png|webp|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $image = $upload_data['file_name'];
                }
            } else {
                $image = $this->input->post('old');
            }
            $data = array(
                'judul_artikel' => $this->input->post('judul_artikel', TRUE),
                'berita' => $this->input->post('berita', TRUE),
                'penulis' => $this->input->post('penulis', TRUE),
                'image' => $image,
                'tanggal' => $this->input->post('tanggal', TRUE),
            );
            $where = array(
                'id_artikel' => $id
            );
            $this->M_admin->update($where, 'artikel', $data);
            redirect('pr/article');
        }
    }
    public function upload_image()
    {
        $data['title'] = 'Upload Image';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['upload'] = $this->db->get('image')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('public_relations/upload_image', $data);
        $this->load->view('template/footer');
    }
    public function add_upload_image()
    {
        $config['upload_path']          = './assets/image/image/';
        $config['allowed_types']        = 'gif|jpg|png|webp|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            echo "Failed add image ";
        } else {
            $image = $this->upload->data();
            $image = $image['file_name'];

            $dataa = array(
                'image' => $image

            );
            $this->db->insert('image', $dataa);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Upload Success!!
                 </div>');
            redirect('pr/upload_image');
        }
    }
    public function delete_image($id)
    {
        $where = array(
            'id' => $id
        );
        $this->M_pr->delete($where, 'image');
        redirect('pr/upload_image');
    }
}
