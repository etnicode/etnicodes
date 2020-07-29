<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminModel extends MY_Controller
{


    public function get_portfolio()
    {
        $q = $this->db->get('portfolio')->result_array();

        return $q;
    }
    public function get_client()
    {
        $q = $this->db->get('client')->result_array();

        return $q;
    }

    public function get_user()
    {
        $q = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        return $q;
    }

    public function getclientById($id)
    {
        return $this->db->get_where('client', ['id' => $id])->row_array();
    }

    public function add()
    {
        $data = [
            'link' => $this->input->post('link')
        ];


        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['upload_path'] = './upload/client/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {

                $old_image = $data['user']['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . './upload/client/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }

            $this->db->insert('client', $data);
        }
        return;
    }
    public function edit()
    {
        $data = [
            'link' => $this->input->post('link')
        ];


        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['upload_path'] = './upload/client/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {

                $old_image = $data['user']['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . './upload/client/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('client', $data);
        }
        return;
    }
}
