<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

   public function __construct()
    {
        parent::__construct();
        $this->load->model("Settings_model");
        $this->load->model("Login_model");


    }

    public function show_settings()
    {
       $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->model("Dashboard_model");
        $user = $_SESSION['user'];
        $data['name'] = $this->Dashboard_model->get_name($user['id']);
        $data['single_user'] = $this->Settings_model->show_user_id($user['id']);
        $this->load->view('Settings/setting',$data);

    }
    public function updatePersonalData()
    {
        $user = $_SESSION['user'];
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('speed', 'Speed', 'trim|required');
        $this->form_validation->set_rules('about', 'About You', 'trim|required'); 
        if ($this->form_validation->run()) {      
       $data = array(
       'first_name' => $this->input->post('firstname'),
       'last_name' => $this->input->post('last_nameame'),
       'phone' => $this->input->post('phone'),
       'speed' => $this->input->post('speed'),
       'about' => $this->input->post('about')
       );
       $this->Settings_model->updatePersonalData($user['id'],$data);
     } else {
        $this->session->set_flashdata('error', 'All Fields are required');
        redirect('Settings/show_settings');
     }

    }
}
