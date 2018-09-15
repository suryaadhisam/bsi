<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_about extends CI_Model {

    private $namaTabel = "tb_about";

    function __construct() {
        parent::__construct();
    }

    function getAllAbout() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function store($data) {
        return $this->db->insert($this->namaTabel, $data);
    }

    function destroy($id) {
        $this->db->where('id_about', $id);
        return $this->db->delete($this->namaTabel);
    }

    function getAbout($id) {
        return $this->db->where('id_about', $id)->get($this->namaTabel)->row();
    }

    function update($id, $data) {
        $this->db->where('id_about', $id);
        return $this->db->update($this->namaTabel, $data);
    }



}
