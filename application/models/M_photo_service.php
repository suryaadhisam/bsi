<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_photo_service extends CI_Model {
    private $namaTabel = "tb_photo_service";

    function __construct() {
        parent::__construct();
    }
    function store($data) {
        $this->db->insert($this->namaTabel, $data);
        return $this->db->insert_id();
    }

    function destroy($id) {
        $this->db->where('id_varian_service', $id);
        return $this->db->delete($this->namaTabel);
    }

    function destroyPhotoService($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->namaTabel);
    }
}
