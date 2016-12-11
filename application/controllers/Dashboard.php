<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function show_dashboard()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->view('Dashboard/dashboard.php', $data);
    }
   
}
