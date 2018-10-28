<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_comments extends CI_Model {
  function get_comments(){
    $query = $this->db->query('SELECT * FROM tb_testimoni WHERE state = 1');
    return $query->result();
  }

}
