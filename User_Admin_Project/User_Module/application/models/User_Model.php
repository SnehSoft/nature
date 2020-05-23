<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model
{


	public function saveuserdata($table,$data)
	{
	  $query = $this->db->insert($table,$data);

	       return $query;

	}
	public function fetch_data($username,$password)
	{
		       $this->db->select('first_name,password');
		       $this->db->from('user_register');
	           $this->db->where('first_name',$username);
	  $query = $this->db->where('password',$password);
             return $query;
	}
}