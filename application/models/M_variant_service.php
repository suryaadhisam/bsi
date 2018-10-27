<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_variant_service extends CI_Model {

    private $namaTabel = "tb_varian_service";

	public function __construct(){
        parent::__construct();
    }

    public function getAllVariantServices() {
        $this->db->select('tb_services.name_services, tb_varian_service.id, tb_varian_service.varian, tb_varian_service.harga_idr, tb_varian_service.harga_usd');
        $this->db->from($this->namaTabel);
        $this->db->join('tb_services', 'tb_services.id_services = tb_varian_service.service_id', 'left');
        $this->db->order_by('tb_services.name_services', 'asc');
        $this->db->order_by('tb_varian_service.varian', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    function store($data) {
        $this->db->insert($this->namaTabel, $data);
        return $this->db->insert_id();
    }

    function destroy($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->namaTabel);
    }


}
