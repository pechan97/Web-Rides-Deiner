<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Acceso extends CI_Controller
{
    public function show_acceso()
    {
    	$this->load->model('Rides_model');
    	if ($_POST) {
    		$start= $this->input->post('start');
    		$end= $this->input->post('end');
    	} else {
    		$start="";
    		$end="";          
    	}  	
    	$data['list'] = $this->Rides_model->mostrar($start,$end);
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->view('Acceso/acceso', $data);
    }
}
