<?php
class Students extends CI_Controller{

	public function index(){

		$this->load->view('admin/student/dashboard');
	}
	public function profile(){

		$this->load->view('admin/student/profile');
	}
	public function courses(){

		$this->load->view('admin/student/courses');
	}
	public function study_material(){

		$this->load->view('admin/student/study-material');
	}
	public function course_assignment(){

		$this->load->view('admin/student/course-assignment');
	}
	public function job_offers(){

		$this->load->view('admin/student/job-updates');
	}
	public function library_management(){

		$this->load->view('admin/student/library-management');
	}
	public function document_manager(){

		$this->load->view('admin/student/document-manager');
	}
	public function birthday_and_anniversary(){

		$this->load->view('admin/student/birthday-and-anniversary');
	}
	public function invention_center(){

		$this->load->view('admin/student/invention-center');
	}
	public function resume_maker(){
		
		$this->load->view('admin/student/resume-maker');
	}
	public function settings(){

		$this->load->view('admin/student/settings');
	}
	
}