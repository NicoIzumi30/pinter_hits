<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Challenge extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pinter Hits Challenge';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['challenge'] = $this->db->get('challenge')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('challenge/index', $data);
        $this->load->view('template/footer');
    }

    public function add_challenge()
    {
        $data['title'] = 'Add Challenge';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('title', 'Challenge', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('s&k', 'S&K', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('challenge/add_challenge', $data);
            $this->load->view('template/footer');
        } else {

            $config['upload_path']          = './assets/image/challenge/';
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
                    'title' => $this->input->post('title', TRUE),
                    'deskripsi' => $this->input->post('deskripsi', TRUE),
                    'sk' => $this->input->post('s&k', TRUE),
                    'poster' => $image,
                    'tanggal' => date_create()->format('Y-m-d'),
                    'periode' => $this->input->post('periode', TRUE)


                );
                $this->db->insert('challenge', $dataa);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Challenge added!!
                 </div>');
                redirect('challenge');
            }
        }
    }
    public function delete($id)
    {
        $where = array(
            'id' => $id
        );
        $this->db->where($where);
        $this->db->delete('challenge');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                 Delete success
                 </div>');
        redirect('challenge');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Challenge';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('title', 'Challenge', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('s&k', 'S&K', 'required');

        if ($this->form_validation->run() == false) {
            $this->db->where_in('id', $id);
            $data['challenge'] = $this->db->get('challenge')->result();
            $this->load->view('template/header', $data);
            $this->load->view('challenge/edit_challenge', $data);
            $this->load->view('template/footer');
        } else {

            $id = $this->input->post('id');
            if ($_FILES['image']['name'] != "") {
                $config['upload_path']          = './assets/image/challenge/';
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
                'title' => $this->input->post('title', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'sk' => $this->input->post('s&k', TRUE),
                'poster' => $image,
                'tanggal' => date_create()->format('Y-m-d'),
                'periode' => $this->input->post('periode', TRUE)
            );
            $where = array(
                'id' => $id
            );
            $this->db->where($where);
            $this->db->update('challenge', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Challenge berhasil di update!
            </div>');
            redirect('challenge');
        }
    }
}
