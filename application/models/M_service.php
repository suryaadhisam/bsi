<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_service extends CI_Model {

    private $namaTabel = "tb_services";

	public function __construct(){
        parent::__construct();
    }

    function allService(){
        return $this->db->get('tb_varian_service')->result();
    }

    function getAllServices($where = array()){
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

    function detailService($id){
        $query = $this->db->query("SELECT * FROM tb_varian_service WHERE id = '".$id."'");
        return $query->result();
    }

    function photoService($id){
        $query = $this->db->query("SELECT * FROM tb_photo_service WHERE id_varian_service = '".$id."' AND state=1");
        return $query->result();
    }

}
