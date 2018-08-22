<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socmed extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_socmed');

	}

	public function index(){
		
	}

	public function getSocmeds() {
		$data = array();
		$data['title'] = "Social media || Sunset Bali Adventure";

		$data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
		$data['script'] = $this->load->view('admin/template/v_script', '', TRUE);
		
		$data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
		$data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
		$data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

		$where = array(
			'state' => 1
		);
	 
		$this->load->library('pagination');
        $limit_per_page = 10;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->m_socmed->getCount();
     
        if ($total_records > 0) {
            // get current page records
            $data["socmeds"] = $this->m_socmed->getCurrentPageRecordSocmed($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'admin/social-media';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination justify-content-center">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
             
            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();
        } else {
			$data["socmeds"] = [];
		}
		$this->load->view('admin/v_socmed', $data);
	}

	public function getSocmed() {
		try {
			$where = array(
				'id' => $this->input->post('idSocmed')
			);

			$result = [
				"status" => true,
				"data" => $this->m_socmed->getSocmed($where)[0],
				"message" => "Successfully get social media",
				"errors" => []
			];
		} catch(Excepion $err) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed get social media",
				"errors" => array(
					"get social media"=>"Failed get social media"
				)
			];
		}

		echo json_encode($result);
	}

	public function addSocmed() {
		//pathDestination
		$pathDestination = "uploads/social_media/";

		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('nameSocmed','Socmed name', 'required|max_length[255]');
		$this->form_validation->set_rules('linkSocmed','Socmed link','required|max_length[255]');

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
			$resultTmp = $this->do_upload("fileImgSocmed", $pathDestination, "socmed-img");
			if (!$resultTmp["status"]){
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Incorrect input",
					"errors" => $resultTmp["errors"]
				];
			} else {
				@unlink($_FILES[$this->input->post('fileImgSocmed')]);
			
				//add
				try {
					$this->db->trans_start();
					$data = array(
						'socmed_name' => $this->input->post('nameSocmed'),
						'socmed_path_icon' => $pathDestination.$resultTmp["data"]["upload_data"]["file_name"],
						'socmed_url' => $this->input->post('linkSocmed'),
						'state' => 1
					);
					$this->m_socmed->addSocmed($data);
					$this->db->trans_complete();

					$result = [
						"status" => true,
						"data" => [],
						"message" => "Successfully add socmed",
						"errors" => []
					];
				} catch(Excepion $err) {
					$this->db->trans_complete();
					$result = [
						"status" => false,
						"data" => [],
						"message" => "Failed add socmed",
						"errors" => array(
							"add service"=>"Failed add socmed"
						)
					];
				}
			}
		}

		echo json_encode($result);
	}

	public function softDeleteSocmed() {
		try {
			$this->db->trans_start();
			$this->m_socmed->softDeleteSocmed($this->input->post('id_socmed'));
			$this->db->trans_complete();

			$result = [
				"status" => true,
				"data" => [],
				"message" => "Successfully delete socmed",
				"errors" => []
			];
		} catch(Excepion $err) {
			$this->db->trans_complete();
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed delete socmed",
				"errors" => array(
					"delete socmed"=>"Failed delete socmed"
				)
			];
		}
		echo json_encode($result);
	}

    public function changeStateSocmed() {
        try {
            $this->db->trans_start();
            $this->m_socmed->changeState($this->input->post('id_socmed'), $this->input->post('state'));
            $this->db->trans_complete();

            $result = [
                "status" => true,
                "data" => [],
                "message" => "Successfully change state socmed",
                "errors" => []
            ];
        } catch(Excepion $err) {
            $this->db->trans_complete();
            $result = [
                "status" => false,
                "data" => [],
                "message" => "Failed change state socmed",
                "errors" => array(
                    "change state socmed"=>"Failed change state socmed"
                )
            ];
        }
        echo json_encode($result);
    }

	public function updateSocmed() {
		//pathDestination
		$pathDestination = "uploads/services/";

		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('linkSocmedUpdate','Socmed link','required|max_length[255]');

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
				$resultTmp = $this->do_upload("fileImgSocmedUpdate", $pathDestination, "socmed-img");
				if (!$resultTmp["status"]){
					$result = [
						"status" => false,
						"data" => [],
						"message" => "Incorrect input",
						"errors" => $resultTmp["errors"]
					];
				}
				else {
					$data = $this->upload->data();
					$result = [
						"status" => true,
						"data" => array(
							"full_path" => $pathDestination."".$data["file_name"]
						),
						"message" => "Successfully update socmed",
						"errors" => []
					];		
				}
			}
			@unlink($_FILES[$this->input->post('fileImgSocmedUpdate')]);

			//update
			try {
				$this->db->trans_start();
				if($this->input->post('isChangeImg')) {
					$data = array(
						'id' => $this->input->post('idSocmed'),
						'socmed_path_icon' => $result["data"]["full_path"],
						'socmed_url' => $this->input->post('linkSocmedUpdate')
					);
				} else {
					$data = array(
						'id' => $this->input->post('idSocmed'),
						'socmed_url' => $this->input->post('linkSocmedUpdate')
					);
				}
				
				$this->m_socmed->updateSocmed($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully update socmed",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed update socmed",
					"errors" => array(
						"update socmed"=>"Failed update socmed"
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
				$error = array($formFileName => $this->upload->display_errors());
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
