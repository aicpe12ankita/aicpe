<?php

class Ajax extends CI_Controller{
	
	public function add_enquiry(){

		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|valid_email');
		 if ($this->form_validation->run() == false) {
            $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
        }
        else {
        	$table="enquiries";
        	$data = array(
				'stud_firstName' => $this->input->post('first_name', true),
                'stud_middleName' => $this->input->post('middle_name', true),
                'stud_lastName' => $this->input->post('last_name', true),
                'course_of_interest' => $this->input->post('course_of_interest', true),
                'mobile_1' => $this->input->post('mobile1', true),
                'mobile_2' => $this->input->post('mobile2', true),
                'whatsapp_no' => $this->input->post('whatsappNo', true),
                'email' => $this->input->post('email', true),
                'gender' => $this->input->post('gender', true),
                'date_of_birth' => $this->input->post('date_of_birth', true),
                'education' => $this->input->post('education', true),
                'occupation' => $this->input->post('occupation', true),
                'address' => $this->input->post('address', true),
                'country' => $this->input->post('country', true),
                'state' => $this->input->post('state', true),
                'city' => $this->input->post('city', true),
                'pincode' => $this->input->post('pincode', true),
                'inst_staff_id' => $this->input->post('assign_staff', true),
                'date_of_enquiry' => date('Y-m-d H:i:s')
        	);
			$id = $this->Institution_model->insert_data($data,$table);

			$response = array(
                'status' => 'success',
                'message' => "<h3>Message send successfully.</h3>"
            );
		}

		 $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
	}

	// public function dropzone_data(){
	// 	$fileName = $_FILES['file']['name'];
	// 	 print_r($fileName); die;
	// }

    public function add_student(){
        print_r($_POST);
        echo "hello"; print_r($_FILES);
        echo  $photo = $_FILES['stud_photo']['name'];
        echo  $idProof = $_FILES['stud_photoIdProof']['name'];
        $path1 = './assets/images/students/photos';
        $path2 = './assets/images/students/idproof';
        $this->do_upload($path1,$img1);
        $this->do_upload($path2,$img2);

        $res = $this->Institution_model->add_student();
        $response = array(
                'status' => 'success',
                'message' => "<h3>Message send successfully.</h3>"
            );
         $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

     public function do_upload($path,$img)
        {
                $config['upload_path']          = $path;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload($img))
                {
                        $error = array('error' => $this->upload->display_errors());

                      
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                 
                }
        }

        public function check_email(){
            $resp ="";
            $email = $this->input->post('email');
            $this->db->where('email',$email);
            $this->db->where('deleted_status','0');
            $qry = $this->db->get('institutions');

            

            if($qry->num_rows()>0){
                $resp = 'true';
            }

            echo json_encode($resp);
        }

        public function approve_institute(){
            $resp = $this->Admin_model->approve_institute();
            echo json_encode($resp);
        }

        public function hold_institute(){
            $resp = $this->Admin_model->hold_institute();
            echo json_encode($resp);
        }

        public function active_institute(){
            $resp = $this->Admin_model->active_institute();
            echo json_encode($resp);
        }

        public function block_institute(){
            $resp = $this->Admin_model->block_institute();
            echo json_encode($resp);
        }

         public function change_quick_enquiry_status(){
            $resp = $this->Admin_model->change_quick_enquiry_status();
            echo json_encode($resp);
        }
    
}

