<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logo extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_logo');
	}

	public function index() {
        $data = array();
        $data['title'] = "Logo || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["logo"] = $this->m_logo->getAllLogo();

        $this->load->view('admin/logo/v_index', $data);
	}

    public function edit($id) {
        $data = array();
        $data['title'] = "Edit Logo || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['logo'] = $this->m_logo->getLogo($id);
        $this->load->view('admin/logo/v_edit', $data);
    }

    public function update($id) {
        //pathDestination
        $pathDestination = "uploads/logo/";

        //upload img
        $resultTmp = $this->do_upload("fileImgUpdate", $pathDestination, "logo-img");
        @unlink($_FILES[$this->input->post('fileImgUpdate')]);

        //add
        try {
            $this->db->trans_start();
            if(!$resultTmp["status"]) {
                $data = array(
                    'path' => '',
                    'state' => 1
                );
            }
            else {
                $data = array(
                    'path' => $pathDestination.$resultTmp["data"]["upload_data"]["file_name"],
                    'state' => 1
                );
            }

            $this->m_logo->update($id, $data);
            $this->db->trans_complete();

            $this->session->set_flashdata('status', 'Success update logo');
            redirect(base_url('admin/logo'));

        } catch(Excepion $err) {
            $this->db->trans_complete();
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/logo'));
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

	
	
}
