<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ChangePersonalData extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ChangePersonalData_model");
        $this->load->model("Login_model");


    }

    public function show_changePersonalData()
    {
     $user = $_SESSION['user'];
    $data['single_user'] = $this->ChangePersonalData_model->show_user_id($user['id']);
    $this->load->view('PersonalData/personalData.php',$data);

    }
    public function updatePersonalData()
    {
        $user = $_SESSION['user'];
       $data = array(
       'first_name' => $this->input->post('firstName'),
       'last_name' => $this->input->post('lastName'),
       'date' => $this->input->post('date')
       );
       $this->ChangePersonalData_model->updatePersonalData($user['id'],$data);
       $result = $this->Login_model->getUser($user['email'],$user['password']);

       if (sizeof($result) > 0) {
           $this->session->set_userdata('user', $result[0]);
            redirect('EditProfile/show_editprofile');
       }

    }
}
