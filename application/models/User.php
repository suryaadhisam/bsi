<?php 

class User extends CI_Model {

    private $namaTabel = "tb_user";

	function getUsers($where){		
		return $this->db->get_where($this->namaTabel, $where)->result();
	}	
}