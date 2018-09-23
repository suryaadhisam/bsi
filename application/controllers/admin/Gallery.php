<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_gallery');
	}

	public function index() {
        $data = array();
        $data['title'] = "Gallery || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["galleries"] = $this->m_gallery->getAllGallery();

        $this->load->view('admin/gallery/v_index', $data);
	}

	public function create() {
        $data = array();
        $data['title'] = "Create Gallery || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $this->load->view('admin/gallery/v_create', $data);
    }

    public function store() {
        try {
            //pathDestination
            $pathDestination = "uploads/gallery/";

            //upload img
            $resultTmp = $this->do_upload("fileImg", $pathDestination, "gallery-img");
            if (!$resultTmp["status"]) {
                $result = array(
                    "status" => false,
                    "data" => array(),
                    "message" => "Incorrect input",
                    "errors" => $resultTmp["errors"]
                );
            }
            else {
                @unlink($_FILES[$this->input->post('fileImg')]);

                //add
                try {
                    $this->db->trans_start();
                    $data = array(
                        'title' => $this->input->post('title'),
                        'sumary' => $this->input->post('summary'),
                        'url' => $pathDestination.$resultTmp["data"]["upload_data"]["file_name"],
                        'state' => 1
                    );
                    $this->m_gallery->store($data);
                    $this->db->trans_complete();

                    $this->session->set_flashdata('status', 'Success create gallery');
                } catch(Excepion $err) {
                    $this->db->trans_complete();
                    $this->session->set_flashdata('status', 'Failed create gallery');
                }
            }

            redirect(base_url('admin/gallery'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/gallery'));
        }
    }

    public function do_upload($formFileName, $pathImg, $fileNameImg) {
        $config['upload_path']          = realpath(FCPATH.$pathImg);
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 1024 * 5; //5MB
        $config['file_name']            = $fileNameImg;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($formFileName)) {
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

    public function destroy() {
        try {
            $this->m_gallery->destroy($this->input->post('id'));

            $result = array(
                "status" => true,
                "data" => array(),
                "message" => "Successfully delete gallery",
                "errors" => array()
            );
        } catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed delete gallery",
                "errors" => array(
                    "delete about"=>"Failed delete gallery"
                )
            );
        }
        echo json_encode($result);
    }

    public function edit($id) {
        $data = array();
        $data['title'] = "Edit Facility || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['facility'] = $this->m_facility->getFacility($id);
        $this->load->view('admin/facility/v_edit', $data);
    }

    public function update($id) {
        try {
            $data = array(
                'title' => $this->input->post('title'),
                'caption' => $this->input->post('caption'),
                'state' => $this->input->post('state')
            );

            $this->m_facility->update($id, $data);
            $this->session->set_flashdata('status', 'Success update facility');
            redirect(base_url('admin/facility'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/facility'));
        }
    }
	
}
