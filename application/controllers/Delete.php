<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Delete extends CI_Controller
{

    public function deleteaccount()
    {
      $user = $_SESSION['user'];
      $this->load->model("Delete_model");
      $this->Delete_model->deleteaccount($user['id']);
      redirect('Login/');
    }
}
