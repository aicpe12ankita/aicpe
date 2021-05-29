<?php
class Login_model extends CI_Model{

	public function validate_login(){
		$id= $this->input->post('rulesId');
		$password = $this->input->post('rulesPassword');

		$this->db->where('stud_aicpeID',$id);
		$this->db->where('stud_password',$password);
		$result = $this->db->get('students');
		if($result->num_rows()>0){
		}
		return $result->result();
	}

	public function get_user_detail($userid){
		$this->db->where('stud_aicpeID',$userid);
		$stud_res = $this->db->get('students');
		if($stud_res->num_rows()>0){
			$stud_data = $stud_res->row();
			$session = array('username'=>$stud_data->stud_aicpeID,
							 'userID'=>$stud_data->stud_id,
							 'validate'=>true,
							 'roles'=>$stud_data->stud_roles);
			$this->session->set_userdata($session);
			return $stud_res->row();
		}
	}
}