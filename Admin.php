<?php
/**
* 
*/
class Admin extends CI_Controller
{
	// function index()
	// {
	// 	echo "Admin...";
	// }
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("sess_name"))
		{
			redirect("Signup");
		}
	}

	function index()
	{
		$sess_data=$this->session->userdata("sess_name");
		$data["email"]=$sess_data["email"];
		$qry["email"]=$this->Model1->profile($data);
		$this->load->view("profile",$qry);
	}

	function edit()
	{
		$data=$this->uri->segment("3");
		//echo $id;
		$qry["email"]=$this->Model1->edit_model($data);
		$this->load->view("edit",$qry);
	}

	function update()
	{
		$name=$this->input->post("name");
		$email=$this->input->post("email");
		$id=$this->input->post("getid");
		$data=array("name"=>$name,"email"=>$email);
		$qry=$this->Model1->update_model($data,$id);
		$this->index();
	}
}
?>