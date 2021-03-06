<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_schedule extends CI_Model {

    private $namaTabel = "tb_schedule";
    private $namaTabel2 = "tb_services";

	public function __construct(){
        parent::__construct();
    }

	function getAllSchedule($where){
		//return $this->db->get_where($this->namaTabel, $where)->result();

		return $this->db->select('*')
      					->from("$namaTabel as schd, $namaTabel2 as serv")
						->where('schd.id_service = serv.id_services')
						->where('schd.state = 1')
						->get();
	}

	function getCount() {
		return $this->db->get_where($this->namaTabel, array('state' => 1))->num_rows();
	}
	
	public function getCurrentPageRecordSchedule($limit, $start) {
        $this->db->limit($limit, $start);
        //$query = $this->db->get_where($this->namaTabel, array('state' => 1));
		$query = $this->db->select('*')
							->from("$this->namaTabel as schd, $this->namaTabel2 as serv")
							->where('schd.id_service = serv.id_services')
							->where('schd.state = 1')
							->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
		}
        return false;
    }

	function getSchedule($where) {
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function addSchedule($data) {
		return $this->db->insert($this->namaTabel, $data);
	}

	function softDeleteSchedule($id) {
		$data = array(
			'state' => 0
		);
	
		$this->db->where('id_schedule', $id);
		return $this->db->update($this->namaTabel, $data);
	}

	function updateSchedule($data) {
		$this->db->where('id_schedule', $data["id_schedule"]);
		return $this->db->update($this->namaTabel, $data);
	}
}