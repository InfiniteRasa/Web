<?php

class Register extends CI_Controller {
	
	public function index() {
		
		$data['main_content'] = 'register_view';
		$this->load->view('includes/template', $data);
	}
	
	public function insert2() {
		if($this->input->post('create'))
			{
			    $user_name = $this->input->post('user_name');
        		$user_pass = $this->input->post('user_pass');
				
				$query = $this->db->get('users');
				
				$id = $query->num_rows() + 1;
				
				$data = array(
						'id' => $id,
						 'username' => $user_name,
						 'password' => md5($user_pass),
						 'birthday' => 00-00-0000,
						 'blocked' => 0,
						 'logged_in' => 0
						);
						
				$this->db->insert('users', $data); 
						
				$data['main_content'] = 'register_success_view';
				$this->load->view('includes/template', $data);
			}
	}
	
	public function insert() {
		
		$url = parse_url($_SERVER['REQUEST_URI']);
		parse_str($url['query'], $params);
		
		$nameValue=$_GET['firstname'];
		$userValue=$_GET['user'];
		
		
		$validateError= "This username is already taken";
		$validateSuccess= "This username is available";
		
		
		
			/* RETURN VALUE */
			$arrayToJs = array();
			$arrayToJs[0] = array();
			$arrayToJs[1] = array();
		
		if($userValue =="karnius"){		// validate??
			$arrayToJs[0][0] = 'user';
			$arrayToJs[0][1] = true;			// RETURN TRUE
			$arrayToJs[0][2] = "This user is available";
					// RETURN ARRAY WITH success
		}else{
			$arrayToJs[0][0] = 'user';
			$arrayToJs[0][1] = false;
			$arrayToJs[0][2] = "This user is already taken";
		}
		
		if($nameValue =="duncan"){		// validate??
			$arrayToJs[1][0] = 'firstname';
			$arrayToJs[1][1] = true;			// RETURN TRUE
					// RETURN ARRAY WITH success
		}else{
			$arrayToJs[1][0] = 'firstname';
			$arrayToJs[1][1] = false;
			$arrayToJs[1][2] = "This name is already taken";
		}
		
	echo json_encode($arrayToJs);
		
	}
}
