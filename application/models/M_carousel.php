<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_carousel extends CI_Model {

    private $namaTabel = "tb_carousel";

	public function __construct(){
        parent::__construct();
    }

	function getAllCarousels($where){
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function getCount() {
		return $this->db->get($this->namaTabel)->num_rows();
	}
	
	public function getCurrentPageRecordCarousels($limit, $start) {
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

	function getCarousel($where) {
		return $this->db->get_where($this->namaTabel, $where)->result();
	}

	function addCarousel($data) {
		return $this->db->insert($this->namaTabel, $data);
	}

	function deleteCarousel($id) {
		$this->db->where('id_carousel', $id);
        return $this->db->delete($this->namaTabel);
	}

    function changeStateCarousel($id, $state) {
        $data = array(
            'state' => $state
        );

        $this->db->where('id_carousel', $id);
        return $this->db->update($this->namaTabel, $data);
    }



	function updateCarousel($data) {
		$this->db->where('id_carousel', $data["id_carousel"]);
		return $this->db->update($this->namaTabel, $data);
	}
}