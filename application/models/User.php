<?php 

class User extends CI_Model {

    private $namaTabel = "user";

	function cekLogin($where){		
		return $this->db->get_where($namaTabel, $where);
	}	
}