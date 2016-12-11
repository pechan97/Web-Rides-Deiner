<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $session = $this->session->flashdata('login');
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
            $this->load->view('Login/login',$data);
    }
    public function authenticate()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run()) {
            $this->load->model('Login_model');
            $result = $this->Login_model->getUser($user, $pass);
            if (sizeof($result) > 0) {
                
                redirect('EditProfile/show_editprofile');
            
            } else {
                $error = $this->session->set_flashdata('error', 'Username and Password are incorrect');
                redirect('Login');
            }
        } else {
          $error = $this->session->set_flashdata('error', 'Empty Fields');
          $data['error'] = $error;
          redirect('Login',$data['error']);

        }

    }
}
