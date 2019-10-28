<?php 

class Mahasiswa extends CI_controller
{
	public function index ()
	{
		$this ->load->model('Mahasiswa_model');
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view('mahasiswa/index', $data);
	}

	public function tambah()
	{

		$this->load->library('form_validation');
		$this->load->model('mahasiswa_model');

		$this-> form_validation->set_rules('nama', 'Nama', 'requered|min_lenght[3]');

		if ($this->form_validation->run() === false) {
		  $this->load->view('mahasiswa/tambah');	
		} else {
			$data = [
				'nama' => $this -> input -> post('nama'),
				'nrp' => $this -> input -> post('nrp'),
				'email' => $this -> input -> post('email'),
				'jurusan' => $this -> input -> post('jurusan')
			];
			$this->db->insert('mahasiswa', $data);
			redirect('mahasiswa/index');
		}

		
	}
}

 ?>