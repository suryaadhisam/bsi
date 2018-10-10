<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_logo extends CI_Model {

    private $namaTabel = "tb_logo";

    function __construct() {
        parent::__construct();
    }

    function getAllLogo() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function getLogo($id) {
        return $this->db->where('id', $id)->get($this->namaTabel)->row();
    }

    function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->namaTabel, $data);
    }
}
