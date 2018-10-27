<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_variant_service');
		$this->load->model('m_service');
		$this->load->model('m_photo_service');

	}

	public function index(){
        $data = array();
        $data['title'] = "Variant Services || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["variant_services"] = $this->m_variant_service->getAllVariantServices();

        $this->load->view('admin/variant_services/v_index', $data);
	}

    public function create() {
        $data = array();
        $data['title'] = "Create Variant Services || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['services'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);
        $data['variant_type'] = $this->m_service->getAllServices();

        $this->load->view('admin/variant_services/v_create', $data);
    }

    public function store() {
        try {
            $data = array(
                'service_id' => $this->input->post('service_id'),
                'varian' => $this->input->post('varian'),
                'harga_idr' => $this->input->post('harga_idr'),
                'harga_usd' => $this->input->post('harga_usd'),
                'keterangan' => $this->input->post('keterangan'),
                'min_person' => $this->input->post('min_person'),
                'photo' => '',
                'state' => 1,
            );
            $resultStore = $this->m_variant_service->store($data);

            $result = array(
                "status" => true,
                "data" => $resultStore,
                "message" => "Successfully add variant service",
                "errors" => array()
            );

            echo json_encode($result);
        }
        catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed add variant service",
                "errors" => array()
            );
            echo json_encode($result);
        }
    }

    public function uploadImages() {
        //pathDestination
        $pathDestination = "uploads/services/";

        $variantServiceId = $this->input->post('id_varian_service');
        $mediasDeletes = explode(',', $this->input->post('medias-deletes'));
        $mediasCount = $this->input->post('medias-count');

        //Hapus images
        if(count($mediasDeletes) >= 1 && $mediasDeletes[0] != "") {
            foreach ($mediasDeletes as $index => $row) {
                $this->m_photo_service->destroyPhotoService($row);
            }
        }

//        var_dump($_FILES);
        $data = array();
        foreach ($_FILES as $key => $value) {
            array_push($data, $key);
            $resultTmp = $this->do_upload($key, $pathDestination, "variant-service-" . $variantServiceId . "-img");

            if ($resultTmp["status"]) {
                @unlink($_FILES[$this->input->post($key)]);

                $data = array(
                    'id_varian_service' => $variantServiceId,
                    'url' => $pathDestination . $resultTmp["data"]["upload_data"]["file_name"],
                    'state' => 1
                );
                $this->m_photo_service->store($data);
            }
        }
        echo json_encode(array(
            'status' => true,
            'data' => array(),
            'message' => 'Success',
            'errors' => array()
        ));
    }

    public function destroy() {
        try {
            $this->m_photo_service->destroyVariantService($this->input->post('id'));
            $this->m_variant_service->destroy($this->input->post('id'));

            $result = array(
                "status" => true,
                "data" => array(),
                "message" => "Successfully delete variant service",
                "errors" => array()
            );
        } catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed delete variant servoce",
                "errors" => array(
                    "delete about"=>"Failed delete variant service"
                )
            );
        }
        echo json_encode($result);
    }



    public function getService() {
		try {
			$where = array(
				'id_services' => $this->input->post('idServices')
			);

			$result = array(
                "status" => true,
                "data" => $this->m_service->getService($where)[0],
                "message" => "Successfully get service",
                "errors" => array()
            );
		} catch(Excepion $err) {
			$result = array(
			    "status" => false,
                "data" => array(),
                "message" => "Failed get service",
                "errors" => array(
                    "get service"=>"Failed get service"
                )
            );
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
			$result = array(
				"status" => false,
				"data" => array(),
				"message" => "Incorrect input",
				"errors" => $this->form_validation->error_array()
            );
		}
		else {
			//upload img
			$resultTmp = $this->do_upload("fileImgService", $pathDestination, "service-img");
			if (!$resultTmp["status"]){
				$result = array(
					"status" => false,
					"data" => array(),
					"message" => "Incorrect input",
					"errors" => $resultTmp["errors"]
                );
			} else {
				@unlink($_FILES[$this->input->post('fileImgService')]);
			
				//add
				try {
					$this->db->trans_start();
					$data = array(
						'name_services' => $this->input->post('nameService'),
						'path_img' => $pathDestination.$resultTmp["data"]["upload_data"]["file_name"],
						'detail' => $this->input->post('detailService'),
						'facility' => $this->input->post('facilityService'),
						'brg_personal' => $this->input->post('brgPersonal'),
						'state' => 1
					);
					$this->m_service->addService($data);
					$this->db->trans_complete();

					$result = array(
						"status" => true,
						"data" => array(),
						"message" => "Successfully add services",
						"errors" => array()
                    );
				} catch(Excepion $err) {
					$this->db->trans_complete();
					$result = array(
						"status" => false,
						"data" => array(),
						"message" => "Failed add services",
						"errors" => array(
							"add service"=>"Failed add services"
						)
                    );
				}
			}
		}

		echo json_encode($result);
	}

	public function softDeleteService() {
		try {
			$this->db->trans_start();
			$this->m_service->softDeleteService($this->input->post('id_services'));
			$this->db->trans_complete();

			$result = array(
				"status" => true,
				"data" => array(),
				"message" => "Successfully delete service",
				"errors" => array()
            );
		} catch(Excepion $err) {
			$this->db->trans_complete();
			$result = array(
				"status" => false,
				"data" => array(),
				"message" => "Failed delete service",
				"errors" => array(
					"delete service"=>"Failed delete service"
				)
            );
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
			$result = array(
				"status" => false,
				"data" => array(),
				"message" => "Incorrect input",
				"errors" => $this->form_validation->error_array()
            );
		} 
		else {
			if($this->input->post('isChangeImg')) {
				//upload img
				$resultTmp = $this->do_upload("fileImgServiceUpdate", $pathDestination, "service-img");
				if (!$resultTmp["status"]){
					$result = array(
						"status" => false,
						"data" => array(),
						"message" => "Incorrect input",
						"errors" => $resultTmp["errors"]
                    );
				}
				else {
					$data = $this->upload->data();
					$result = array(
						"status" => true,
						"data" => array(
							"full_path" => $pathDestination."".$data["file_name"]
						),
						"message" => "Successfully update services",
						"errors" => array()
                    );
				}
			}
			@unlink($_FILES[$this->input->post('fileImgServiceUpdate')]);

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

				$result = array(
					"status" => true,
					"data" => array(),
					"message" => "Successfully update service",
					"errors" => array()
                );
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = array(
					"status" => false,
					"data" => array(),
					"message" => "Failed update service",
					"errors" => array(
						"update service"=>"Failed update service"
					)
                );
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
				$error = array($formFileName => $this->upload->display_errors());
				$result = array(
					"status" => false,
					"data" => array(),
					"message" => "Failed upload img",
					"errors" => $error
                );
			}
			else {
				$data = array('upload_data' => $this->upload->data());
				$result = array(
					"status" => true,
					"data" => $data,
					"message" => "Successfully upload img",
					"errors" => array()
                );
			}
			return $result;
	}

	
	
}
