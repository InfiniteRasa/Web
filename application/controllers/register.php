<?php

class Register extends CI_Controller {
	
	public function index() {
		
		$data['main_content'] = 'register_view';
		$this->load->view('includes/template', $data);
	}
	
	public function insert() {
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
}
