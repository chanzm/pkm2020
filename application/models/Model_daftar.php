<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Model_daftar extends CI_Model {


    public function simpan($email,$firstname,$lastname,$password,$repassword){
      $query=$this->db->query("INSERT INTO login_session (email,firstname,lastname,password,repassword) VALUES ('$email','$firstname','$lastname','$password','$repassword')");
      return $query;
    }

  }
?>