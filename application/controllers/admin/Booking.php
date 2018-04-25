<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_booking');

	}

	public function index(){
		
	}

	public function getAllBooking() {
		$data = array();
		$data['title'] = "Booking || Sunset Bali Adventure";

		$data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
		$data['script'] = $this->load->view('admin/template/v_script', '', TRUE);
		
		$data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
		$data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
		$data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);
	 
		$this->load->library('pagination');        
        $limit_per_page = 4;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->m_booking->getCount();
     
        if ($total_records > 0) {
            // get current page records
            $data["booking"] = $this->m_booking->getCurrentPageRecordBooking($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'admin/booking';
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
			$data["booking"] = [];
		}
		

		$this->load->view('admin/v_booking', $data);
	}

	public function getBooking() {
		try {
			$where = array(
				'id_booking' => $this->input->post('idBooking')
			);

			$result = [
				"status" => true,
				"data" => $this->m_booking->getBooking($where)[0],
				"message" => "Successfully get booking",
				"errors" => []
			];
		} catch(Excepion $err) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed get booking",
				"errors" => array(
					"get booking"=>"Failed get booking"
				)
			];
		}

		echo json_encode($result);
	}

	public function addBooking() {
		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('idPackage','Id package', 'required|integer');
		$this->form_validation->set_rules('price','Price', 'required|decimal');
		$this->form_validation->set_rules('duration','Duration', 'required|integer');
		$this->form_validation->set_rules('bookingDate','Booking date', 'required');
		$this->form_validation->set_rules('adult','Adult', 'required|integer');
		$this->form_validation->set_rules('children','Children', 'required|integer');
		$this->form_validation->set_rules('infant','Infant', 'required|integer');
		$this->form_validation->set_rules('family','Family', 'required|integer');

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
					'id_package' => $this->input->post('idPackage'),
					'price' => $this->input->post('price'),
					'duration' => $this->input->post('duration'),
					'booking_date' => $this->input->post('bookingDate'),
					'adult' => $this->input->post('adult'),
					'childern' => $this->input->post('children'),
					'infant' => $this->input->post('infant'),
					'family' => $this->input->post('family')
				);
				$this->m_booking->addBooking($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully add booking",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed add booking",
					"errors" => array(
						"add booking"=>"Failed add booking"
					)
				];
			}
		}

		echo json_encode($result);
	}

	public function deleteBooking() {
		try {
			$this->db->trans_start();
			$this->m_booking->deleteBooking($this->input->post('id_booking'));
			$this->db->trans_complete();

			$result = [
				"status" => true,
				"data" => [],
				"message" => "Successfully delete booking",
				"errors" => []
			];
		} catch(Excepion $err) {
			$this->db->trans_complete();
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed delete booking",
				"errors" => array(
					"delete booking"=>"Failed delete booking"
				)
			];
		}
		echo json_encode($result);
	}

	public function updateBooking() {
		
		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('idPackageUpdate','Id package', 'required|integer');
		$this->form_validation->set_rules('idPackageUpdate','Price', 'required|decimal');
		$this->form_validation->set_rules('idPackageUpdate','Duration', 'required|integer');
		$this->form_validation->set_rules('idPackageUpdate','Booking date', 'required');
		$this->form_validation->set_rules('idPackageUpdate','Adult', 'required|integer');
		$this->form_validation->set_rules('idPackageUpdate','Children', 'required|integer');
		$this->form_validation->set_rules('idPackageUpdate','Infant', 'required|integer');
		$this->form_validation->set_rules('idPackageUpdate','Family', 'required|integer');

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
					'id_package' => $this->input->post('idPackageUpdate'),
					'price' => $this->input->post('priceUpdate'),
					'duration' => $this->input->post('durationUpdate'),
					'booking_date' => $this->input->post('bookingDateUpdate'),
					'adult' => $this->input->post('adultUpdate'),
					'childern' => $this->input->post('childrenUpdate'),
					'infant' => $this->input->post('infantUpdate'),
					'family' => $this->input->post('familyUpdate')
				);
				
				$this->m_booking->updateBooking($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully update booking",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed update booking",
					"errors" => array(
						"update booking"=>"Failed update booking"
					)
				];
			}
		}

		echo json_encode($result);
	}	
	
}
