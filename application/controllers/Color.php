<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Color extends CI_Controller
{

    public function show_login()
    {

    $this->load->model('Color_model');
    $data['colors'] =$this->Color_model->getColor();
    $this->load->view('FirstLog/show_firstlog.php',$data);
    }

}
