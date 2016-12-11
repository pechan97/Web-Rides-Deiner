<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FirstLog extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();

      $this->load->model("Login_model");


  }
    public function show_firstlog()
    {
            $error = $this->session->flashdata('error');
            $data['error'] = $error;
            $this->load->model('Color_model');
            $data['color'] =$this->Color_model->getColor();
            $this->load->view('FirstLog/firstLog',$data);
    }
    public function show_editlog()
    {
      $user = $_SESSION['user'];
      $this->load->model('Color_model');
      $data['color'] = $this->Color_model->getColor();

      // if($data['color_user'] === $data['color'] ) {
      //    echo "si";
      // }else{
      //   echo "no";
      // }

      $this->load->view('EditNickColor/nick',$data);
    }

    public function registerDataFirstLog()
    {
        $data = $this->load->model('FirstLog_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_color', 'color', 'trim|required');
        $this->form_validation->set_rules('nickname', 'Nick Name', 'trim|required');
        $this->form_validation->set_message('required','%s is required');
        if (!$this->form_validation->run())
       {
           $error = $this->session->set_flashdata('error','Empty Fields');
           redirect('FirstLog/show_firstlog',$error);

        } else {
          $user = $_SESSION['user'];
          $id_user = $user['id'];
        $color = $this->input->post('id_color');
        $nick  =  $this->input->post('nickname');
          $this->FirstLog_model->updateFirstData($nick,$color,$id_user);
          $result = $this->Login_model->getUser($user['email'],$user['password']);
          if (sizeof($result) > 0) {
              $this->session->set_userdata('user', $result[0]);
               redirect('EditProfile/show_editprofile');
          }

        }
    }
}
