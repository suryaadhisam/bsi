<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {
  function get_services(){
    $query = $this->db->query('SELECT * FROM tb_services');
    return $query->result();
  }

}
