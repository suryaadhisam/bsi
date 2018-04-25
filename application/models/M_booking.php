<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_booking extends CI_Model {

    private $namaTabel = "tb_booking";

	public function __construct(){
        parent::__construct();
    }

	function getAllBooking($where){
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function getCount() {
		return $this->db->get($this->namaTabel)->num_rows();
	}
	
	public function getCurrentPageRecordBooking($limit, $start) {
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

	function getBooking($where) {
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function addBooking($data) {
		return $this->db->insert($this->namaTabel, $data);
	}

	function deleteBooking($id) {
		return $this->db->delete($this->namaTabel, array('id_booking' => $id));
	}

	function updateBooking($data) {
		$this->db->where('id_booking', $data["id_booking"]);
		return $this->db->update($this->namaTabel, $data);
	}
}