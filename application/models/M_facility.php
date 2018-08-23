<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_facility extends CI_Model {
  function get_facility(){
    $query = $this->db->query('SELECT * FROM tb_facility WHERE state = 1');
    return $query->result();
  }

}
