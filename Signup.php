<?php
/**
* 
*/
class Signup extends CI_Controller
{
	function index()
	{
		$this->load->view("signup");
	}
	
	function login()
	{
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$data=array("email"=>$email,"password"=>$password);
		$qry=$this->Model1->login_model($email,$password);
		if($qry)
		{
			// echo "Sucess query";
			$sess_array=array();
			foreach($qry as $row)
			{
				$sess_array=array("id"=>$row->id,"email"=>$row->email);
				$this->session->set_userdata("sess_name",$sess_array);
				redirect("Admin");
			}
		}
		else
		{
			echo "Not sucess qry";
		}

	}
}
?>