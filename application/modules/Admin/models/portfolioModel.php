<?php
defined('BASEPATH') or exit('No direct script access allowed');

class portfolioModel extends MY_Controller
{


    public function getAllport()
    {
        return $this->db->get('portfolio')->result();
    }


    public function getportById($id)
    {
        return $this->db->get_where('portfolio', ['id' => $id])->row_array();
    }
    public function add()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'link' => $this->input->post('link'),
            'filter' =>  $this->input->post('filter')
        ];


        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['upload_path'] = './upload/portfolio/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {

                $old_image = $data['user']['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . './upload/portfolio/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }

            $this->db->insert('portfolio', $data);
        }
        return;
    }

    public function edit()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'link' => $this->input->post('link'),
            'filter' =>  $this->input->post('filter')
        ];


        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['upload_path'] = './upload/portfolio/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {

                $old_image = $data['user']['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . './upload/portfolio/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('portfolio', $data);
        }
        return;
    }
}
