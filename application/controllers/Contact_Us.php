<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_header');
			$this->load->model('M_contact');
  }

	public function index(){
		$data['title']			= "Contact Us || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();
		$data['logo'] = $this->M_header->get_logo();
		$data['list_country'] = $this->M_contact->get_country();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_contact_us', $data);
		$this->load->view('v_footer');
	}

	public function create_testi(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$message = $this->input->post('message');
		$gender = $this->input->post('gender');

		if ($gender == 'Male') {
			$path_img = 'uploads/comments/male.png';
		}
		else {
			$path_img = 'uploads/comments/female.png';
		}

		$data = array(
			'name' => $name,
			'email' => $email,
			'country' => $country,
			'comments' => $message,
			'gender' => $gender,
			'path_img' => $path_img
			);

		$this->M_contact->input_data($data,'tb_testimoni');
		redirect('Contact_Us/index');
	}
}
