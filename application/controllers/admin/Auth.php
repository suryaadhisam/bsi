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
		$checkLogin = $this->user->getUsers($where);
		$arrayResult = json_decode(json_encode($checkLogin),true);

		if(count($checkLogin) > 0) {
			$result = [
				"status" => true,
				"data" => $arrayResult,
				"message" => "Successfully get data user",
				"errors" => []
			];
		
			$this->session->set_userdata($arrayResult[0]);
			echo json_encode($result);
		} else {
			$result = [
				"status" => true,
				"data" => count($checkLogin),
				"message" => "Email or password incorrect!",
				"errors" => ["Login credentials" => "Email or password incorrect!"]
			];
			echo json_encode($result);
		}

		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/auth'));
	}

	
}
