<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapa extends CI_Controller
{

    public function show_mapa()
    {
     $this->load->library("Googlemaps");
     $config = array();
     $config['center'] = 'Quesada,Costa Rica';
      $config['zoom'] = 16;
     $this->googlemaps->initialize($config);
     $data['map']= $this->googlemaps->create_map();
     $this->load->view('Mapa/mapa',$data);
    }

}
