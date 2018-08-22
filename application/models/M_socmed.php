<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_socmed extends CI_Model {

    private $namaTabel = "tb_socmed";

	public function __construct(){
        parent::__construct();
    }

	function getAllSocmed($where){
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function getCount() {
		return $this->db->get_where($this->namaTabel, array('state' => 1))->num_rows();
	}
	
	public function getCurrentPageRecordSocmed($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->namaTabel);
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
		}
        return false;
    }

	function getSocmed($where) {
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function addSocmed($data) {
		return $this->db->insert($this->namaTabel, $data);
	}

	function softDeleteSocmed($id) {
		$data = array(
			'state' => 0
		);
	
		$this->db->where('id', $id);
		return $this->db->update($this->namaTabel, $data);
	}

    function changeState($id, $state) {
        $data = array(
            'state' => $state
        );

        $this->db->where('id', $id);
        return $this->db->update($this->namaTabel, $data);
    }

	function updateSocmed($data) {
		$this->db->where('id', $data["id"]);
		return $this->db->update($this->namaTabel, $data);
	}
}