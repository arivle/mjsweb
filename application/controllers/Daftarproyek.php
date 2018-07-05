<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarproyek extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_daftarproyek');
		$this->load->model('M_klien');
	}

	public function index()
	{
		$data['title'] = 'Daftar Proyek';
		$data['proyek'] = $this->M_daftarproyek->getAll()->result();
		$data['klien'] = $this->M_klien->getAll()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/mobile_header', $data);
		$this->load->view('template/desktop_header', $data);
		$this->load->view('template/header_content', $data);
		$this->load->view('daftarproyek');
		$this->load->view('template/footer');
	}
	function tambah(){
		$data = array(
			'namaKlien' => $this->input->post('klien-select'),
			'namaProyek' => $this->input->post('nama-input'),
			'noTelp' => $this->input->post('telp-input'),
			'email' => $this->input->post('email-input'),
			'alamat' => $this->input->post('alamat-input')
		);
		$this->M_proyek->addProyek($data);
		redirect('proyek');
	}
	function hapus($idproyek){
		$this->M_proyek->hapusProyek($idproyek);
		redirect('proyek');
	}

	function edit(){
		$idproyek = $this->input->post('id-input');
		$data = array(
			'namaProyek' => $this->input->post('nama-input'),
			'noTelp' => $this->input->post('telp-input'),
			'email' => $this->input->post('email-input'),
			'alamat' => $this->input->post('alamat-input')
		);
		$this->M_proyek->updateProyek($idproyek,$data);
		redirect('proyek');
	}

}
