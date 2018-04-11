<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_package extends CI_Model {

    private $namaTabel = "tb_package";

	public function __construct(){
        parent::__construct();
    }

	function getAllPackages($where){
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function getCount() {
		return $this->db->get_where($this->namaTabel, array('state' => 1))->num_rows();
	}
	
	public function getCurrentPageRecordPackages($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where($this->namaTabel, array('state' => 1));
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
		}
        return false;
    }

	function getPackage($where) {
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function addPackage($data) {
		return $this->db->insert($this->namaTabel, $data);
	}

	function softDeletePackage($id) {
		$data = array(
			'state' => 0
		);
	
		$this->db->where('id_paket', $id);
		return $this->db->update($this->namaTabel, $data);
	}

	function updatePackage($data) {
		$this->db->where('id_paket', $data["id_paket"]);
		return $this->db->update($this->namaTabel, $data);
	}
}