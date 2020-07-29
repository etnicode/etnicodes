<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Client extends MY_Controller
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
            'title' => 'Portfolio',
            'user' => $this->adminModel->get_user(),
            'client' => $this->adminModel->get_client()
        ];
        $this->load->view('admin/client', $data);
    }

    public function addclient()
    {
        $this->load->adminModel->add();
        redirect("client");
    }

    public function geteditclient()
    {

        echo json_encode($this->load->adminModel->getclientById($_POST['id']));
    }

    public function editclient()
    {
        $this->load->adminModel->edit();
        redirect("client");
    }

    public function delete()
    {
        $id = $this->uri->segment(4);
        $q = $this->db->where('id', $id)->delete('client');
        if ($q) {
            $this->session->set_flashdata('flash', 'Done Delete');
            redirect('client');
        }
    }
}
