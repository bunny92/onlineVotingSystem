<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("adminModel");
    }

    public function index() {
        $this->load->view('adminLogin');
    }

    public function dashboard() {
        $this->load->view('adminDashboard');
    }
    
    public function enrollCandidate() {
        $this->load->view('enrollCandidate');
    }

    public function enrolledCandidates() {
        $data['candidateLists'] = $this->adminModel->getCandidateLists();
        $this->load->view('updateCandidate',$data);
    }
	
	public function upload_document() {
        if ($this->input->post("candidate_name")) {

			$candidate_image = $this->upload_candidate_image($this->input->post("candidate_image"),$this->input->post("constitution_id"));
			$party_symbol = $this->upload_party_symbol($this->input->post("party_symbol"),$this->input->post("constitution_id"));
			
            if ($candidate_image == "no" || $party_symbol == "no") {
                $this->session->set_flashdata("no_message", "Cannot Upload.. Please try again..!");
                redirect("admin/enrollCandidate");
            } else {
                $data = [
					'candidate_name' => $this->input->post("candidate_name"),
					'party_name' => $this->input->post("party_name"),
					'constitution_id' => $this->input->post("constitution_id"),
					'serial_number' => $this->input->post("serial_number"),
					'candidate_image' => $candidate_image,
					'party_symbol' => $party_symbol,
                    'created_at' => date('Y-m-d')
                ];
                $response = $this->adminModel->enrollCandidate($data);
                if ($response === "yes") {
                    $this->session->set_flashdata("success_message", "Uploaded Successfully..!");
                    redirect("admin/enrollCandidate");
                } else {
                    $this->session->set_flashdata("error_message", "Not inserted.. Please try again..!");
					redirect("admin/enrollCandidate");
                }
            }
        } else {
            redirect("admin/enrollCandidate");
        }
    }

    public function upload_candidate_image($document_type,$C_ID)
    {
        $this->id = $this->session->userdata("id");
        $file_name = $_FILES['candidate_image']['name'];
        $ext = substr($file_name, strrpos($file_name, '.') + 1);
        $actual_image_name = 'ovc' . '_' . 'candidate_' . $C_ID .'_' . 'candidate_image' . "." . $ext;
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
        $config['max_size']    = '20000';
        $config['file_name'] = $actual_image_name;
        $config['overwrite'] = TRUE;
        $config['width']     = 50;
        $config['height']   = 50;

        $this->load->library('image_lib', $config); 

        $this->image_lib->resize();

        //load eupload class library
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('candidate_image'))
        {
             return $actual_image_name;
        }
        else
        {
        	 $error = array('error' => $this->upload->display_errors());
        	 var_dump($error);
            return "no";
             
        }
	}

	public function upload_party_symbol($document_type,$C_ID)
    {
        $this->id = $this->session->userdata("id");
        $file_name = $_FILES['party_symbol']['name'];
        $ext = substr($file_name, strrpos($file_name, '.') + 1);
        $actual_image_name = 'ovc' . '_' . 'candidate_' .$C_ID. '_' . 'party_symbol' . "." . $ext;
        $config2['upload_path'] = './uploads/';
        $config2['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
        $config2['max_size']    = '20000';
        $config2['file_name'] = $actual_image_name;
        $config2['overwrite'] = TRUE;
        $config2['width']     = 150;
        $config2['height']   = 50;

        $this->load->library('image_lib', $config2); 

        $this->image_lib->resize();

        $this->upload->initialize($config2);

        if ($this->upload->do_upload('party_symbol'))
        {
             return $actual_image_name;
        }
        else
        {
        	$error = array('error' => $this->upload->display_errors());
        	var_dump($error);
            return "no";
             
        }
	}
	
    public function authenticate_user() {
        if ($this->input->post("username") !== NULL) {
            $response = $this->adminModel->authenticate_user();
            if ($response !== NULL && $response !== "no") {
                foreach ($response as $value) {
					$this->session->set_userdata('id', $value->id);
					$this->session->set_userdata('name', $value->name);
                    redirect(base_url() . 'admin/dashboard', 'refresh');
                }
            } else {
                $this->session->set_flashdata('login_error', 'Login Failed. Please try again');
                redirect(base_url() . 'admin');
            }
        } else {
            $this->load->view('404');
        }
    }

    /*     * *****LOGOUT FUNCTION ****** */

    function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() . 'admin', 'refresh');
    }
}
