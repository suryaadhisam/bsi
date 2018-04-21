<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_schedule');

	}

	public function index(){
		
	}

	public function getSchedules() {
		$data = array();
		$data['title'] = "Schedule || Sunset Bali Adventure";

		$data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
		$data['script'] = $this->load->view('admin/template/v_script', '', TRUE);
		
		$data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
		$data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
		$data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

		$this->load->model("m_schedule");
		$this->load->model("m_service");

		$where = array(
			'state' => 1
		);
	 
		$this->load->library('pagination');        
        $limit_per_page = 4;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->m_schedule->getCount();
		
		//get data services
		$where = array(
			'state' => 1
		);
		$data["services"] = $this->m_service->getAllServices($where);


        if ($total_records > 0) {
            // get current page records
            $data["schedules"] = $this->m_schedule->getCurrentPageRecordSchedule($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'admin/schedules';
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
			$data["schedules"] = [];
		}
		// echo "<pre>";
		// print_r($data["services"]);
		// echo "</pre>";
		$this->load->view('admin/v_schedule', $data);
	}

	public function getSchedule() {
		try {
			$where = array(
				'id_schedule' => $this->input->post('idSchedule')
			);

			$result = [
				"status" => true,
				"data" => $this->m_schedule->getSchedule($where)[0],
				"message" => "Successfully get schedule",
				"errors" => []
			];
		} catch(Excepion $err) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed get schedule",
				"errors" => array(
					"get schedule"=>"Failed get schedule"
				)
			];
		}

		echo json_encode($result);
	}

	public function addSchedule() {
		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('serviceId','Service', 'required');
		$this->form_validation->set_rules('timeStart','Time start','required');
		$this->form_validation->set_rules('timeEnd','Time end','required');

		if ($this->form_validation->run() == FALSE) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Incorrect input",
				"errors" => $this->form_validation->error_array()
			];
		}
		else {
			//add
			try {
				$this->db->trans_start();
				$data = array(
					'id_service' => $this->input->post('serviceId'),
					'time_begin' => $this->input->post('timeStart'),
					'time_end' => $this->input->post('timeEnd'),
					'state' => 1
				);
				$this->m_schedule->addSchedule($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully add schedule",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed add schedule",
					"errors" => array(
						"add schedule"=>"Failed add schedule"
					)
				];
			}
		}

		echo json_encode($result);
	}

	public function softDeleteSchedule() {
		try {
			$this->db->trans_start();
			$this->m_schedule->softDeleteSchedule($this->input->post('id_schedule'));
			$this->db->trans_complete();

			$result = [
				"status" => true,
				"data" => [],
				"message" => "Successfully delete schedule",
				"errors" => []
			];
		} catch(Excepion $err) {
			$this->db->trans_complete();
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed delete schedule",
				"errors" => array(
					"delete schedule"=>"Failed delete schedule"
				)
			];
		}
		echo json_encode($result);
	}

	public function updateSchedule() {
		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('serviceIdUpdate','Service', 'required');
		$this->form_validation->set_rules('timeStartUpdate','Time start','required');
		$this->form_validation->set_rules('timeEndUpdate','Time end','required');

		if ($this->form_validation->run() == FALSE) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Incorrect input",
				"errors" => $this->form_validation->error_array()
			];
		} 
		else {
			//update
			try {
				$this->db->trans_start();
				$data = array(
					'id_service' => $this->input->post('serviceIdUpdate'),
					'id_schedule' => $this->input->post('id'),
					'time_begin' => $this->input->post('timeStartUpdate'),
					'time_end' => $this->input->post('timeEndUpdate'),
				);
				
				$this->m_schedule->updateSchedule($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully update schedule",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed update schedule",
					"errors" => array(
						"update schedule"=>"Failed update schedule"
					)
				];
			}
		}

		echo json_encode($result);
	}	
	
}
