<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_facility extends CI_Model {
  function get_facility(){
    $query = $this->db->query('SELECT * FROM tb_facility WHERE NOT state=0');
    return $query->result();
  }

  function detailFacility($id){
    $query = $this->db->query("SELECT * FROM tb_facility WHERE id_facility = '".$id."' AND state=1");
    return $query->result();
  }

  function photoFacility($id){
    $query = $this->db->query("SELECT * FROM tb_photo_facility WHERE id_facility = '".$id."' AND state=1");
    return $query->result();
  }

}
