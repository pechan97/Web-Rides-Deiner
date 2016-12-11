<?php

class Forgot_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }
    public function get_email($email){
        $this->db->select('email');
        $this->db->from('user');
        $this->db->where('email',$email);
        $query = $this->db->get();
        foreach ($query->result() as $user)
        {
        return $user->email;
        }
    }
    public function update_reset($data,$email)
    {
      $this->db->query("UPDATE `user` SET `password` = '$data' WHERE `user`.`email` = '$email';");
      if ($this->db->affected_rows()>0) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
    public function get_random_password()
    {
        $length = rand(5,10);
        $selection = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#$%&abcdefghijklmnopqrstuvwxyz';
        $password = "";
        for($i=0; $i<$length; $i++) {
           $randstring = $selection[rand(0, strlen($selection))];
            $password .=  $randstring;
        }

      return $password;
    }
}

?>
