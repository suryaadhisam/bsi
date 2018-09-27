<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_headfoot');
				$this->load->model('M_info');
    }

		public function index(){

		}

	  public function detail_info($id){
			$data['list_contact'] = $this->M_headfoot->get_contact_us();
			$data['list_socmed'] = $this->M_headfoot->get_socmed();
			$data['logo'] = $this->M_headfoot->get_logo();
			$data['detail_info'] = $this->M_info->get_detail_info($id);
			$data['list_info'] = $this->M_headfoot->get_info();
			$data['list_services'] = $this->M_headfoot->get_services();

			foreach($data['detail_info'] as $result) {
			    $titile =  $result->judul;
			}

			$data['title']			= "$titile || Sunset Bali Adventure";

			$this->load->view('v_style', $data);
			$this->load->view('v_script');
			$this->load->view('v_header', $data);
			$this->load->view('v_info_detail', $data);
			$this->load->view('v_footer', $data);
	    }
    }
