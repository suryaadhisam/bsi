<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_faq extends CI_Model {
  function get_faq(){
    $query = $this->db->query('SELECT * FROM tb_faq');
    return $query->result();
  }

}
