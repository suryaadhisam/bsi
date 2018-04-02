<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_carousel');

	}

	public function index(){
		
	}

	public function getCarousels() {
		$data = array();
		$data['title'] = "Carousels || Sunset Bali Adventure";

		$data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
		$data['script'] = $this->load->view('admin/template/v_script', '', TRUE);
		
		$data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
		$data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
		$data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

		$where = array(
			'state' => 1
		);
	 
		$this->load->library('pagination');        
        $limit_per_page = 4;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->m_carousel->getCount();
     
        if ($total_records > 0) {
            // get current page records
            $data["carousels"] = $this->m_carousel->getCurrentPageRecordCarousels($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'admin/carousel';
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
			$data["carousels"] = [];
		}
		

		$this->load->view('admin/v_carousel', $data);
	}

	public function getCarousel() {
		try {
			$where = array(
				'id_carousel' => $this->input->post('idCarousel')
			);

			$result = [
				"status" => true,
				"data" => $this->m_carousel->getCarousel($where)[0],
				"message" => "Successfully get carousel",
				"errors" => []
			];
		} catch(Excepion $err) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed get carousel",
				"errors" => array(
					"get carousel"=>"Failed get carousel"
				)
			];
		}

		echo json_encode($result);
	}

	public function addCarousel() {
		//pathDestination
		$pathDestination = "uploads/carousels/";

		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('titleCarousel','Title carousel', 'required|max_length[255]');
		$this->form_validation->set_rules('taglineCarousel','Tagline carousel','required|max_length[255]');

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
			$resultTmp = $this->do_upload("fileImgCarousel", $pathDestination, "carousel-img");
			if (!$resultTmp["status"]){
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Incorrect input",
					"errors" => $resultTmp["errors"]
				];
			} else {
				@unlink($_FILES[$this->input->post('fileImgCarousel')]);
			
				//add
				try {
					$this->db->trans_start();
					$data = array(
						'title' => $this->input->post('titleCarousel'),
						'path_img' => $pathDestination.$resultTmp["data"]["upload_data"]["file_name"],
						'tagline' => $this->input->post('taglineCarousel'),
						'state' => 1
					);
					$this->m_carousel->addCarousel($data);
					$this->db->trans_complete();

					$result = [
						"status" => true,
						"data" => [],
						"message" => "Successfully add carousel",
						"errors" => []
					];
				} catch(Excepion $err) {
					$this->db->trans_complete();
					$result = [
						"status" => false,
						"data" => [],
						"message" => "Failed add carousel",
						"errors" => array(
							"add carousel"=>"Failed add carousel"
						)
					];
				}
			}
		}

		echo json_encode($result);
	}

	public function softDeleteCarousel() {
		try {
			$this->db->trans_start();
			$this->m_carousel->softDeleteCarousel($this->input->post('id_carousel'));
			$this->db->trans_complete();

			$result = [
				"status" => true,
				"data" => [],
				"message" => "Successfully delete carousel",
				"errors" => []
			];
		} catch(Excepion $err) {
			$this->db->trans_complete();
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed delete carousel",
				"errors" => array(
					"delete carousel"=>"Failed delete carousel"
				)
			];
		}
		echo json_encode($result);
	}

	public function updateCarousel() {
		//pathDestination
		$pathDestination = "uploads/carousels/";

		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('titleCarouselUpdate','Title carousel', 'required|max_length[255]');
		$this->form_validation->set_rules('taglineCarouselUpdate','Tagline carousel','required|max_length[255]');

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
				$resultTmp = $this->do_upload("fileImgCarouselUpdate", $pathDestination, "carousel-img");
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
						"message" => "Successfully update carousel",
						"errors" => []
					];		
				}
			}
			@unlink($_FILES[$this->input->post('fileImgCarouselUpdate')]);
			
			//update
			try {
				$this->db->trans_start();
				if($this->input->post('isChangeImg')) {
					$data = array(
						'id_carousel' => $this->input->post('id'),
						'title' => $this->input->post('titleCarouselUpdate'),
						'path_img' => $result["data"]["full_path"],
						'tagline' => $this->input->post('taglineCarouselUpdate'),
					);
				} else {
					$data = array(
						'id_carousel' => $this->input->post('id'),
						'title' => $this->input->post('titleCarouselUpdate'),
						'tagline' => $this->input->post('taglineCarouselUpdate'),
					);
				}
				
				$this->m_carousel->updateCarousel($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully update carousel",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed update carousel",
					"errors" => array(
						"update carousel"=>"Failed update carousel"
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
