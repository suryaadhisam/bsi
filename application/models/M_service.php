<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_service extends CI_Model {

    private $namaTabel = "tb_services";

	public function __construct(){
        parent::__construct();
    }

	function getAllServices($where){
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function getCount() {
		return $this->db->get_where($this->namaTabel, array('state' => 1))->num_rows();
	}
	
	public function getCurrentPageRecordServices($limit, $start) {
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

	function getService($where) {
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function addService($data) {
		return $this->db->insert($this->namaTabel, $data);
	}

	function softDeleteService($id) {
		$data = array(
			'state' => 0
		);
	
		$this->db->where('id_services', $id);
		return $this->db->update($this->namaTabel, $data);
	}

	function updateService($data) {
		$this->db->where('id_services', $data["id_services"]);
		return $this->db->update($this->namaTabel, $data);
	}

	function insert_file($filename, $title) {
        $data = array(
            'filename'      => $filename,
            'title'         => $title
        );
        $this->db->insert('files', $data);
        return $this->db->insert_id();
    }
}