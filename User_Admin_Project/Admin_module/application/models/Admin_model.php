<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{


	public function fetch_data($username,$password)
	{
		       $this->db->select('username,password');
		       $this->db->from('admin_login');
	           $this->db->where('username',$username);
	  $query = $this->db->where('password',$password);
             return $query;
	}
	public function adduser($table,$data)
	{
		$query = $this->db->insert($table,$data);
                 return $query;
	}
	public function fetch_user()
	{
		         $this->db->where('status',0);
	    $query = $this->db->get('add_user');
	  
              return $query->result_array();
	}
	public function fetch_userdata($id)
	{
		$this->db->select('user_id,user_name,email,address,designation');
           $this->db->from('add_user');
         $this->db->where('user_id',$id);
                $query = $this->db->get();
            return $query->result_array();
	}
	public function update_user($id,$data)
	{
		$query = $this->db->where('user_id',$id);
		         $this->db->update('add_user',$data);
		         return $query;
	}
	public function delete_user($id)
	{
        $query = $this->db->where('user_id',$id);
                 $this->db->set('status',1);
                 $this->db->update('add_user');
                 return $query;
 
	}
}