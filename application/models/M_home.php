<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {
  function get_services(){
    $query = $this->db->query('SELECT b.*, (SELECT a.url FROM tb_photo_service AS a WHERE b.id = a.id_varian_service LIMIT 1) as path_photo FROM tb_varian_service AS b WHERE state = 1');
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
