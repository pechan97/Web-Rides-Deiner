<?php

class Dashboard_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }
    public function get_name($id){      
        $this->db->select('*');
      $this->db->from('user');
      $this->db->where('id', $id);
      $query = $this->db->get();
      $result = $query->result();
      return $result;    
    }
    public function loadData($id){      
      $this->db->select('*');
      $this->db->from('rides');
      $this->db->where('id_user', $id);
      $query = $this->db->get();
      $result = $query->result();
      return $result; 
    }
}

?>
