<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

	function __construct() {
		parent::__construct();
	
		if(!$this->session->userdata('email')){
			redirect(base_url("admin/auth"));
		}
		$this->load->library('form_validation');
		$this->load->model('m_facility');
        $this->load->model('m_photo_facility');
    }

	public function index() {
        $data = array();
        $data['title'] = "Facility || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $data["facilities"] = $this->m_facility->getAllFacility();

        $this->load->view('admin/facility/v_index', $data);
	}

	public function create() {
        $data = array();
        $data['title'] = "Create Facility || Sunset Bali Adventure";

        $data['style'] = $this->load->view('admin/template/v_style', '', TRUE);
        $data['script'] = $this->load->view('admin/template/v_script', '', TRUE);

        $data['footer'] = $this->load->view('admin/template/v_footer', '', TRUE);
        $data['menu_admin_left'] = $this->load->view('admin/template/v_menu_admin_left', '', TRUE);
        $data['menu_admin_top'] = $this->load->view('admin/template/v_menu_admin_top', '', TRUE);

        $this->load->view('admin/facility/v_create', $data);
    }

    public function store() {
        try {
            $data = array(
                'title' => $this->input->post('title'),
                'fa_icon' => $this->input->post('fa_icon'),
                'caption' => $this->input->post('caption'),
                'state' => 1
            );
            $resultStore = $this->m_facility->store($data);

            $result = array(
                "status" => true,
                "data" => $resultStore,
                "message" => "Successfully add facility",
                "errors" => array()
            );

            echo json_encode($result);
        }
        catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed add facility",
                "errors" => array()
            );
            echo json_encode($result);
        }
    }

    public function uploadImages() {
        //pathDestination
        $pathDestination = "uploads/facilities/";

        $facilityId = $this->input->post('facility_id');
        $mediasDeletes = explode(',', $this->input->post('medias-deletes'));
        $mediasCount = $this->input->post('medias-count');

        //Hapus images
        if(count($mediasDeletes) >= 1 && $mediasDeletes[0] != "") {
            foreach ($mediasDeletes as $index => $row) {
                $this->m_photo_facility->destroyPhotoFacility($row);
            }
        }

//        var_dump($_FILES);
        $data = array();
        foreach ($_FILES as $key => $value) {
            array_push($data, $key);
            $resultTmp = $this->do_upload($key, $pathDestination, "facility-" . $facilityId . "-img");

            if ($resultTmp["status"]) {
                @unlink($_FILES[$this->input->post($key)]);

                $data = array(
                    'id_facility' => $facilityId,
                    'url' => $pathDestination . $resultTmp["data"]["upload_data"]["file_name"],
                    'state' => 1
                );
                $this->m_photo_facility->store($data);
            }
        }
        echo json_encode(array(
            'status' => true,
            'data' => array(),
            'message' => 'Success',
            'errors' => array()
        ));
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

    public function destroy() {
        try {
            $this->m_facility->destroy($this->input->post('id_facility'));

            $result = array(
                "status" => true,
                "data" => array(),
                "message" => "Successfully delete socmed",
                "errors" => array()
            );
        } catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed delete about",
                "errors" => array(
                    "delete about"=>"Failed delete about"
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
        $data['facility_images'] = $this->m_facility->getFacilityImages($id);

        $this->load->view('admin/facility/v_edit', $data);
    }

    public function update($id) {
        try {
            $data = array(
                'title' => $this->input->post('title'),
                'fa_icon' => $this->input->post('fa_icon'),
                'caption' => $this->input->post('caption'),
                'state' => $this->input->post('state')
            );

            $this->m_facility->update($id, $data);

            $result = array(
                "status" => true,
                "data" => $id,
                "message" => "Success update facility",
                "errors" => array()
            );
            echo json_encode($result);
        }
        catch(Excepion $err) {
            $result = array(
                "status" => false,
                "data" => array(),
                "message" => "Failed add facility",
                "errors" => array()
            );
            echo json_encode($result);
        }
    }
	
}
