<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EditProfile extends CI_Controller
{

    public function show_editprofile()
    {
    $this->load->view('EditProfile/editProfile.php');
    }
}
