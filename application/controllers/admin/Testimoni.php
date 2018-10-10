<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_testimoni');
	}

	public function index() {
        $data = array();
        $data['title'] = "Testimoni || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["testimoni"] = $this->m_testimoni->getAllTestimoniPending();

        $this->load->view('admin/testimoni/v_index', $data);
	}

    public function changeState() {
        try {
            $this->db->trans_start();
            $this->m_testimoni->changeState($this->input->post('id_comments'), $this->input->post('state'));
            $this->db->trans_complete();

            $result = array(
                "status" => true,
                "data" => array(),
                "message" => "Successfully change state testimoni",
                "errors" => array()
            );
        } catch(Excepion $err) {
            $this->db->trans_complete();

            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed change state testimoni",
                "errors" => array(
                    "change state testimoni"=>"Failed change state testimoni"
                )
            );
        }
        echo json_encode($result);
    }


	
	
}
