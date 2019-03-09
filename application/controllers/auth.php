<?php

/**
 * 
 */
class auth extends CI_controller
{
	
	public function login()
	{
		if(isset($_POST['login']))
		{
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			if($this->form_validation->run()==true)
			{
				$username = $_POST['username'];
				echo $username;

				$password = md5($_POST['password']);
			echo $password;
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where(array('username' => $username,'password' => $password));
				$query = $this->db->get();
				$user = $query->row();
				var_dump($query);
				if($user->username)
				{
					$this->session->set_flashdata("success","you are loged in ");
					$_SESSION['user_logged']=true;
					$_SESSION['username']=$user->username;
					redirect("auth/profile","refresh");
				}else{
					$this->session->set_flashdata("error","Your account do not exists ");
					//redirect("auth/login","refresh");
				}

			}
		}
			$this->load->view('login');
	}
	public function regiter()
	{
		if (isset($_POST['register'])) {
			$this->form_validation->set_rules('username','username','required');
			
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('phone','Phone','required|min_length[10]');
			
			if ( $this->form_validation->run() == true) {
				echo "form validated";
				$data  = array(

					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => md5($_POST['password']),
					'gender' => $_POST['gender'],
					'create_date' => date('Y-m-d'),
					'phone'=>$_POST['phone']
				);
				$this->db->insert('users',$data);
				$this->session->set_flashdata("success" ,"Your account has been created");
				redirect("auth/regiter","refresh");
			}
		}
		$this->load->view('register');
	}
}


?>
