<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->library('session');
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function index() {
        /*if(isset($this->session->user['id']) OR isset($_COOKIE['user_id']))
        {
            redirect('dashboard');
        }*/
        if($this->input->post('login')=="login"){
            if($this->input->post('rulesId')!="" && $this->input->post('rulesPassword')!=""){
                $userid = $this->input->post('rulesId');
                $user_detail = $this->Login_model->get_user_detail($userid);
                    if(isset($user_detail)){ 
                        if($user_detail->stud_password == sha1($this->input->post('rulesPassword').$user_detail->stud_secret_code)){
                            
                            if($user_detail->stud_status=='0' && $user_detail->stud_deleted=='N'){
                                   
                                    $data = array('logged_status'=>1);
                                    $this->db->where('stud_aicpeID',$userid);
                                    $this->db->update('students',$data);

                                /////////////////

                                if(isset($_POST['remember_me']))
                                {  
                                    $month = time() + (86400 * 30);

                                    setcookie('remember_me',TRUE,$month,"/");
                                    setcookie('username',helper_encrypt_url_key($this->input->post('rulesId')), $month,"/"); 
                                    setcookie('user_pass', helper_encrypt_url_key($this->input->post('rulesPassword')), $month,"/");
                                    setcookie( 'user_id',helper_encrypt_url_key($user_detail->stud_id),$month,"/"); 

                                }
                                else
                                {
                                    setcookie('username', '');
                                    setcookie('user_pass', '');
                                    setcookie('user_id','');
                                    setcookie('remember_me',FALSE);
                                }

                                /////////////////

                                $message = array(
                                  'type' => 'success'
                                  );
                                redirect('student-dashboard');
                            }
                    }
                }
            }
            
        }else{
            $this->load->view('admin/login');
        }
        
    }

   public function logout(){
    if($this->session->userdata()!=""){
            $result = $this->session->sess_destroy();
            if($result ==""){
                $this->session->set_flashdata('Success','You are Logout successfully.');
                        redirect(base_url());
                    }else{
                        $this->session->set_flashdata('Error','An error occured. Please try again.');
                        redirect(HTTP_REFFER);
                    }
        } 
   }
    
}
