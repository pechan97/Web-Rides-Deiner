 <?php

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUser($email,$pass)
    {
       $query = $this->db->get_where('user',array('username' =>$email,'password' => $pass));
       return $query->result_array();
    }


}

?>
