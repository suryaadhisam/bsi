<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_flyer extends CI_Model {

    private $namaTabel = "tb_flyer";

    function __construct(){
        parent::__construct();
    }

    function getAllFlyer() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function store($data) {
        return $this->db->insert($this->namaTabel, $data);
    }

    function destroy($id) {
        $this->db->where('id_popup', $id);
        return $this->db->delete($this->namaTabel);
    }

    function getFlyer($id) {
        return $this->db->where('id_popup', $id)->get($this->namaTabel)->row();
    }

    function update($id, $data) {
        $this->db->where('id_popup', $id);
        return $this->db->update($this->namaTabel, $data);
    }

}
