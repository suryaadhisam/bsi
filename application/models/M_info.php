<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_info extends CI_Model {

  function get_services(){
    $query = $this->db->query('SELECT * FROM tb_info');
    return $query->result();
  }

}
