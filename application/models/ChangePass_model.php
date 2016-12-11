<?php

class ChangePass_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }
   //Actualiza contraseña
   public function getPassword($id){     
        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('id',$id);
        $query = $this->db->get();
        foreach ($query->result() as $user)
        {
        return $user->password;
        }
   }
    public function updatePassword($id,$npass){       
      $this->db->query("UPDATE `user` SET `password` = '$npass' WHERE `user`.`id` = '$id';");
    }
  
}

?>
