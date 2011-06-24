<?php

$this->load->view('includes/header');

$this->load->view($main_content);

$data['query'] = $this->db->get('game_servers');

$this->load->view('includes/footer',$data);
