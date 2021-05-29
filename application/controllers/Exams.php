<?php
class Exams extends CI_Controller{

	public function index(){

		$this->load->view('admin/exam/demo-exam');
	}
	public function demo_exam(){

		$this->load->view('admin/exam/demo-exam');
	}
	public function demo_exam_manager(){

		$this->load->view('admin/exam/demo-exam-manager');
	}
	public function final_exam(){

		$this->load->view('admin/exam/final-exam');
	}
	public function final_exam_manager(){

		$this->load->view('admin/exam/final-exam-manager');
	}
	
	public function exam_hall_ticket(){
		$this->load->view('admin/exam/exam-hall-ticket');
	}
	public function paper_exam(){
		$this->load->view('admin/exam/paper-exam');
	}
	public function paper_exam_manager(){
		$this->load->view('admin/exam/paper-exam-manager');
	}
}