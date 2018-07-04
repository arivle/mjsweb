<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('ion_auth');

    }
    public function index()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('remember', 'Remember Me', 'integer');
            if ($this->form_validation->run() == true) {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember)) {
                    redirect('beranda', 'refresh');
                } else {
                    $this->session->flashdata('message', $this->ion_auth->errors());
                    redirect('login', 'refresh');
                }
            }
        }
        if (!$this->ion_auth->logged_in()) {
            $data = array(
                'title' => 'Login - Selamat Datang di MJS',
                'description' => 'Login MJS',
            );
            $this->load->view('template/header', $data);
            $this->load->view('login');
            $this->load->view('template/footer');
        } else {
            if ($this->ion_auth->in_group('admin')) {
                redirect('beranda', 'refresh');
            } else {
                redirect('login', 'refresh');
            }
        }
    }
    public function logout()
    {
        $this->ion_auth->logout();
        redirect('login', 'refresh');
    }
}
