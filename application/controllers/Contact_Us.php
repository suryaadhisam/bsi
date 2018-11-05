<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_headfoot');
			$this->load->model('M_contact');
  }

	public function index(){
		$data['title']			= "Contact Us || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_country'] = $this->M_contact->get_country();

		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_services'] = $this->M_headfoot->get_services();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_contact_us', $data);
		$this->load->view('v_footer');
	}

	public function create_testi(){
		$config['upload_path'] = './uploads/comments/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024 * 5;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()) {
			# code...
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
		} else {
			# code...
			$img = $this->upload->data();
			$path_img = $img['file_name'];
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$country = $this->input->post('country');
			$message = $this->input->post('message');
			$gender = $this->input->post('gender');
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
}
