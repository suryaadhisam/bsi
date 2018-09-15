<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_contact_us extends CI_Model {

    private $namaTabel = "tb_contact_us";

    function __construct(){
        parent::__construct();
    }


    function getAllContactUs() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function getContactUs($id) {
        return $this->db->where('id_contact_us', $id)->get($this->namaTabel)->row();
    }

    function update($id, $data) {
        $this->db->where('id_contact_us', $id);
        return $this->db->update($this->namaTabel, $data);
    }

}
