<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_about extends CI_Model {

  function __construct(){
    parent::__construct();
  }


  function get_about(){
    $query = $this->db->query('SELECT * FROM tb_about');
    return $query->result();
  }



}
