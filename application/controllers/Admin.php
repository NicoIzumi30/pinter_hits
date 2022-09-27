<?php
class Admin extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pinter Hits';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}

	// Controller Category 
	public function category()
	{
		$data['title'] = 'Category';
		$data['category'] = $this->M_admin->get_data_category();
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/category/category', $data);
		$this->load->view('template/footer');
	}
	public function add_category()
	{
		$config['upload_path']          = './assets/image/category/';
		$config['allowed_types']        = 'gif|jpg|png|webp|jpeg';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			echo "Failed add category ";
		} else {
			$image = $this->upload->data();
			$image = $image['file_name'];
			$nama = $this->input->post('nama', TRUE);
			$description = $this->input->post('deskripsi', TRUE);

			$data = array(
				'nama_category' => $nama,
				'image' => $image,
				'deskripsi' => $description,
			);
			$this->db->insert('tb_category', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Kategori berhasil ditambahkan!
			 </div>');
			redirect('admin/category');
		}
	}

	public function del_category($id)
	{
		$where = array(
			'id_category' => $id
		);
		$this->M_admin->delete($where, 'tb_category');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Kategori berhasil di hapus!!
			 </div>');
		redirect('admin/category');
	}
	public function edit_category($id)
	{
		$data['title'] = 'Change Data Category';
		$data['category'] = $this->M_admin->get_data_category_where($id);
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/category/edit_category', $data);
		$this->load->view('template/footer');
	}
	public function update_category()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$description = $this->input->post('deskripsi');
		if ($_FILES['image']['name'] != "") {
			$config['upload_path'] = './assets/image/';
			$config['upload_path']          = './assets/image/category/';
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
			'nama_category' => $nama,
			'image' => $image,
			'deskripsi' => $description,
		);
		$where = array(
			'id_category' => $id
		);
		$this->M_admin->update($where, 'tb_category', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Kategori berhasil di update!
			 </div>');
		redirect('admin/category');
	}
	// End Controller category

	// Controller Variasi Menu
	public function variasi()
	{
		$data['title'] = 'Variasi Menu';
		$data['variasi'] = $this->M_admin->get_data_variasi();
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/variasi/variasi', $data);
		$this->load->view('template/footer');
	}
	public function add_variasi()
	{
		$config['upload_path']          = './assets/image/variasi/';
		$config['allowed_types']        = 'gif|jpg|png|webp|jpeg';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			echo "Failed add variasi menu";
		} else {
			$image = $this->upload->data();
			$image = $image['file_name'];
			$nama = $this->input->post('nama', TRUE);
			$tutorial = $this->input->post('tutorial', TRUE);
			$category = $this->input->post('category', TRUE);

			$data = array(
				'id_category' => $category,
				'nama_variasi' => $nama,
				'image' => $image,
				'cara_pembuatan' => $tutorial,
			);
			$this->db->insert('tb_variasi_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Variasi Menu added!!
			 </div>');
			redirect('admin/variasi');
		}
	}
	public function del_variasi($id)
	{
		$where = array(
			'id_variasi' => $id
		);
		$this->M_admin->delete($where, 'tb_variasi_menu');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		Delete Success!!
		 </div>');
		redirect('admin/variasi');
	}
	public function edit_variasi($id)
	{
		$data['title'] = 'Change Data Variasi';
		$data['variasi'] = $this->M_admin->get_data_variasi_where($id);
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/variasi/edit_variasi', $data);
		$this->load->view('template/footer');
	}
	public function update_variasi($id)
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama', TRUE);
		$tutorial = $this->input->post('tutorial', TRUE);
		$category = $this->input->post('category', TRUE);
		if ($_FILES['image']['name'] != "") {
			$config['upload_path']          = './assets/image/variasi/';
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
			'id_category' => $category,
			'nama_variasi' => $nama,
			'image' => $image,
			'cara_pembuatan' => $tutorial,
		);
		$where = array(
			'id_variasi' => $id
		);
		$this->M_admin->update($where, 'tb_variasi_menu', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Variasi menu updated!
		 </div>');
		redirect('admin/variasi');
	}
	// End Controller Variasi Menu

}
