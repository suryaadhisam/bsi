<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_facility extends CI_Model {
    private $namaTabel = "tb_facility";

    function __construct() {
        parent::__construct();
    }

    function getAllFacility() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function store($data) {
        $this->db->insert($this->namaTabel, $data);
        return $this->db->insert_id();
    }

    function destroy($id) {
        $this->db->where('id_facility', $id);
        return $this->db->delete($this->namaTabel);
    }

    function getFacility($id) {
        return $this->db->where('id_facility', $id)->get($this->namaTabel)->row();
    }

    function getFacilityImages($id) {
        return $this->db->where('id_facility', $id)->get('tb_photo_facility')->result();
    }

    function update($id, $data) {
        $this->db->where('id_facility', $id);
        return $this->db->update($this->namaTabel, $data);
    }
    function get_facility(){
        $query = $this->db->query('SELECT * FROM tb_facility WHERE NOT state=0');
        return $query->result();
    }

    function detailFacility($id){
        $query = $this->db->query("SELECT * FROM tb_facility WHERE id_facility = '".$id."' AND state=1");
        return $query->result();
    }

    function photoFacility($id){
        $query = $this->db->query("SELECT * FROM tb_photo_facility WHERE id_facility = '".$id."' AND state=1");
        return $query->result();
    }
}
