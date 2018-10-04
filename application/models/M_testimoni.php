<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_testimoni extends CI_Model {

    private $namaTabel = "tb_testimoni";

    function __construct() {
        parent::__construct();
    }

    function getAllTestimoni() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel);
        return $query->result();
    }

    function getAllTestimoniPending() {
        $query = $this->db->query('SELECT * FROM ' . $this->namaTabel . ' WHERE state=0');
        return $query->result();
    }

    function changeState($id, $state) {
        $data = array(
            'state' => $state
        );

        $this->db->where('id_comments', $id);
        return $this->db->update($this->namaTabel, $data);
    }
}
