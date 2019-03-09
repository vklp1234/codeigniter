<?php

/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if(!isset($_SESSION['user_logged']))
		{
			$this->session->set_flashdata("error","login first");
			redirect("auth/login");
		}
	}
	public function profile()
	{
		$this->load->view('profile');
	}
}



?>