<?php
class Employer extends CI_Controller{
	
	public function index(){
		$this->load->view('admin/employer/index');
	}

	public function profile(){
		$this->load->view('admin/employer/profile');
	}

	public function post_job(){
		$this->load->view('admin/employer/post_job');
	}

	public function post_jobs_report(){
		$this->load->view('admin/employer/post_jobs_report');
	}
	public function view_post_job(){
		$this->load->view('admin/employer/view_job');
	}

	public function settings(){
		$this->load->view('admin/employer/settings');
	}

	public function chatbox(){
		$this->load->view('admin/employer/chat_box');
	}

	public function sms_management(){
		$this->load->view('admin/employer/sms_management');
	}
	public function wallet(){
		$this->load->view('admin/employer/wallet');
	}

	public function applicants_list(){
		$this->load->view('admin/employer/applicants_list');
	}
	public function contacts(){
		$this->load->view('admin/employer/contacts');
	}
}