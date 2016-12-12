<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function show_dashboard()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->model("Dashboard_model");
        $user = $_SESSION['user'];
        $data['name'] = $this->Dashboard_model->get_name($user['id']);
        $data['ride'] = $this->Dashboard_model->loadData($user['id']);
        $this->load->view('Dashboard/dashboard', $data);
    }
   
}
