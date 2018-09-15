<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_faq');
	}

	public function index() {
        $data = array();
        $data['title'] = "FAQ || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["faq"] = $this->m_faq->getAllFaq();

        $this->load->view('admin/faq/v_index', $data);
	}

	public function create() {
        $data = array();
        $data['title'] = "Create FAQ || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $this->load->view('admin/faq/v_create', $data);
    }

    public function store() {
        try {
            $data = array(
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer'),
                'state' => 1
            );
            $this->m_faq->store($data);
            $this->session->set_flashdata('status', 'Success create faq');
            redirect(base_url('admin/faq'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/faq'));
        }
    }

    public function destroy() {
        try {
            $this->m_faq->destroy($this->input->post('id_faq'));

            $result = array(
                "status" => true,
                "data" => array(),
                "message" => "Successfully delete faq",
                "errors" => array()
            );
        } catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed delete faq",
                "errors" => array(
                    "delete about"=>"Failed delete faq"
                )
            );
        }
        echo json_encode($result);
    }

    public function edit($id) {
        $data = array();
        $data['title'] = "Edit FAQ || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['faq'] = $this->m_faq->getFaq($id);
        $this->load->view('admin/faq/v_edit', $data);
    }

    public function update($id) {
        try {
            $data = array(
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer'),
                'state' => $this->input->post('state')
            );

            $this->m_faq->update($id, $data);
            $this->session->set_flashdata('status', 'Success update faq');
            redirect(base_url('admin/faq'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/faq'));
        }
    }
	
}
