<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	public function login($name,$password)
	{
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('name',$name);
        $this->db->where('password',md5($password));
        $query_result= $this->db->get();
        $result= $query_result->row();
        return $result;
	}
	
}
