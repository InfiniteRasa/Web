<?php

class Server_status extends CI_Model {
	
	function __construct()	{
        parent::__construct();
    }
	
	 public function getServers() {
		$query = $this->db->query('SELECT * FROM game_servers');
		return $query;
	}
	
}
