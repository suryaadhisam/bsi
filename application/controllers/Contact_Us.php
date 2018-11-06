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


	// public function upload_gambar(){
	// 	 //pathDestination
	// 	 $pathDestination = "uploads/comments/";
 
	// 	 $data = array();
	// 	 foreach ($_FILES as $key => $value) {
	// 		 array_push($data, $key);
	// 		 $resultTmp = $this->do_upload($key, $pathDestination, "variant-service-" . $variantServiceId . "-img");
 
	// 		 if ($resultTmp["status"]) {
	// 			 @unlink($_FILES[$this->input->post($key)]);
 
	// 			 $data = array(
	// 				 'id_varian_service' => $variantServiceId,
	// 				 'url' => $pathDestination . $resultTmp["data"]["upload_data"]["file_name"],
	// 				 'state' => 1
	// 			 );


	// 			 $this->m_photo_service->store($data);
	// 		 }
	// 	 }
	// 	 echo json_encode(array(
	// 		 'status' => true,
	// 		 'data' => array(),
	// 		 'message' => 'Success',
	// 		 'errors' => array()
	// 	 ));
	// }


	// public function do_upload($formFileName, $pathImg, $fileNameImg) {
	// 	$config['upload_path']          = realpath(FCPATH.$pathImg);
	// 	$config['allowed_types']        = 'jpg|png|jpeg';
	// 	$config['max_size']             = 1024 * 5; //5MB
	// 	$config['file_name']            = $fileNameImg;

	// 	$this->load->library('upload', $config);

	// 	if ( !$this->upload->do_upload($formFileName)) {
	// 		$error = array($formFileName => $this->upload->display_errors());
	// 		$result = array(
	// 			"status" => false,
	// 			"data" => array(),
	// 			"message" => "Failed upload img",
	// 			"errors" => $error
	// 		);
	// 	}
	// 	else {
	// 		$data = array('upload_data' => $this->upload->data());
	// 		$result = array(
	// 			"status" => true,
	// 			"data" => $data,
	// 			"message" => "Successfully upload img",
	// 			"errors" => array()
	// 		);
	// 	}
	// 	return $result;
	// }

	public function create_testi(){
		$config['upload_path'] = './uploads/comments/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024 * 5;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('photo')) {
			# code...
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$country = $this->input->post('country');
			$message = $this->input->post('message');
			$gender = $this->input->post('gender');

			if ($gender == 'male') {
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
