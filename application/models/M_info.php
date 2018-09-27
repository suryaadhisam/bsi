<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_info extends CI_Model {

  function get_detail_info($id){
    $query = $this->db->query("SELECT * FROM tb_info WHERE id_info = '".$id."'");
    return $query->result();
  }

}
