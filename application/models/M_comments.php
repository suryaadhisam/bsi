<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_comments extends CI_Model {
  function get_comments(){
    $query = $this->db->query('SELECT * FROM tb_testimoni');
    return $query->result();
  }

}
