<?php 

class Service extends CI_Model {

    private $namaTabel = "tb_services";

	function getAllServices($where){		
		return $this->db->get_where($this->namaTabel, $where)->result();
	}	
}