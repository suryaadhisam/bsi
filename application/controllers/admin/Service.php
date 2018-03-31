<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		// if(!$this->session->userdata('email')){
		// 	redirect(base_url("admin/auth"));
		// }
		$this->load->library('form_validation');
		$this->load->model('m_service');

	}

	public function index(){
		
	}

	public function getService() {
		try {
			$where = array(
				'id_services' => $this->input->post('idServices')
			);

			$result = [
				"status" => true,
				"data" => $this->m_service->getService($where)[0],
				"message" => "Successfully get service",
				"errors" => []
			];
		} catch(Excepion $err) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed get service",
				"errors" => array(
					"get service"=>"Failed get service"
				)
			];
		}

		echo json_encode($result);
	}

	public function addService() {
		//pathDestination
		$pathDestination = "uploads/services/";

		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('nameService','Name service', 'required|max_length[255]');
		$this->form_validation->set_rules('detailService','Detail','required|max_length[255]');
		$this->form_validation->set_rules('facilityService','Facility','required|max_length[255]');
		$this->form_validation->set_rules('brgPersonal','Brg personal','required|max_length[255]');

		if ($this->form_validation->run() == FALSE) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Incorrect input",
				"errors" => $this->form_validation->error_array()
			];
		} 
		else {
			//upload img
			$resultTmp = $this->do_upload("fileImgService", $pathDestination, "service-img");
			if (!$resultTmp["status"]){
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Incorrect input",
					"errors" => $resultTmp
				];
			}
			else {
				$data = $this->upload->data();
				$result = [
					"status" => true,
					"data" => array(
						"full_path" => $pathDestination."".$data["file_name"]
					),
					"message" => "Successfully add services",
					"errors" => []
				];
			}
			@unlink($_FILES[$this->input->post('fileImgService')]);
			
			//add
			try {
				$this->db->trans_start();
				$data = array(
					'name_services' => $this->input->post('nameService'),
					'path_img' => $result["data"]["full_path"],
					'detail' => $this->input->post('detailService'),
					'facility' => $this->input->post('facilityService'),
					'brg_personal' => $this->input->post('brgPersonal'),
					'state' => 1
				);
				$this->m_service->addService($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully add services",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed add services",
					"errors" => array(
						"add service"=>"Failed add services"
					)
				];
			}
		}

		echo json_encode($result);
	}

	public function softDeleteService() {
		try {
			$this->db->trans_start();
			$this->m_service->softDeleteService($this->input->post('id_services'));
			$this->db->trans_complete();

			$result = [
				"status" => true,
				"data" => [],
				"message" => "Successfully delete service",
				"errors" => []
			];
		} catch(Excepion $err) {
			$this->db->trans_complete();
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed delete service",
				"errors" => array(
					"delete service"=>"Failed delete service"
				)
			];
		}
		echo json_encode($result);
	}

	public function updateService() {
		//pathDestination
		$pathDestination = "uploads/services/";

		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('nameServiceUpdate','Name service', 'required|max_length[255]');
		$this->form_validation->set_rules('detailServiceUpdate','Detail','required|max_length[255]');
		$this->form_validation->set_rules('facilityServiceUpdate','Facility','required|max_length[255]');
		$this->form_validation->set_rules('brgPersonalUpdate','Brg personal','required|max_length[255]');

		if ($this->form_validation->run() == FALSE) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Incorrect input",
				"errors" => $this->form_validation->error_array()
			];
		} 
		else {
			if($this->input->post('isChangeImg')) {
				//upload img
				$resultTmp = $this->do_upload("fileImgServiceUpdate", $pathDestination, "service-img");
				if (!$resultTmp["status"]){
					$result = [
						"status" => false,
						"data" => [],
						"message" => "Incorrect input",
						"errors" => $resultTmp
					];
				}
				else {
					$data = $this->upload->data();
					$result = [
						"status" => true,
						"data" => array(
							"full_path" => $pathDestination."".$data["file_name"]
						),
						"message" => "Successfully update services",
						"errors" => []
					];
				}
				@unlink($_FILES[$this->input->post('fileImgServiceUpdate')]);
			}

			//update
			try {
				$this->db->trans_start();
				if($this->input->post('isChangeImg')) {
					$data = array(
						'id_services' => $this->input->post('id'),
						'name_services' => $this->input->post('nameServiceUpdate'),
						'path_img' => $result["data"]["full_path"],
						'detail' => $this->input->post('detailServiceUpdate'),
						'facility' => $this->input->post('facilityServiceUpdate'),
						'brg_personal' => $this->input->post('brgPersonalUpdate'),
					);
				} else {
					$data = array(
						'id_services' => $this->input->post('id'),
						'name_services' => $this->input->post('nameServiceUpdate'),
						'detail' => $this->input->post('detailServiceUpdate'),
						'facility' => $this->input->post('facilityServiceUpdate'),
						'brg_personal' => $this->input->post('brgPersonalUpdate'),
					);
				}
				
				$this->m_service->updateService($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully update service",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed update service",
					"errors" => array(
						"update service"=>"Failed update service"
					)
				];
			}
		}

		echo json_encode($result);
	}

	public function do_upload($formFileName, $pathImg, $fileNameImg) {
			$config['upload_path']          = realpath(FCPATH.$pathImg);
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 1024 * 5; //5MB
			$config['file_name']            = $fileNameImg;

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload($formFileName)) {
				$error = array('error' => $this->upload->display_errors());
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed upload img",
					"errors" => $error
				];
			}
			else {
				$data = array('upload_data' => $this->upload->data());
				$result = [
					"status" => true,
					"data" => $data,
					"message" => "Successfully upload img",
					"errors" => []
				];
			}
			return $result;
	}

	
	
}
