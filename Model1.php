<?php
/**
* 
*/
class Model1 extends CI_Model
{
	
	function login_model($email,$password)
	{
		$qry=$this->db->query("SELECT * FROM signup WHERE email='$email' AND password='$password'");
		return $qry->result();
	}

	function profile($data)
	{
		$qry=$this->db->query("SELECT * FROM signup WHERE email='".$data['email']."'");
		return $qry->result();
		// SELECT * FROM signup where email='".$data['email']."'"
	}

	function edit_model($data)
	{
		$qry=$this->db->query("SELECT * FROM signup WHERE id='$data'");
		return $qry->result();
	}

	function update_model($data,$id)
	{
		$this->db->where("id",$id);
		$qry=$this->db->update("signup",$data);
		return $qry;
	}
}
?>