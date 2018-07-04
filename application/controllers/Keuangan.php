<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        redirect('keuangan/kas', 'refresh');
    }
    public function kas()
    {
        $data['title'] = 'Kas';
        $this->render_page('kas', $data);
    }
    public function pemasukan()
    {
        $data['title'] = 'Data Pemasukan';
        $this->render_page('pemasukan', $data);
    }
    public function pengeluaran(){
        $data['title'] = 'Data Pengeluaran';
        $this->render_page('pengeluaran',$data);
    }
    public function lap_pemasukan(){
      $data['title'] = 'Laporan Pemasukan';
      $this->render_page('l_pemasukan',$data);
    }
    public function lap_pengeluaran(){
      $data['title'] = 'Laporan Pengeluaran';
      $this->render_page('l_pengeluaran',$data);
    }
    private function render_page($view, $data)
    {
        $this->load->view('template/header', $data);
        $this->load->view('template/mobile_header', $data);
        $this->load->view('template/desktop_header', $data);
        $this->load->view('template/header_content', $data);
        $this->load->view($view, $data);
        $this->load->view('template/footer');
    }
}
