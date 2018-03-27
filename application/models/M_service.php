<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_service extends CI_Model {

    private $namaTabel = "tb_services";

	public function __construct(){
        parent::__construct();
    }

	function getAllServices($where){		
		return $this->db->get_where($this->namaTabel, $where)->result();
	}	

	function addService($data) {
		return $this->db->insert($this->namaTabel, $data);
	}
}