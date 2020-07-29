<!-- author : lanaysp -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminModel');
        is_logged_in();

        if ($this->session->userdata('role_id') != 1) {

            redirect("blocked");
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => $this->adminModel->get_user(),
            'portfolio' => $this->adminModel->get_portfolio()
        ];
        $this->load->view('Dashboard', $data);
    }


    public function hapusPortfolio($id)
    {
        $this->load->adminModel->delete();
    }
}
