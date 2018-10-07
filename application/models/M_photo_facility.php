<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_photo_facility extends CI_Model {
    private $namaTabel = "tb_photo_facility";

    function __construct() {
        parent::__construct();
    }
    function store($data) {
        $this->db->insert($this->namaTabel, $data);
        return $this->db->insert_id();
    }

    function destroy($id) {
        $this->db->where('id_facility', $id);
        return $this->db->delete($this->namaTabel);
    }
}
