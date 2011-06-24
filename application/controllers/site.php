<?php

class Site extends CI_Controller {
	
	public function index() {
		
		$data['main_content'] = 'site_view';
		$this->load->view('includes/template', $data);
	}
	
}
