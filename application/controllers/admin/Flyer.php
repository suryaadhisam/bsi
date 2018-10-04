<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flyer extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_flyer');
	}

	public function index() {
        $data = array();
        $data['title'] = "Flyer || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["flyer"] = $this->m_flyer->getAllFlyer();

        $this->load->view('admin/flyer/v_index', $data);
	}

	public function create() {
        $data = array();
        $data['title'] = "Create Flyer || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $this->load->view('admin/flyer/v_create', $data);
    }

    public function store() {
        try {
            //pathDestination
            $pathDestination = "uploads/flyer/";

            //upload img
            $resultTmp = $this->do_upload("fileImg", $pathDestination, "flyer-img");
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
                        'detail' => $this->input->post('detail'),
                        'path_img' => $pathDestination.$resultTmp["data"]["upload_data"]["file_name"],
                        'state' => 1
                    );
                    $this->m_flyer->store($data);
                    $this->db->trans_complete();

                    $this->session->set_flashdata('status', 'Success create flyer');
                } catch(Excepion $err) {
                    $this->db->trans_complete();
                    $this->session->set_flashdata('status', 'Failed create flyer');
                }
            }

            redirect(base_url('admin/flyer'));
        } catch(Excepion $err) {
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/flyer'));
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
            $this->m_flyer->destroy($this->input->post('id_popup'));

            $result = array(
                "status" => true,
                "data" => array(),
                "message" => "Successfully delete flyer",
                "errors" => array()
            );
        } catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed delete flyer",
                "errors" => array(
                    "delete_flyer"=>"Failed delete flyer"
                )
            );
        }
        echo json_encode($result);
    }

    public function edit($id) {
        $data = array();
        $data['title'] = "Edit Flyer || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data['flyer'] = $this->m_flyer->getFlyer($id);
        $this->load->view('admin/flyer/v_edit', $data);
    }

    public function update($id) {
        //pathDestination
        $pathDestination = "uploads/flyer/";

        //upload img
        $resultTmp = $this->do_upload("fileImgUpdate", $pathDestination, "flyer-img");
        @unlink($_FILES[$this->input->post('fileImgUpdate')]);

        //add
        try {
            $this->db->trans_start();
            if(!$resultTmp["status"]) {
                $data = array(
                    'detail' => $this->input->post('detail'),
                    'state' => 1
                );
            }
            else {
                $data = array(
                    'detail' => $this->input->post('detail'),
                    'path_img' => $pathDestination.$resultTmp["data"]["upload_data"]["file_name"],
                    'state' => 1
                );
            }

            $this->m_flyer->update($id, $data);
            $this->db->trans_complete();

            $this->session->set_flashdata('status', 'Success update flyer');
            redirect(base_url('admin/flyer'));

        } catch(Excepion $err) {
            $this->db->trans_complete();
            $this->session->set_flashdata('status', $err->getMessage());
            redirect(base_url('admin/flyer'));
        }
    }
	
}
