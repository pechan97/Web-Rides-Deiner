<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function show_register()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->view('Register/register.php', $data);
    }
    public function registerUser()
    {
        $data = $this->load->model('Register_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('username', 'UserName', 'is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $pass=$this->input->post('password');
        $npass=$this->input->post('repeat_pass');
        if ($pass ===$npass) {
          if ($this->form_validation->run()) {
              $data = array(
                         'first_name' => $this->input->post('first_name'),
                         'last_name' => $this->input->post('last_name'),
                         'phone' => $this->input->post('phone'),
                         'username' => $this->input->post('username'),
                         'password' => $this->input->post('password')
                   );
              $this->Register_model->insertUser($data);
              redirect('Login');
        } else {

          $this->session->set_flashdata('error', 'Empty Fields or Invalid UserName');
          redirect('Register/show_register');
        }

        } else{
          $this->session->set_flashdata('error', 'Passwords are different');
          redirect('Register/show_register');
        }
        
    }
}
