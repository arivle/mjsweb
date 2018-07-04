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
		$this->load->view('template/header',$data);
		$this->load->view('template/mobile_header',$data);
		$this->load->view('template/desktop_header',$data);
		$this->load->view('template/header_content',$data);
		$this->load->view('absensi');
		$this->load->view('template/footer');
	}

}
