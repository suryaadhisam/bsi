<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_info extends CI_Model {

    function get_detail_info($id){
        $query = $this->db->query("SELECT * FROM tb_info WHERE id_info = '".$id."'");
        return $query->result();
    }

    private $namaTabel = "tb_info";

    function __construct(){
        parent::__construct();
    }

    function getAllInfo() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function store($data) {
        return $this->db->insert($this->namaTabel, $data);
    }

    function getInfo($id) {
        return $this->db->where('id_info', $id)->get($this->namaTabel)->row();
    }

    function update($id, $data) {
        $this->db->where('id_info', $id);
        return $this->db->update($this->namaTabel, $data);
    }

}
