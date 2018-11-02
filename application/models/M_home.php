<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {
  function get_services(){
    $query = $this->db->query('SELECT * FROM tb_varian_service WHERE state = 1');
    return $query->result();
  }

  function get_slider(){
    $query = $this->db->query('SELECT * FROM tb_carousel WHERE state = 1');
    return $query->result();
  }

  function get_flyer(){
    $query = $this->db->query('SELECT * FROM tb_flyer WHERE state = 1');
    return $query->result();
  }

}
