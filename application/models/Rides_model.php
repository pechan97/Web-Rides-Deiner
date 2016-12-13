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
    public function deleteride($id){
      $this->db->where('id', $id);
      $this->db->delete('rides');
    }
    public function getuser($id)
    {
       $query = $this->db->get_where('user',array('id' =>$id));
       return $query->result();
    }
    public function mostrar($start,$end)
    {
      $query = $this->db->get_where('rides',array('start' =>$start,'end' => $end));
       return $query->result();
    }
    public function updateRide($id,$data)
    {
       $this->db->where('id', $id);
       $this->db->update('rides', $data);
    }
}

?>