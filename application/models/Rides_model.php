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
   public function rides_id($data){
      $this->db->select('*');
      $this->db->from('rides');
      $this->db->where('id', $data);
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

}

?>