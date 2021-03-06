<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_headfoot extends CI_Model {

  function __construct(){
    parent::__construct();
  }


  function get_contact_us(){
    $query = $this->db->query('SELECT * FROM tb_contact_us');
    return $query->row();
  }

  function get_socmed(){
    $query = $this->db->query('SELECT * FROM tb_socmed WHERE state = 1');
    return $query->result();
  }

  function get_logo(){
    $query = $this->db->query('SELECT * FROM tb_logo WHERE state = 1');
    return $query->result();
  }

  function get_services(){
    $query = $this->db->query('SELECT b.*, (SELECT a.url FROM tb_photo_service AS a WHERE b.id = a.id_varian_service LIMIT 1) as path_photo FROM tb_varian_service AS b WHERE state = 1');
    return $query->result();
  }

  function get_info(){
    $query = $this->db->query('SELECT * FROM tb_info WHERE state = 1');
    return $query->result();
  }


}
