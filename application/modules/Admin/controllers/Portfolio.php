<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Portfolio extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('portfolioModel');
        $this->load->model('adminModel');
        is_logged_in();
        if ($this->session->userdata('role_id') != 1) {

            redirect("blocked");
        }
    }

    public function index()
    {

        $data = [
            'title' => 'Portfolio',
            'user' => $this->adminModel->get_user(),
            'portfolio' => $this->adminModel->get_portfolio()
        ];
        $this->load->view('admin/portfolio', $data);
    }

    public function addportfolio()
    {
        $this->load->portfolioModel->add();
        redirect("portfolio");
    }
    public function editportfolio()
    {
        $this->load->portfolioModel->edit();
        redirect("portfolio");
    }

    public function geteditport()
    {

        echo json_encode($this->load->portfolioModel->getportById($_POST['id']));
    }

    public function delete()
    {
        $id = $this->uri->segment(4);
        $q = $this->db->where('id', $id)->delete('portfolio');
        if ($q) {
            $this->session->set_flashdata('flash', 'Done Delete');
            redirect('portfolio');
        }
    }
}
