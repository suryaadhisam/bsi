<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_info');
	}

	public function index() {
        $data = array();
        $data['title'] = "Info || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["info"] = $this->m_info->getAllInfo();

        $this->load->view('admin/info/v_index', $data);
	}

    public function edit($id) {
        $data = array();
        $data['title'] = "Edit Info || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['info'] = $this->m_info->getInfo($id);
        $this->load->view('admin/info/v_edit', $data);
    }

    public function update($id) {
        try {
            $data = array(
                'deksripsi' => $this->input->post('deskripsi'),
                'state' => 1
            );

            $this->m_info->update($id, $data);
            $this->session->set_flashdata('status', 'Success update info');
            redirect(base_url('admin/info'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/info'));
        }
    }
	
}
