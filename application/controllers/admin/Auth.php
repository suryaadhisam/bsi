<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
		$data['title'] = "Login || Sunset Bali Adventure";

		$data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
		$data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

		$this->load->view('admin/v_login', $data);
	}

	public function login(){
		// $data['title'] = "Login || Sunset Bali Adventure";

		// $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
		// $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);
		// $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
		// $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
		// $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

		// $this->load->view('admin/v_login', $data);
	}

	
}
