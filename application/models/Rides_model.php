<?php

class Rides_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }
   public function registerRide($data)
   {
      $this->db->insert('rides', $data);
   }
}

?>