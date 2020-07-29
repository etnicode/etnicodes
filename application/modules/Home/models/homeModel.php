<?php
defined('BASEPATH') or exit('No direct script access allowed');

class homeModel extends MY_Controller
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
}
