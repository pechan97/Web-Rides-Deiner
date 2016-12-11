<?php

class ChangePersonalData_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }
    function show_user_id($data){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('id', $data);
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }
    public function updatePersonalData($id,$data)
    {
      $this->db->where('id', $id);
      $this->db->update('user', $data);
    }
}

?>
