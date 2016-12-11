<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ChangePassword extends CI_Controller
{

    public function show_changePassword()
    {
      $error = $this->session->flashdata('error');
      $data['error'] = $error;
    $this->load->view('ChangePassword/changePassword',$data);
    }
    public function updatePassword()
    {
        $user = $_SESSION['user'];
        $this->load->model("ChangePass_model");
        $data['password']=$this->ChangePass_model->getPassword($user['id']);
        $pass=$this->input->post('password1');
        $npass=$this->input->post('password2');
        $rpass=$this->input->post('password3');
          if ($pass != '' && $npass != '' && $rpass != '') {
            if($pass==$data['password'] ){
              if ($npass==$rpass) {
                $this->ChangePass_model->updatePassword($user['id'],$npass);
                $this->session->set_userdata('user', null);
                redirect('Login/');
              }else{
                $this->session->set_flashdata('error', "Password Don't Match ");
                redirect('ChangePassword/show_changePassword');
              }

            }else {
              $this->session->set_flashdata('error', 'Error in Password');
              redirect('ChangePassword/show_changePassword');
            }
          }else {
            $this->session->set_flashdata('error', 'Empty Fields');
            redirect('ChangePassword/show_changePassword');
          }
    }
}
