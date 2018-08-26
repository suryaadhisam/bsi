<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_contact extends CI_Model {

  function __construct(){
    parent::__construct();
  }


  function get_country(){
    $query = $this->db->query('SELECT * FROM countries');
    return $query->result();
  }

  function input_data($data, $tb_testimoni){
    $this->db->insert($tb_testimoni, $data);
  }

}
