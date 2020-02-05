<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Model_login extends CI_Model {

    function can_login($email,$password)
    {
      //$this->db->where('username',$username);
      $this->db->where('email', $email);
      $this->db->where('password',$password);
      $query = $this->db->get('login_session');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
    
    public function getID($email){
      $this->db->where('email',$email);
      // $this->db->where('password',$password);
      $query=$this->db->get('login_session')->row()->id_ses;
      // $query=$this->db->query("SELECT * from login_session where password='.$password.'");
      return $query;
    }
  }
?>