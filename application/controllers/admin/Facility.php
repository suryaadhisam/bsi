<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_facility');
	}

	public function index() {
        $data = array();
        $data['title'] = "Facility || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["facilities"] = $this->m_facility->getAllFacility();

        $this->load->view('admin/facility/v_index', $data);
	}

	public function create() {
        $data = array();
        $data['title'] = "Create Facility || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $this->load->view('admin/facility/v_create', $data);
    }

    public function store() {
        try {
            $data = array(
                'title' => $this->input->post('title'),
                'caption' => $this->input->post('caption'),
                'state' => 1
            );
            $this->m_facility->store($data);
            $this->session->set_flashdata('status', 'Success create facility');
            redirect(base_url('admin/facility'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/facility'));
        }
    }

    public function destroy() {
        try {
            $this->m_facility->destroy($this->input->post('id_facility'));

            $result = array(
                "status" => true,
                "data" => array(),
                "message" => "Successfully delete socmed",
                "errors" => array()
            );
        } catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed delete about",
                "errors" => array(
                    "delete about"=>"Failed delete about"
                )
            );
        }
        echo json_encode($result);
    }

    public function edit($id) {
        $data = array();
        $data['title'] = "Edit Facility || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['facility'] = $this->m_facility->getFacility($id);
        $this->load->view('admin/facility/v_edit', $data);
    }

    public function update($id) {
        try {
            $data = array(
                'title' => $this->input->post('title'),
                'caption' => $this->input->post('caption'),
                'state' => $this->input->post('state')
            );

            $this->m_facility->update($id, $data);
            $this->session->set_flashdata('status', 'Success update facility');
            redirect(base_url('admin/facility'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/facility'));
        }
    }
	
}
