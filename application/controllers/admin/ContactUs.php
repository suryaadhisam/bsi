<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_contact_us');
	}

	public function index() {
        $data = array();
        $data['title'] = "Contact Us || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["contact_us"] = $this->m_contact_us->getAllContactUs();

        $this->load->view('admin/contact-us/v_index', $data);
	}

    public function edit($id) {
        $data = array();
        $data['title'] = "Edit Contact Us || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['contact_us'] = $this->m_contact_us->getContactUs($id);
        $this->load->view('admin/contact-us/v_edit', $data);
    }

    public function update($id) {
        try {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'message' => $this->input->post('message'),
                'alamat' => $this->input->post('alamat')
            );

            $this->m_contact_us->update($id, $data);
            $this->session->set_flashdata('status', 'Success update contact us');
            redirect(base_url('admin/contact-us'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/contact-us'));
        }
    }

	
	
}
