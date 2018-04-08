<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_about extends CI_Model {

  function __construct(){
    parent::__construct();
  }


  function get_about($perPage, $start){
    return $get = $this->db->get('tb_about', $perPage, $start)->result_array();
  }

  function row(){
    return $this->db->get('tb_about')->num_rows();
  }

}
