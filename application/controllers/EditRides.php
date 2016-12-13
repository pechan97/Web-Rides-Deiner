<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EditRides extends CI_Controller
{

    public function show_rides()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->model("Dashboard_model");
        $this->load->model("Rides_model");
        $user = $_SESSION['user'];
        $data['segmento']= $this->uri->segment(3);
        $data['rides']= $this->Rides_model->rides_id($data['segmento']);
        $data['name'] = $this->Dashboard_model->get_name($user['id']);
        $this->load->view('EditRides/editrides',$data);
    }

}
