<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {


	/**
	 * Absensi constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_absensi');
	}

	public function index()
	{
		$data['title'] = 'Absensi';
		$data['pegawai'] = $this->M_absensi->getPegawais()->result();
		$data['absensi'] = $this->M_absensi->getAll()->result();
		$this->load->view('template/header',$data);
		$this->load->view('template/mobile_header',$data);
		$this->load->view('template/desktop_header',$data);
		$this->load->view('template/header_content',$data);
		$this->load->view('absensi');
		$this->load->view('template/footer');
	}

	function tambahManual(){
		$data = array(
			'idPegawai' => $this->input->post('pegawai-select'),
			'tanggal' => $this->input->post('tanggal-input'),
			'waktuMasuk' => $this->input->post('masuk-input'),
			'waktuKeluar' => $this->input->post('keluar-input'),
			'keterangan' => $this->input->post('keterangan-input')
		);
		$this->M_absensi->addAbsensi($data);
		redirect('absensi');
	}

	function hapus($idAbsensi){
		$this->M_absensi->hapusAbsensi($idAbsensi);
		redirect('absensi');
	}

	function edit(){
		$idAbsensi = $this->input->post('id-Absensi');
		$data = array(
			'idPegawai' => $this->input->post('pegawai-select'),
			'tanggal' => $this->input->post('tanggal-input'),
			'waktuMasuk' => $this->input->post('masuk-input'),
			'waktuKeluar' => $this->input->post('keluar-input'),
			'keterangan' => $this->input->post('keterangan-input')
		);
		$this->M_absensi->updateAbsensi($idAbsensi,$data);
		redirect('absensi');
	}
}
