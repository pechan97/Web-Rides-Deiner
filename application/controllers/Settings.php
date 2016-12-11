<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public function show_settings()
    {
    $this->load->view('Settings/setting.php');
    }
}
