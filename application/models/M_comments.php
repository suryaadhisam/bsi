<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_comments extends CI_Model {
  function get_comments(){
    $query = $this->db->query('SELECT * FROM tb_comments');
    return $query->result();
  }

}
