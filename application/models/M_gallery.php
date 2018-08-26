<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_gallery extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  function get_photo(){
    $query = $this->db->query('SELECT * FROM tb_photo WHERE state = 1');
    return $query->result();
  }


}
