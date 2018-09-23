<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_gallery extends CI_Model {

    private $namaTabel = "tb_photo";

    function __construct(){
        parent::__construct();
    }

    function get_photo(){
        $query = $this->db->query('SELECT * FROM tb_photo WHERE state = 1');
        return $query->result();
    }

    function getAllGallery() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function store($data) {
        return $this->db->insert($this->namaTabel, $data);
    }

    function destroy($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->namaTabel);
    }

    function getGallery($id) {
        return $this->db->where('id', $id)->get($this->namaTabel)->row();
    }

    function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->namaTabel, $data);
    }

}
