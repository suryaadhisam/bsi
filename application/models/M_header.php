<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_header extends CI_Model {

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


}