<?php

class adminModel extends CI_Model {

    private $table = "admin";

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

    public function authenticate_user() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $query = $this->db->query("SELECT * FROM " . $this->table . " WHERE username= '" . $username."'");
        $result = $query->result();
        foreach ($result as $value) {
            $pwd = password_verify($password, $value->password);
          
            if ($pwd == true) {
                return $result;
            } else {
                return "no";
            }
        }
	}
	
	public function enrollCandidate($data) {
      
        if (($result = $this->db->insert('candidate_registration', $data))) {
            return $this->db->insert_id() > 0 ? "yes" : "no";
        } else {
            return "no";
        }
    }

    public function getCandidateLists(){
        $sql = "SELECT * FROM `candidate_registration`";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
