<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
 	{
            parent::__construct();
          $this->load->model('M_about');
                $this->load->library('pagination');
      }

	public function index(){
		$baris = $this->M_about->row();

		if ($baris > 0) {
			# code...
			$config['base_url'] = base_url('/About/index/');
			$config['total_rows'] = $baris;
			$config['per_page'] = 5;

			$config['full_tag_open'] = '<nav aria-label="pagination example"><ul class="pagination pg-blue">';
			$config['full_tag_close'] = '</ul></nav>';

			$config['num_tag_open']     = '<li class="page-item">';
      $config['num_tag_close']    = '</li>';


			$config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';



			// <li class="page-item disabled">
			// 		<a class="page-link" href="#" aria-label="Previous">
			// 				<span aria-hidden="true">&laquo;</span>
			// 				<span class="sr-only">Previous</span>
			// 		</a>
			// </li>

			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous">&laquo;</span><span class="sr-only"><span aria-hidden="true">Previous</span>';
			$config['prev_tag_close'] = '</span></span></a></li>';

			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li class="page-item"><span class="sr-only"><span aria-hidden="true">';
			$config['next_tag_close'] = '</span></span></li>';

			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#"><span class="sr-only">';
			$config['cur_tag_close'] = '</span></a></li>';

			$config['num_links'] = 3;
			$start = $this->uri->segment(3);
			$this->pagination->initialize($config);
		}

		$data['list_about'] = $this->M_about->get_about($config['per_page'], $start);

		$data['title']			= "About || Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header');
		$this->load->view('v_about', $data);
		$this->load->view('v_footer');
	}
}
