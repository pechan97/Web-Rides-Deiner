<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function show_dashboard()
    {
        $session = $this->session->flashdata('dashboard');
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->model("Dashboard_model");
        $user = $_SESSION['user'];
        $data['name'] = $this->Dashboard_model->get_name($user['id']);
        $data['ride'] = $this->Dashboard_model->loadData($user['id']);
        $this->load->view('Dashboard/dashboard', $data);
    }
    public function get_rides()
    {
        $this->load->model("Dashboard_model");
         $user = $_SESSION['user'];
         $result = $this->Dashboard_model->get_rides($user['id']);
            if (sizeof($result) > 0) {
                $this->session->set_userdata('rides', $result);
                $session = $this->session->set_flashdata('dashboard', true);
                redirect('EditRides/show_rides');
    }
   
  }
}
