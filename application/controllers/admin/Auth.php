<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('user');
 
	}

	public function index(){
		$data['title'] = "Login || Sunset Bali Adventure";

		$data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
		$data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

		$this->load->view('admin/v_login', $data);
	}

	public function aksiLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->User->cekLogin($where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
		} else{
			echo "Email or password wrong !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/auth'));
	}

	
}
