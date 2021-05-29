<?php

class Institutions extends MY_Controller{
	
	function __construct()
    {
        parent::__construct();
		$this->page_segment = 2;
        $this->per_page = 6;
        $this->per_page_option = array(1=>1,2=>2, 5=>5, 10=>10); 
       // $this->load->library('PHPExcel');
        $this->load->helper('common_helper');  
        $this->load->model('Common_model','common_model');    
        $this->log_in_user_id = 1;

        $this->ZIP_FILE_PATH = "uploads/question_bank/";
    }


	public function index(){
		$this->load->view('admin/institution/index');
		
	}

	// public function profile(){
	// 	$this->load->view('admin/institution/profile');
	// }
	/*
	@Description  : Institution Profile
	@Author       : Ankita Mandlik
	@Date         : 21-02-2021
	*/

	public function profile()
	{
		$where = array(
			'inst_code' => 'INST_00101',			
		);

		$data['institution_details'] = $this->Institution_model->institution_details($where);
		
		$this->load->view('admin/institution/profile',$data);
	}

	/*
	@Description  : Upload Drop zone file
	@Author       : Ankita Mandlik
	@Date         : 26-02-2021
	*/

	public function upload_dropzone_file()
	{
		$upload_images_array = array();
		$this->load->library('upload');
		$error_msg =''; $p_status = true;
		if(!empty($_FILES['file']['name']))
		{
			$filesCount = count(explode(' ', $_FILES['file']['name']));
			if(isset($_FILES['file']['name']) &&  !empty($_FILES['file']['name']))
			{
				$_FILES['image']['name']     = $_FILES['file']['name'];
				$_FILES['image']['type']     = $_FILES['file']['type'];
				$_FILES['image']['tmp_name'] = $_FILES['file']['tmp_name'];
				$_FILES['image']['error']    = $_FILES['file']['error'];
				$_FILES['image']['size']     = $_FILES['file']['size'];
				$upload_path                         = 'uploads/institution_files/';
				$config['upload_path']               = $upload_path;
				$config['allowed_types']             = 'gif|jpg|png|jpeg|docs|xls|csv|pdf';
				//$config['max_size']                  = '50480';
				//$config['max_width']                 = '10048';
				//$config['max_height']                = '10048';
				$config['encrypt_name']              = true;
				$config['remove_spaces']             = true;
				$this->upload->initialize($config);
				if($this->upload->do_upload('image'))
				{	
					$fileData = $this->upload->data();
					
					$src_path = base_url().$upload_path.$fileData['file_name'];					

					$upload_images_array =  array('file_name'=>$fileData['file_name'],'file_name_url' => base_url().$upload_path.$fileData['file_name']);
				}
				else
				{
					$error_msg = $this->upload->display_errors();
					$p_status = false;
				}
			}			
		}

		if(count($upload_images_array) > 0)
		{
			echo json_encode($upload_images_array);
		}
		else
		{
			echo json_encode($error_msg);
		}
	}

	/*
	@Description  : Save Institution Profile
	@Author       : Ankita Mandlik
	@Date         : 21-02-2021
	*/

	public function save_profile()
	{
		$post_data = $this->input->post();  

		$response = array('type'=>'error','msg'=>'Something went wrong! Please try again.');

		$insert_data = array();

		if(count($post_data)>0)
		{
			$insert_data = array(
				'inst_name'              => !empty($post_data['i_instName']) ? $post_data['i_instName']:'',
				'owner_name'             => !empty($post_data['i_ownerName']) ? $post_data['i_ownerName']:'',
				'designation'            => !empty($post_data['i_designation']) ? $post_data['i_designation']:'',
				'email'                  => !empty($post_data['i_email']) ? $post_data['i_email']:'',
				'mobile_1'               => !empty($post_data['i_mobile1']) ? $post_data['i_mobile1']:'',
				'mobile_2'               => !empty($post_data['i_mobile2']) ? $post_data['i_mobile2'] :'',
				'whatsapp_no'            => !empty($post_data['i_whatsppNo']) ? $post_data['i_whatsppNo']:'',
				'dete_of_birth'          => !empty($post_data['i_dateofBirth']) ? $post_data['i_dateofBirth']:'',
				'pan_no'                 => !empty($post_data['i_panNo']) ? $post_data['i_panNo']:'',
				'gst_no	'                => !empty($post_data['i_gstNo']) ? $post_data['i_gstNo']:'',
				'address'                => !empty($post_data['i_address']) ? $post_data['i_address']:'',
				'country'                => !empty($post_data['p_country'])?$post_data['p_country']:'',
				'state'                  => !empty($post_data['p_state']) ? $post_data['p_state']:'',
				'city'                   => !empty($post_data['p_city']) ? $post_data['p_city']:'',
				'pincode'                => !empty($post_data['p_pinCode']) ? $post_data['p_pinCode']:'',
				'inst_details'           => !empty($post_data['i_instDetails']) ? $post_data['i_instDetails']:'',
				'username'               => !empty($post_data['p_userName']) ? $post_data['p_userName']:'',
				'photo_id_type'          => !empty($post_data['i_photoIdType']) ? $post_data['i_photoIdType']:'',
				'photo_id_no'            => !empty($post_data['i_photoIdNo']) ? $post_data['i_photoIdNo']:'',
				'inst_logo'              => !empty($post_data['institution_logo']) ? $post_data['institution_logo']:'',
				'owner_photo'            => !empty($post_data['owner_passport_photo']) ? $post_data['owner_passport_photo']:'',
				'photo_id'               => !empty($post_data['id_photo_proof']) ? $post_data['id_photo_proof']:'',
				'inst_registration_cert' => !empty($post_data['registration_certificate']) ? $post_data['registration_certificate']:'',
				'qualification'          => !empty($post_data['education_qualification']) ? $post_data['education_qualification']:'',
				'inst_gallery'           => !empty($post_data['institution_gallary']) ? $post_data['institution_gallary']:'',
			);

			$where_data = array(
				'id' => 2,
				'insert_data' => $insert_data,				
			); 

			if(count($insert_data)>0)
			{
				$this->Institution_model->save_profile($where_data);

				$response = array('type'=>'success','msg'=>'Profile update successfully.');
			}
		}

		echo json_encode($response);
	}

	/*
	@Description  : Get enquieries list
	@Author       : Ankita Mandlik
	@Date         : 21-02-2021
	*/

	public function enquiries()
	{

		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 6);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->getAllData('data',$where_data);
		$data['total_records'] =  $this->Institution_model->getAllData('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-enquiries/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 6),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/enquiries',
            'default_sort'      => 'id',
            'default_direction' => 'asc',
            'list_ajax'         => 'admin/institution/enquiries_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);
	
	}

	public function enquiriesList()
	{
	    // POST data
	    $postData = $this->input->post();

	    // Get data
	    $data = $this->Institution_model->getEnquiries_dataTable($postData);

	    echo json_encode($data);
  	}

  	/*
	@Description  : admission list
	@Author       : Varsha wankhede
	@Date         : 18-05-2021
	*/

	public function admissions(){
		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 10);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->get_admissions('data',$where_data);
		
		$data['total_records'] =  $this->Institution_model->get_admissions('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-admissions/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/admissions',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/admissions_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);
		//$this->load->view('admin/institution/admissions');
	}

	/*
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 27-05-2021
    */

    public function edit_admissions()
    {
        $id =  $this->input->post('id');
       
    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong!'
                );
    	// $data['grade_array'] = array(
    	// 	'A+' => 'A+',
    	// 	'B+' => 'B+',
    	// 	'C+' => 'C+',
    	// 	'D+' => 'D+'
    	// );
   
        if(isset($id) && $id != '')
        {        	
        	$get_admission_detail = $this->common_model->select_by_key('aicpe_admission_list',array('id' =>$id));

        	$data['student_data'] = isset($get_admission_detail[0]) && count($get_admission_detail[0]) > 0 ? $get_admission_detail[0] : array();
        	
        	
        	$html =  parent::s_render('admin/institution/edit_admissions_modal',$data,true);
             
             $message = array('type'=>'success',
             	'view'=>$html
         		);
        }
       
        echo json_encode($message);
    }

    /*
	@Description  : save admission list
	@Author       : Varsha wankhede
	@Date         : 27-05-2021
	*/

   public function save_admissions()
	{
		
		$post_data = $this->input->post();  
		$response = array('type'=>'error','msg'=>'Something went wrong! Please try again.');

		$update_array = array();

		if(!empty($this->input->post('id')) && $this->input->post('id') !== '')
		{
			$update_array = array(
				'username' => is_not_empty($post_data['username']) ? $post_data['username'] : '',
				'password' => is_not_empty($post_data['password']) ? $post_data['password'] : '',
				'student_name' => is_not_empty($post_data['name']) ? $post_data['name'] : '',
				'course_duration' => is_not_empty($post_data['course_duration']) ? $post_data['course_duration'] : '',
				'course_fee' => is_not_empty($post_data['course_fee']) ? $post_data['course_fee'] : '',
				'balance_fee' => is_not_empty($post_data['balance_fee']) ? $post_data['balance_fee'] : '',
				
				'admission_date' => isset($post_data['admissiondate']) ? format_date($post_data['admissiondate'],'Y-m-d H:i:s') : '',

			);
			
			$where_data = array(
				'id' => $post_data['id'],						
			); 

			if(count($update_array)>0)
			{
				$this->common_model->update_by_where_array('aicpe_admission_list',$where_data,$update_array);

				$response = array('type'=>'success','msg'=>'Admission data updated successfully.');
			}

			
		}
		
		echo json_encode($response);
	}


	/*
	@Description  :  delete admission list
	@Author       : Varsha wankhede
	@Date         : 18-05-2021
	*/

	public function delete_admissions()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('id');
        
        if($this->Institution_model->delete_admissions($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'Admissions deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }

    /*
    @Description : export admission
    @Author      : Varsha wankhede
    @Input       : 
    @Output      : 
    @Date        : 18-05-2021
	*/
	public function admissions_export()
    {
            
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_admissions('data',$where_data);
        
        $filename  = 'Institutions_aicpe_admissions'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Student Name';
        $header[] = 'Course & Duration';
        $header[] = 'Username';
        $header[] = 'Password';
        $header[] = 'Course Fees';
        $header[] = 'Balance Fees';
        $header[] = 'Admission Date';
        $header[] = 'status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'student_name','-');
                $rows[] = get_value($row,'course_duration','-');
                $rows[] = get_value($row,'username','-');
                $rows[] = get_value($row,'password','-');
                $rows[] = get_value($row,'course_fee','-');          
                $rows[] = get_value($row,'balance_fee','-');
                $rows[] = format_date($row['admission_date']);
                $rows[] =  $row['status'] =='0' ? 'Enable' : 'Disable';
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE admission');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    /*
	@Description  : payments list
	@Author       : varsha Wankhede
	@Date         : 20-05-2021
	*/
    public function payments(){
		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 10);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->get_payments('data',$where_data);
		
		$data['total_records'] =  $this->Institution_model->get_payments('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-payments/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/payments',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/payments_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);
		//$this->load->view('admin/institution/payments');
	}
	
    /*
    @Description : export payments list. 
    @Author      : Varsha wankhede
    @Input       : 
    @Output      : 
    @Date        : 20-05-2021
	*/
	public function payments_export()
    {
            
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_payments('data',$where_data);
        
        $filename  = 'Institutions_aicpe_payments'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Student Id';
        $header[] = 'Student Name';
        $header[] = 'Certificate No.';
        $header[] = 'Course Fees';
        $header[] = 'Paid Fees';
        $header[] = 'Balance Fees';
        $header[] = 'status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'student_id','-');
                $rows[] = get_value($row,'student_name','-');
                $rows[] = isset($row['course_duration']) && $row['course_duration']!=='' ? get_value($row,'course_duration','6 Month') : '6 Months';
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'course_fee','0.00'));
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'paid_fee','0.00'));         
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'balance_fee','0.00'));         
                
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE payments ');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

   	/*
    @Description : update Non AICPE course ata
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 27-06-2021
    */

    public function get_payments_history()
    {
        $id =  $this->input->post('id');

    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong!'
                );
        ////////////

        if(isset($id) && $id != '')
        {

        	$student_data = $this->common_model->select_by_key('aicpe_student',array('id' =>$id));

        	$data['student_data'] = isset($student_data[0]) && count($student_data[0]) > 0 ? $student_data[0] : array();
        	$data['get_payments_history'] = $this->Institution_model->get_payments_history($id);
        	
        	$html =  parent::s_render('admin/institution/payment_history_modal',$data,true);
             
             $message = array('type'=>'success',
             	'html'=>$html
         		);
        }
       
        echo json_encode($message);
    }

	public function add_student(){
		$this->load->view('admin/institution/add_student');
	} 

	/*
	@Description  : Old Student list
	@Author       : Ankita Mandlik
	@Date         : 15-05-2021
	*/

	public function old_students()
	{
		
		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 10);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->get_old_students('data',$where_data);
		
		$data['total_records'] =  $this->Institution_model->get_old_students('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-old-students/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/old_students',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/old_students_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);


		//$this->load->view('admin/institution/old_students');
	}

	/*
    @Description : Delete Old student
    @Author      : Ankita Mandlik
    @Input       : student id
    @Output      : update is_deleted flag
    @Date        : 15-05-2021
	*/

    public function delete_old_student()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('id');
        
        if($this->Institution_model->delete_old_student($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'Old Student deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }

    /*
    @Description : Delete course material
    @Author      : Ankita Mandlik
    @Input       : course id
    @Output      : update is_deleted flag
    @Date        : 09-05-2021
	*/
	public function old_students_export()
    {
            
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_old_students('data',$where_data);
        
        $filename  = 'Institutions_aicpe_old_student'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Student Name';
        $header[] = 'Certificate No.';
        $header[] = 'Mobile';
        $header[] = 'Username';
        $header[] = 'Password';
        $header[] = 'Grade';
        $header[] = 'Exam Date';
        $header[] = 'Certificate Date';
        $header[] = 'Admission Date';
        $header[] = 'status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'student_name','-');
                $rows[] = get_value($row,'certificate_no','-');
                $rows[] = get_value($row,'mobile_no','-');
                $rows[] = get_value($row,'username','-');
                $rows[] = get_value($row,'password','-');
              
                $rows[] =  get_value($row,'grade','-');          
                $rows[] = format_date($row['exam_date']);
                $rows[] = format_date($row['certificate_date']);
                $rows[] = format_date($row['admission_date']);
                $rows[] =  $row['status'] =='0' ? 'Enable' : 'Disable';
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE Old Student');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }
    /*
    @Description : Edit Old Student Data
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 25-05-2021
    */

    public function edit_old_students()
    {
        $id =  $this->input->post('id');

    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong!'
                );
        ////////////

    	$data['grade_array'] = array(
    		'A+' => 'A+',
    		'B+' => 'B+',
    		'C+' => 'C+',
    		'D+' => 'D+',
    	);


        if(isset($id) && $id != '')
        {

        	$student_data = $this->common_model->select_by_key('aicpe_student',array('id' =>$id));

        	$data['student_data'] = isset($student_data[0]) && count($student_data[0]) > 0 ? $student_data[0] : array();
        	//$data['get_old_students_detail'] = $this->Institution_model->edit_old_students($id);
        	//pr($data);
        	$html =  parent::s_render('admin/institution/old_students_edit_modal',$data,true);
             
             $message = array('type'=>'success',
             	'html'=>$html
         		);
        }
       
        echo json_encode($message);
    }

    public function save_old_students()
	{
		
		$post_data = $this->input->post();  
		$response = array('type'=>'error','msg'=>'Something went wrong! Please try again.');

		$update_array = array();

		if(!empty($this->input->post('id')) && $this->input->post('id') !== '')
		{
			$update_array = array(
				'username' => is_not_empty($post_data['username']) ? $post_data['username'] : '',
				'password' => is_not_empty($post_data['password']) ? $post_data['password'] : '',
				'student_name' => is_not_empty($post_data['name']) ? $post_data['name'] : '',
				'mobile_no' => is_not_empty($post_data['mobileno']) ? $post_data['mobileno'] : '',
				'grade' => is_not_empty($post_data['grade']) ? $post_data['grade'] : '',
				'exam_date' => isset($post_data['examdate']) ? format_date($post_data['examdate'],'Y-m-d H:i:s'): '',
				'certificate_date' => isset($post_data['certificatedate']) ? format_date($post_data['certificatedate'],'Y-m-d H:i:s') : '',
				'admission_date' => isset($post_data['admissiondate']) ? format_date($post_data['admissiondate'],'Y-m-d H:i:s') : '',

			);
			
			$where_data = array(
				'id' => $post_data['id'],						
			); 

			if(count($update_array)>0)
			{
				$this->common_model->update_by_where_array('aicpe_student',$where_data,$update_array);

				$response = array('type'=>'success','msg'=>'Student data updated successfully.');
			}

			
		}
		
		echo json_encode($response);
	}



	public function dropout_students()
	{
		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 10);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->get_dropout_students('data',$where_data);
		//pr($this->db->last_query());
		$data['total_records'] =  $this->Institution_model->get_dropout_students('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-dropout-students/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/dropout_students',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/dropout_students_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);
		//$this->load->view('admin/institution/dropout_students');
	}
	/*
    @Description : Delete dropout student
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 18-05-2021
	*/

    public function delete_dropout_students()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('id');
        
        if($this->Institution_model->delete_dropout_students($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'dropout students deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }

    /*
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 26-05-2021
    */

    public function edit_dropout_students()
    {
        $id =  $this->input->post('id');
       
    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong!'
                );
    	$data['grade_array'] = array(
    		'A+' => 'A+',
    		'B+' => 'B+',
    		'C+' => 'C+',
    		'D+' => 'D+'
    	);
   
        if(isset($id) && $id != '')
        {
        	  // pr($id);
        	$student_data = $this->common_model->select_by_key('aicpe_student',array('id' =>$id));

        	$data['student_data'] = isset($student_data[0]) && count($student_data[0]) > 0 ? $student_data[0] : array();
        	$data['get_dropout_students_detail'] = $this->Institution_model->get_student_payment_by_id($id);
        	//pr($data);
        	$html =  parent::s_render('admin/institution/dropout_students_edit_modal',$data,true);
             
             $message = array('type'=>'success',
             	'view'=>$html
         		);
        }
       
        echo json_encode($message);
    }
    public function save_dropout_students()
	{
		
		$post_data = $this->input->post(); 
		//pr($post_data); 
		$response = array('type'=>'error','msg'=>'Something went wrong! Please try again.');

		$update_array = array();

		if(!empty($this->input->post('id')) && $this->input->post('id') !== '')
		{
			$update_array = array(
				'username' => is_not_empty($post_data['username']) ? $post_data['username'] : '',
				'password' => is_not_empty($post_data['password']) ? $post_data['password'] : '',
				'student_name' => is_not_empty($post_data['name']) ? $post_data['name'] : '',
				'mobile_no' => is_not_empty($post_data['mobileno']) ? $post_data['mobileno'] : '',
				'email' => is_not_empty($post_data['email']) ? $post_data['email'] : '',
				'grade' => is_not_empty($post_data['grade']) ? $post_data['grade'] : '',
				'exam_date' => isset($post_data['examdate']) ? format_date($post_data['examdate'],'Y-m-d H:i:s'): '',
				'admission_date' => isset($post_data['admissiondate']) ? format_date($post_data['admissiondate'],'Y-m-d H:i:s') : '',
				'course_fee' => is_not_empty($post_data['course_fee']) ? $post_data['course_fee'] : '',
				'balance_fee' => is_not_empty($post_data['balance_fee']) ? $post_data['balance_fee'] : '',
				'course_duration' => is_not_empty($post_data['course_duration']) ? $post_data['course_duration'] : '',

			);
			
			$where_data = array(
				'id' => $post_data['id'],						
			); 
			//pr($update_array);
			if(count($update_array)>0)
			{
				$this->common_model->update_by_where_array('aicpe_student',$where_data,$update_array);

				$response = array('type'=>'success','msg'=>'Dropout Student data updated successfully.');
			}

			
		}
		
		echo json_encode($response);
	}


    /*
    @Description : Export dropout students
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 18-05-2021
	*/
	public function dropout_students_export()
    {
            
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_dropout_students('data',$where_data);
        
        $filename  = 'Institutions_aicpe_dropout_students'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Student ID';
        $header[] = 'Student Name';
        $header[] = 'Course duration';
        $header[] = 'Username';
        $header[] = 'Password';
        $header[] = 'Email';
        $header[] = 'Mobile';
        $header[] = 'Grade';
        $header[] = 'Exam Date';
        $header[] = 'Course Fee';
        $header[] = 'Balance Fee';
        $header[] = 'Admission Date';
        $header[] = 'status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'student_id','-');
                $rows[] = get_value($row,'student_name','-');
                $rows[] = get_value($row,'course_duration','6 Months');
                $rows[] = get_value($row,'username','-');
                $rows[] = get_value($row,'password','-');
                $rows[] = get_value($row,'Email','-');
                $rows[] = get_value($row,'mobile_no','-');
               	$rows[] = get_value($row,'grade','-');          
                $rows[] = format_date($row['exam_date']);
                $rows[] = currency_symbol_icon().currency_format('0.00');
                $rows[] = currency_symbol_icon().currency_format('0.00');
                $rows[] = format_date($row['admission_date']);
                $rows[] =  $row['status'] =='0' ? 'Enable' : 'Disable';
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE Old Student');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    /*
	@Description  : aicpe world membership list
	@Author       :Varsha Wankhede
	@Date         : 19-05-2021
	*/

    public function aicpe_world_membership(){
		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 10);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->get_aicpe_world_membership('data',$where_data);
		//pr($this->db->last_query());
		$data['total_records'] =  $this->Institution_model->get_aicpe_world_membership('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-aicpe-world-membership/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/aicpe_world_membership',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/aicpe_world_membership_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);

		//$this->load->view('admin/institution/aicpe_world_membership');
	}
	 /*
    @Description : Export world membership
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 19-05-2021
	*/
	public function aicpe_world_membership_export()
    {
            
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_aicpe_world_membership('data',$where_data);
        
        $filename  = 'Institutions_aicpe_world_membership'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Student Name';
        $header[] = 'Email';
        $header[] = 'Mobile no.';
        $header[] = 'Whatsapp no.';
        $header[] = 'Institute Staff';
       
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
                $rows[] = get_value($row,'email','-');
                $rows[] = get_value($row,'mobile_no','-');
               	$rows[] = get_value($row,'whatsapp_no','-');          
               	$rows[] = get_value($row,'assign_staff','-');          
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE world membership');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    /*
    @Description : Delete aicpe world membership
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 19-05-2021
	*/

    public function delete_aicpe_world_membership()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('id');
        
        if($this->Institution_model->delete_aicpe_world_membership($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'dropout students deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }

	public function assignments(){
		$this->load->view('admin/institution/assignments');
	}

	public function all_courses_old(){
		$start_date = $this->input->post('start') ? $this->input->post('start') : ($this->input->get('start') ?  $this->input->get('start') : '');

		$end_date = $this->input->post('end') ? $this->input->post('end') : ($this->input->get('end') ?  $this->input->get('end') : '');
		$where_data = array(
			'start_date' => $start_date,
			'end_date'	 => $end_date,
		);

		$data['data'] = $this->Institution_model->getAllCourseData($where_data);

		$this->load->view('admin/institution/all_courses');
	}

	public function all_courses(){

        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 1);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
              
        $data['data'] =  $this->Institution_model->getAllCourseData('data',$where_data);
        $data['total_records'] =  $this->Institution_model->getAllCourseData('count',$where_data);
       
        // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 1),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/all_courses',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/all_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }


	 public function all_courses_export()
    {
        
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->getAllCourseData('data',$where_data);
        
        $filename  = 'Institutions_cources'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Type';
        $header[] = 'Course Name';
        $header[] = 'Duration';
        $header[] = 'Certifying Authority';
        $header[] = 'AICPE Fees';
        $header[] = 'Course Fees';
        $header[] = 'Status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = $row->crs_code;
                $rows[] = $row->crs_name; 
                $rows[] = $row->crs_duration;
                $rows[] = $row->crs_stream;
                $rows[] = $row->crs_exam_fees;
                $rows[] = $row->crs_marksheet_fees;
                $rows[] = $row->crs_status =='1' ? 'Approved' : 'Unapproved';
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    /*
	@Description  : Assosiate List with courses detail
	@Author       : Ankita Mandlik
	@Date         : 25-04-2021
	*/

	public function associate_courses(){
		//$this->load->view('admin/institution/associate_courses');
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'asc_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
              
        $data['data'] =  $this->Institution_model->get_aicp_associate_courses_data('data',$where_data);
        $data['total_records'] =  $this->Institution_model->get_aicp_associate_courses_data('count',$where_data);
       	//pr($data['data']);
        // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-associate-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/associate_courses',
            'default_sort'      => 'asc_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/associate_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	/*
	@Description  : Assosiate List Export
	@Author       : Ankita Mandlik
	@Date         : 25-04-2021
	*/

	public function associate_courses_export()
    {
        
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_aicp_associate_courses_data('data',$where_data);
        
        $filename  = 'Institutions_associate_courses'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Assosiate Name';
        $header[] = 'Status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'asso_name','-');             
                $rows[] = $row['asso_status'] =='1' ? 'Active' : 'Deactive';
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Associates Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }


    /*
	@Description  : View Assosiate 
	@Input        : Assos Id
	@Author       : Ankita Mandlik
	@Date         : 25-04-2021
	*/

    public function view_assos_course()
    {
    	$asso_id =  $this->input->post('asso_id');

    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Task reminder added successfully.'
                );
        ////////////

        if(isset($asso_id) && $asso_id != '')
        {
        	$data['asso_details'] = $this->common_model->select_by_key('aicp_associates',array('asso_id' => $asso_id));

        	$data['asso_details'] =  isset($data['asso_details']['0']) ? $data['asso_details']['0'] : array();

        	$data['detail'] =  $this->Institution_model->get_aicp_associate_courses_by_id($asso_id);
 			
        	if(count($data['detail']) > 0)
        	{
        	   $html =  parent::s_render('admin/institution/view_associate_courses',$data,true); 

               $message  = array('type'=>'success','html'=> $html);
	        }
	        else
	        {
	            $message = array('type'=>'error','msg'=>'Please select atleast one record');
	        }

	        echo json_encode($message);
        	          
        }
        

    }

    /*
	@Description  : View Assosiate 
	@Input        : Assos Id
	@Author       : Ankita Mandlik
	@Date         : 25-04-2021
	*/

    public function add_assos_course_fees_details()
    {    	
    	$mapping_id =  $this->input->post('mapping_id');

    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong.'
                );

    	if(isset($mapping_id) && $mapping_id !== '')
        {
        	$data = array(
        		"institute_course_fee" => $this->input->post('course_fees'),
        		"is_viva_and_practical" => $this->input->post('viva_and_practical'),
        		"is_marksheets_fees" => $this->input->post('marksheets_fees'),
        	);

        	if($this->Institution_model->update_course_mapping_data($mapping_id,$data))
            {   
                $message = array(
                    'type'   => 'success',
                    'msg'    => "Course Fees Update successfully."
                );

            }
            else
            {
                $message = array(
                    'type'   => 'error',
                    'msg'    => 'Something went wrong! Please try again.'
                );
            }
           
        }
        echo json_encode($message);
        exit;
    }

	public function aicpe_courses()
	{
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'crs_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
              
        $data['data'] =  $this->Institution_model->get_aicpe_courses_data('data',$where_data);
        $data['total_records'] =  $this->Institution_model->get_aicpe_courses_data('count',$where_data);
    
        // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-aicpe-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/aicpe_courses',
            'default_sort'      => 'crs_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/aicpe_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
		//$this->load->view('admin/institution/aicpe_courses');
	}

	public function aicpe_courses_export()
    {
        
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_aicpe_courses_data('data',$where_data);
        
        $filename  = 'Institutions_aicpe_cources'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Code';
        $header[] = 'Course Name';
        $header[] = 'Duration';
        $header[] = 'Viva & Practical';
        $header[] = 'Marksheet required';
        $header[] = 'AICPE Fees(Exam + Marksheet Fees)';
        $header[] = 'Status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = $row->crs_code;
                $rows[] = $row->crs_name; 
                $rows[] = $row->crs_duration;
                $rows[] = $row->is_viva_and_practical =='0' ? 'No' : 'Yes' ;
                $rows[] = $row->crs_no_of_marksheets =='0' ? 'No' : 'Yes' ;
                $total_amt = ($row->crs_exam_fees + $row->crs_marksheet_fees); 
                $rows[] =  currency_symbol_icon().currency_format($total_amt);              
                $rows[] = $row->crs_status =='1' ? 'Approved' : 'Unapproved';
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

	public function non_aicpe_courses()
	{
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'crs_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
              
        $data['data'] =  $this->Institution_model->get_non_aicp_courses_data('data',$where_data);
        $data['total_records'] =  $this->Institution_model->get_non_aicp_courses_data('count',$where_data);
    
        // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-non-aicpe-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/non_aicpe_courses',
            'default_sort'      => 'crs_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/non_aicpe_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
		//$this->load->view('admin/institution/non_aicpe_courses');
	}

	
	/*
    @Description : update Non AICPE course ata
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 27-06-2021
    */

    public function add_non_aicpe_courses()
    {
        $non_id =  $this->input->post('no_id');

    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Task reminder added successfully.'
                );
        ////////////


    	$data['subjects'] = $this->common_model->select_by_key('aicp_subjects',array('sub_status' => '0'));

    	$data['subjects'] = helper_array_column($data['subjects'],'sub_id','sub_title');

        if(isset($non_id) && $non_id != '')
        {
        	$data['non_aicpe_course_details'] = $this->common_model->select_by_key('aicp_non_aicpe_courses',array('no_id' => $non_id));

        	$data['non_aicpe_course_details'] =  isset($data['non_aicpe_course_details']['0']) ? $data['non_aicpe_course_details']['0'] : array();  

        	$data['non_aicpe_subject_topic_details'] = $this->common_model->select_by_key('aicp_non_aicpe_course_subject_mapping',array('no_id' => $non_id));      	
 			
        	if(count($data['non_aicpe_course_details']) > 0)
        	{
        	   $html =  parent::s_render('admin/institution/add_non_aicpe_course_modal',$data,true); 

               $message  = array('type'=>'success','html'=> $html);
	        }
	        else
	        {
	            $message = array('type'=>'error','msg'=>'Please select atleast one record');
	        }
             
        }
        else
        {
        	
        	$html =  parent::s_render('admin/institution/add_non_aicpe_course_modal',$data,true); 

            $message  = array('type'=>'success','html'=> $html);
        }

        echo json_encode($message);
    }

    /*
    @Description : Delete non aicpe course
    @Author      : Ankita Mandlik
    @Input       : course id
    @Output      : update is_deleted flag
    @Date        : 30-04-2021
	*/

    public function delete_non_aicpe_course()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('no_id');
        
        if($this->Institution_model->delete_non_aicep_course($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'Course deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }

    /*
	@Description  : Save Institution Profile
	@Author       : Ankita Mandlik
	@Date         : 30-04-2021
	*/

	public function save_non_aicpe_courses()
	{
		$post_data = $this->input->post();  
		$response = array('type'=>'error','msg'=>'Something went wrong! Please try again.');

		$insert_data = array();

		if(!empty($this->input->post('no_id')) && $this->input->post('no_id') !== '')
		{
			$no_selected_subject = isset($post_data['no_subject']) ? implode(",", $post_data['no_subject']): NULL;
			
			$update_data = array(
				'no_code'                 => !empty($post_data['course_code']) ? $post_data['course_code']:'',
				'no_name'                 => !empty($post_data['course_name']) ? $post_data['course_name']:'',
				'no_duration'             => !empty($post_data['course_duration']) ? $post_data['course_duration']:'',
				'no_course_authority'     => !empty($post_data['course_authority']) ? $post_data['course_authority']:'',
				'no_exam_fees'            => !empty($post_data['exam_fees']) ? $post_data['exam_fees']:'',
				'no_course_fees'          => !empty($post_data['course_fees']) ? $post_data['course_fees'] :'',
				'if_demo_exam'            => !empty($post_data['if_demo_exam']) ? $post_data['if_demo_exam']:'',
				'no_course_links'         => !empty($post_data['course_links']) ? $post_data['course_links']:'',
				'no_course_youtube_links' => !empty($post_data['course_youtube_links']) ? $post_data['course_youtube_links']:'',
				'no_course_note'          => !empty($post_data['course_note']) ? $post_data['course_note']:'',
				'no_course_sample_file'   => !empty($post_data['course_sample_file']) ? $post_data['course_sample_file']:'',
				'no_selected_subject'     => $no_selected_subject,
				'modified_date'           => get_inserted_date_time(),
				'modified_by'             => $this->log_in_user_id
				);

			$where_data = array(
				'no_id' => $post_data['no_id'],						
			); 

			if(count($update_data)>0)
			{
				$this->common_model->update_by_where_array('aicp_non_aicpe_courses',$where_data,$update_data);

				$response = array('type'=>'success','msg'=>'Course update successfully.');
			}

			
		}
		else
		{
			$no_selected_subject = isset($post_data['no_subject']) ? implode(",", $post_data['no_subject']): NULL;
			

			$insert_data = array(
				'no_code'                 => !empty($post_data['course_code']) ? $post_data['course_code']:'',
				'no_name'                 => !empty($post_data['course_name']) ? $post_data['course_name']:'',
				'no_duration'             => !empty($post_data['course_duration']) ? $post_data['course_duration']:'',
				'no_course_authority'     => !empty($post_data['course_authority']) ? $post_data['course_authority']:'',
				'no_exam_fees'            => !empty($post_data['exam_fees']) ? $post_data['exam_fees']:'',
				'no_course_fees'          => !empty($post_data['course_fees']) ? $post_data['course_fees'] :'',
				'if_demo_exam'            => !empty($post_data['if_demo_exam']) ? $post_data['if_demo_exam']:'',
				'no_course_links'         => !empty($post_data['course_links']) ? $post_data['course_links']:'',
				'no_course_youtube_links' => !empty($post_data['course_youtube_links']) ? $post_data['course_youtube_links']:'',
				'no_course_note'          => !empty($post_data['course_note']) ? $post_data['course_note']:'',
				'no_course_sample_file'   => !empty($post_data['course_sample_file']) ? $post_data['course_sample_file']:'',
				'no_selected_subject'     => $no_selected_subject,
				'inserted_date'           => get_inserted_date_time(),
				'inserted_by'             => $this->log_in_user_id
				);

			if(count($insert_data)>0)
			{
				$inserted_id = $this->common_model->insert_all('aicp_non_aicpe_courses',$insert_data);
				
				$response = array('type'=>'success','msg'=>'Course added successfully.');
			}

		}

		echo json_encode($response);
	}

	/*
    @Description : Export Non AICPE course data
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 27-06-2021
    */

	public function non_aicpe_courses_export()
    {
        
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_non_aicp_courses_data('data',$where_data);
        
        $filename  = 'Institutions_non_aicpe_courses'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Code';
        $header[] = 'Course Name';
        $header[] = 'Duration';
        $header[] = 'Certified Authority';
        $header[] = 'Exam Fees';
        $header[] = 'Course Fees';      
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'no_code','-');
                $rows[] = get_value($row,'no_name','-'); 
                $rows[] = get_value($row,'no_duration','-');
                $rows[] = "ATC" ;            
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'no_exam_fees','-'));              
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'no_course_fees','-'));              
                
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Non AICPE Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

	
	public function course_material()
	{
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'crs_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
              
        $data['data'] =  $this->Institution_model->get_non_aicp_courses_data('data',$where_data);
        $data['total_records'] =  $this->Institution_model->get_non_aicp_courses_data('count',$where_data);
    
        // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-non-aicpe-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/non_aicpe_courses',
            'default_sort'      => 'crs_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/non_aicpe_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
		//$this->load->view('admin/institution/course_material');
	}

	
	/*
    @Description : update Non AICPE course ata
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 27-06-2021
    */

    public function add_course_material()
    {
        $id =  $this->input->post('id');

    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong!'
                );
        ////////////


    	$data['subjects'] = $this->common_model->select_by_key('aicp_subjects',array('sub_status' => '0'));

    	$data['subjects'] = helper_array_column($data['subjects'],'sub_id','sub_title');
		
		$data['course'] = $this->common_model->select_by_key('aicp_courses',array('crs_status' => '0'));

    	$data['course'] = helper_array_column($data['aicp_courses'],'crs_id','crs_name');

        if(isset($id) && $id != '')
        {
        	$data['aipce_course_material'] = $this->common_model->select_by_key('aipce_course_material',array('id' => $id));

        	$data['aipce_course_material'] =  isset($data['aipce_course_material']['0']) ? $data['aipce_course_material']['0'] : array();  

        	
        	if(count($data['aipce_course_material']) > 0)
        	{
        	   $html =  parent::s_render('admin/institution/add_course_material_modal',$data,true); 

               $message  = array('type'=>'success','html'=> $html);
	        }
	        else
	        {
	            $message = array('type'=>'error','msg'=>'Please select atleast one record');
	        }
             
        }
        else
        {
        	
        	$html =  parent::s_render('admin/institution/add_non_aicpe_course_modal',$data,true); 

            $message  = array('type'=>'success','html'=> $html);
        }

        echo json_encode($message);
    }

    /*
    @Description : Delete course material
    @Author      : Ankita Mandlik
    @Input       : course id
    @Output      : update is_deleted flag
    @Date        : 09-05-2021
	*/

    public function delete_course_material()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('id');
        
        if($this->Institution_model->delete_course_material($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'Course material deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }

    /*
	@Description  : Save course material
	@Author       : Ankita Mandlik
	@Date         : 09-05-2021
	*/

	public function save_course_material()
	{
		$post_data = $this->input->post();  
		$response = array('type'=>'error','msg'=>'Something went wrong! Please try again.');

		$insert_data = array();

		if(!empty($this->input->post('course_id')) && $this->input->post('subject_id') !== '')
		{			
			$insert_data[] = array(
				'course_id'     => !empty($post_data['course_id']) ? $post_data['course_id']:'',
				'subject_id'    => !empty($post_data['subject_id']) ? $post_data['subject_id']:'',
				'course_data'   => !empty($post_data['course_data']) ? $post_data['course_data']:'',
				'inserted_date' => get_inserted_date_time(),
				'inserted_by'   => $this->log_in_user_id
				);

			if(count($insert_data)>0)
			{
				$inserted_id = $this->common_model->insert_on_duplicate_update_batch('aicp_non_aicpe_courses',$insert_data);
				
				$response = array('type'=>'success','msg'=>'Course material added successfully.');
			}

		}

		echo json_encode($response);
	}

	/*
    @Description : Export course material data
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 09-05-2021
    */

	public function course_material_export()
    {
        
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_non_aicp_courses_data('data',$where_data);
        
        $filename  = 'Institutions_non_aicpe_courses'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Code';
        $header[] = 'Course Name';
        $header[] = 'Duration';
        $header[] = 'Certified Authority';
        $header[] = 'Exam Fees';
        $header[] = 'Course Fees';      
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'no_code','-');
                $rows[] = get_value($row,'no_name','-'); 
                $rows[] = get_value($row,'no_duration','-');
                $rows[] = "ATC" ;            
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'no_exam_fees','-'));              
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'no_course_fees','-'));              
                
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Non AICPE Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

	public function suggest_course(){
		$this->load->view('admin/institution/suggest_course');
	}

	public function employers(){
		$this->load->view('admin/institution/employers');
	}

	public function library_books_categories(){
		$this->load->view('admin/institution/library_books_categories');
	}

	public function library_books(){
		$this->load->view('admin/institution/library_books');
	}

	public function library_books_issued(){
		$this->load->view('admin/institution/library_books_issued');
	}

	public function library_books_return(){
		$this->load->view('admin/institution/library_books_return');
	}

	public function library_books_fine(){
		$this->load->view('admin/institution/library_books_fine');
	}

	public function library_e_books(){
		$this->load->view('admin/institution/library_e_books');
	}

	public function staff_list(){
		$this->load->view('admin/institution/staff_management');
	}

	public function staff_incentives(){
		$this->load->view('admin/institution/staff_incentives');
	}

	public function staff_tasks(){
		$this->load->view('admin/institution/staff_tasks');
	}

	public function wallet(){
		$this->load->view('admin/institution/wallet');
	}

	public function sms_management(){
		$this->load->view('admin/institution/sms_management');
	}

	public function marketing_material(){
		$this->load->view('admin/institution/marketing_material');
	}

	public function birthday_and_anniversary(){
		$this->load->view('admin/institution/birthday_and_anniversary');
	}

	/*
    @Description : Get listing data of question and answer bank
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 01-05-2021
    */
	public function question_and_answer_bank()
	{		
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');
       
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'qa_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],            
        ); 
        $data['subjects'] = $this->Institution_model->get_subjects();
        $data['data'] = $this->Institution_model->question_bank('data',$where_data);
       
        $data['total_records'] =  $this->Institution_model->question_bank('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-question-bank/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/question_and_answer_bank',
            'default_sort'      => 'qa_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/question_and_answer_bank_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
		//$this->load->view('admin/institution/question_and_answer_bank');
	}

	/*
    @Description : Get  data of question and answer bank by id
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 01-05-2021
    */

	public function get_question_bank(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        $data['data'] ="";
        $data['subjects'] =$this->Institution_model->get_subjects();
        if($id!='' && $data['type']=='edit')
        {
            $data['data'] = $this->Institution_model->get_question_bank_byId($id);
        }
     
      
        $this->load->view('admin/institution/add_question_bank',$data);
    }
	
	/*
    @Description : Delete data of question and answer bank by id
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 01-05-2021
    */
    
    public function delete_question_and_answer_bank(){
        $id = $this->input->post('id');
        $data = $this->Institution_model->delete_question_bank($id);
        echo json_encode($data);
    }

	/*
    @Description : Add data of question and answer bank by id
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 01-05-2021
    */

    public function add_question_and_answer_bank(){
        
            $img_1 = $img_2 = $img_3 = $img_4 = $que_img="";
            if(!empty($_FILES['que_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('que_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $que_img  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_1_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_1_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $img_1  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_2_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_2_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $img_2  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_3_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_3_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }	
                        else
                        {
                            $img_3  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_4_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_4_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $img_4  = $this->upload->data('file_name');
                        }
                }

                $result = $this->Institution_model->add_question($img_1,$img_2,$img_3,$img_4,$que_img);
                if($result)
                {
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Question is added successfully.'
                    );

                    echo json_encode($message);exit;
                }
                else
                {
                    $message = array(
                        'type' => 'error',
                        'msg'  => 'Something went wrong! Please try again.'
                    );
                    echo json_encode($message);exit;
                }
            
    }
    
	/*
    @Description : Edit data of question and answer bank by id
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 01-05-2021
    */
    
    public function edit_question_bank(){
       
            $img_1 = $img_2 = $img_3 = $img_4 = $que_img="";
            if(!empty($_FILES['que_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('que_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $que_img  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_1_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_1_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $img_1  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_2_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_2_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $img_2  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_3_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_3_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $img_3  = $this->upload->data('file_name');
                        }
                }
                if(!empty($_FILES['option_4_img']['name'])){
                    
                    $config['upload_path']      = "uploads/question_bank";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('option_4_img'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $img_4  = $this->upload->data('file_name');
                        }
                }

                $result = $this->Institution_model->edit_question($img_1,$img_2,$img_3,$img_4,$que_img);
                if($result)
                {
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Question is updated successfully.'
                    );

                    echo json_encode($message);exit;
                }
                else
                {
                    $message = array(
                        'type' => 'error',
                        'msg'  => 'Something went wrong! Please try again.'
                    );
                    echo json_encode($message);exit;
                }
            
    }


	/*
    @Description : Export data of question and answer bank 
    @Author      : Ankita Mandlik
    @Input       : 
    @Output      : 
    @Date        : 01-05-2021
    */
    
    public function question_and_answer_bank_export()
    {
        
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
       $subjects = $this->Institution_model->get_subjects();
        
        $report_list = $this->Institution_model->question_bank('data',$where_data);
        
        $filename  = 'Institutions_question_and_answer_bank'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Subject Name';
        $header[] = 'Question';
        $header[] = 'Answer';
        $header[] = 'Status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                $rows[] = get_value($row,'sub_title');
                $rows[] = get_value($row,'qa_question');

                if($row['qa_correct_option']==1){
                    $rows[]= get_value($row,'qa_option_1'); 
                  
                }else if($row['qa_correct_option']==2){
                    $rows[]= get_value($row,'qa_option_2'); 
                   
                }else if($row['qa_correct_option']==3){
                    $rows[]= get_value($row,'qa_option_3'); 
                   
                }else if($row['qa_correct_option']==4){
                    $rows[]= get_value($row,'qa_option_4'); 
                   
                }else{
                	$row = '';
                }
                            
                $rows[] = $row['qa_status'] =='1' ? 'Active' : 'Inactive';
              
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Question And Answer Bank');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

	public function role_management(){
		$this->load->view('admin/institution/role_management');
	}
	/*
	@Description  : exam status 
	@Author       : Varsha wankhede
	@Date         : 24-05-2021
	*/
	
	public function exam_status(){
		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 10);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->get_exam_status('data',$where_data);
		//pr($this->db->last_query());
		$data['total_records'] =  $this->Institution_model->get_exam_status('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-exam-status/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/exam_status',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/exam_status_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);

		//$this->load->view('admin/institution/exam_status');
	}
	/*
	@Description  : delete exam status
	@Author       : Varsha wankhede
	@Date         : 24-05-2021
	*/

	public function delete_exam_status()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('id');
       
        if($this->Institution_model->delete_exam_status($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'Exam Status deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }
    /*
	@Description  : save exam status
	@Author       : Varsha wankhede
	@Date         : 28-05-2021
	*/

   public function save_exam_status()
	{
		
		$post_data = $this->input->post();
		
		$response = array('type'=>'error','msg'=>'Something went wrong! Please try again.');

		$update_array = array();
		$update_student_array = array();

		if(!empty($this->input->post('id')) && $this->input->post('id') !== '')
		{
			$update_array = array(

				'available_exam_mode' => is_not_empty($post_data['available_exam_mode']) ? $post_data['available_exam_mode'] : '',
				

			);
			
			$where_data = array(
				'id' => $post_data['id'],						
			); 


			$update_student_array = array(
				'username' => is_not_empty($post_data['username']) ? $post_data['username'] : '',
				'password' => is_not_empty($post_data['password']) ? $post_data['password'] : '',
				'student_name' => is_not_empty($post_data['name']) ? $post_data['name'] : '',				
				'course_duration' => is_not_empty($post_data['course_duration']) ? $post_data['course_duration'] : '',
				'course_fee' => is_not_empty($post_data['course_fee']) ? $post_data['course_fee'] : '',
				'balance_fee' => is_not_empty($post_data['balance_fee']) ? $post_data['balance_fee'] : '',
			);

			$where_data_student = array(
				'id' => $post_data['student_id'],						
			);


			if(count($update_array)>0)
			{
				$this->common_model->update_by_where_array('aicpe_exam_status',$where_data,$update_array);

				$response = array('type'=>'success','msg'=>'Exam status data updated successfully.');
			}

			if(count($update_student_array)>0)
			{
				$this->common_model->update_by_where_array('aicpe_student',$where_data_student,$update_student_array);

				$response = array('type'=>'success','msg'=>'Exam status data updated successfully.');
			}

			
		}
		
		echo json_encode($response);
	}



	/*
    @Author      : Varsha Wankhede
    @Input       : 
    @Output      : 
    @Date        : 27-05-2021
    */

    public function edit_exam_status()
    {
        $id =  $this->input->post('id');
       
    	$message = array(
                    'type' => 'error',
                    'msg'  => 'Something went wrong!'
                );
   
        if(isset($id) && $id != '')
        {        	
        	$data['get_exam_status_detail'] = $this->Institution_model->get_exam_status_detail($id);

        	$html =  parent::s_render('admin/institution/edit_exam_status_modal',$data,true);
             
             $message = array('type'=>'success',
             	'view'=>$html
         		);
        }
       
        echo json_encode($message);
    }

    public function exam_status_export()
    {        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_exam_status('data',$where_data);
     	 
        $filename  = 'exam_status_export'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Student Name';
        $header[] = 'Student ID';
        $header[] = 'Course & Duration';
        $header[] = 'Username';
        $header[] = 'Password';
        $header[] = 'Course Fees';
        $header[] = 'Balance Fees';
        $header[] = 'Available Exam Mode';
        $header[] = 'Status';
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                $rows[] = get_value($row,'student_name','-');
                $rows[] = get_value($row,'student_id','-');
                $rows[] = isset($row['course_duration']) && $row['course_duration']!=='' ? get_value($row,'course_duration','6 Month') : '6 Months';
                $rows[] = get_value($row,'username','-');
                $rows[] = get_value($row,'password','-');
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'course_fee','0.00'));         
                $rows[] = currency_symbol_icon().currency_format(get_value($row,'balance_fee','0.00'));  
                $rows[] = get_value($row,'available_exam_mode','-'); 
                $rows[] = get_value($row,'status','-'); 
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE Exam Status');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }
    /*
	@Description  : list of hall tickets
	@Author       : Varsha wankhede
	@Date         : 25-05-2021
	*/
	public function hall_tickets(){
		$data["per_page_option"] = $this->per_page_option;
		$data["per_page"]        = $this->get_page_vars('per_page', 10);
		$data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']          = $this->get_request_params('search','');
		$data['start_date']      = $this->get_request_params('start_date','');
		$data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
			"per_page"       => $data["per_page"],
			"page"           => $this->get_page_vars('page', '', $this->page_segment),
			"search"         => $data['search'],       
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],         
        ); 
	
		$data['data'] = $this->Institution_model->get_hall_tickets('data',$where_data);
		//pr($this->db->last_query());
		$data['total_records'] =  $this->Institution_model->get_hall_tickets('count',$where_data);
		
		 // Set page configs
        $page_config = array(
            'paging_url'        => 'institutions-hall-tickets/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/institution/hall_tickets',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/institution/hall_tickets_ajax',
            'data'              => $data
        );

        $this->set_pagination($page_config);

		//$this->load->view('admin/institution/hall_tickets');
	}
	public function hall_tickets_export()
    {

        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Institution_model->get_hall_tickets('data',$where_data);
     	// pr($this->db->last_query());
        $filename  = 'hall_tickets_export'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Name';
        $header[] = 'Student Name';
        $header[] = 'Exam Date';
        $header[] = 'Center Code';
        $header[] = 'Center Name';
       
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
            	//pr($row);
                $rows   = array();
                $rows[] = get_value($row,'course_name','-');
                $rows[] = get_value($row,'student_name','-');
                $rows[] = get_value($row,'exam_date','-');
                $rows[] = get_value($row,'center_code','-');
                $rows[] = get_value($row,'center_name','-');
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE Hall Ticket');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }
    /*
	@Description  :delete hall tickets
	@Author       : Varsha wankhede
	@Date         : 25-05-2021
	*/

	public function delete_hall_tickets()
    {  
        $user_id          = $this->log_in_user_id;
        $id               = $this->input->post('id');
       
        if($this->Institution_model->delete_hall_tickets($id,$user_id))
        {
            $message = array(
                'type' => 'success',
                'msg'  => 'Hall Tickets deleted successfully'
            );
        }
        else
        {
            $message = array(
                'type' => 'error',
                'msg'  => 'Something Went Wrong!'
            );
        }
        echo json_encode($message);
        exit;
    }

	public function secrete_codes(){
		$this->load->view('admin/institution/secrete_codes');
	}

	public function paper_based_exam(){
		$this->load->view('admin/institution/paper_based_exam');
	}

	public function offline_exam(){
		$this->load->view('admin/institution/offline_exam');
	}

	public function bulk_registration(){
		$this->load->view('admin/institution/bulk_registration');
	}

	public function certificates(){
		$this->load->view('admin/institution/certificates');
	}

	public function participation_certificates(){
		$this->load->view('admin/institution/participation_certificates');
	}
	 /*
    @Description  : Export Out of stock with unshipped orders
    @Author       : Bhavesh Chaudhari
    @Input        : 
    @Output       :
    @Date         : 25-05-2020
    */
    public function export_enquiry()
    {
    	
		$data["per_page"]   = $this->get_page_vars('per_page', 6);
		$data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
		$data['search']     = $this->get_request_params('search','');
		$data['start_date'] = $this->get_request_params('start_date','');
		$data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
			"sort_by"        => $this->get_page_vars('sort_by', 'id'),
			"sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
			"search"         => $data['search'],           
			"start_date"     => $data['start_date'],           
			"end_date"       => $data['end_date'],           
        ); 
	
		$report_list = $this->Institution_model->getAllData('data',$where_data);
		
        $filename  = 'Enquiry'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Student Name';
        $header[] = 'Course Of Interest';
        $header[] = 'Email';  
        $header[] = 'Mobile 1';  
        $header[] = 'Whats app No';    
        $header[] = 'Institute Staff';    
        $header[] = 'Date of Enquiry';   
        $header[] = 'Institute Staff';  
        $header[] = 'Date of Enquiry';  
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                
                $rows[] = ucwords($row['stud_firstName']." ".$row['stud_lastName']);
                $rows[] = ucwords($row['course_of_interest']);
                $rows[] = $row['email'];
                $rows[] = $row['mobile_1']; 
                $rows[] = $row['whatsapp_no'];
                $rows[] = "XYZ ABC ";
                $rows[] = date('d-m-y',strtotime($row['date_of_enquiry']));
                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Enquiry');

        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    /*
    @Description  : zipped Question bank file and download
    @Author       : Ankita Mandlik
    @Input        : question bank id
    @Output       : 
    @Date         : 06-05-2021
    */

    public function download_question_bank_files()
    {
        $qa_id = $this->input->post('id');
        $data['question_bank'] = $this->common_model->select_by_key('aicp_question_bank',array('qa_id'=>$qa_id));
        foreach ($data['question_bank']  as $key => $value) 
        {
        	$data['question_bank_file'][] = $value['qa_que_img']; 
        	$data['question_bank_file'][] = $value['qa_option_1_img']; 
        	$data['question_bank_file'][] = $value['qa_option_2_img']; 
        	$data['question_bank_file'][] = $value['qa_option_3_img']; 
        	$data['question_bank_file'][] = $value['qa_option_4_img']; 
        }
		
        $file_name = '';
        if(count($data['question_bank']) >0)
        {
            $zip_file= time()."question_bank.zip";
            $file_name = $this->ZIP_FILE_PATH.$zip_file;         

            $zip = new ZipArchive();

            if ($zip->open($file_name, ZipArchive::CREATE) !== TRUE)
            {
                $file_name = "error";
            }

            foreach($data['question_bank_file'] as $key => $file) 
            {
                //  $stat = $zip->statIndex( $key ); 
            	if($file !=='')
            	{
                	$zip->addFromString($file,file_get_contents($this->ZIP_FILE_PATH.$file));
            	}
                
            }

            $zip->close();
                //  header("Content-Type: application/zip");
                //  header("Content-Transfer-Encoding: Binary");
            $data['zip'] = $zip;
            $data['zip_path'] = base_url().$this->ZIP_FILE_PATH. $zip_file;
            echo   $data['zip_path'] ;
            exit;
        }   
        else
        {
            $message = array(
                'type'   => 'error',
                'msg'    => 'Something went wrong! Please try again.',
                'url'    => ''
            );
        }
        echo json_encode($message);
        exit;
    }



	/*
	@Description	: Function to get custom pagination from CI Pagination library
	@Author			: Ankita Mandlik
	@Input			: Pagination Variables
	@Output			: Pagination HTML
	@Date			: 01-10-2016
	*/
	
	public function get_pagination($base_url = '', $suffix = '', $total_rows = 0, $uri_segment = 3, $per_page = 0, $num_links = 2,$page_query_string=FALSE)
	{
		$config['uri_segment']        = $uri_segment;
		
		$config['base_url']           = $base_url;
		
		$config['suffix']             = $suffix;
		
		$config['per_page']           = $per_page;
		
		$config['num_links']          = $num_links;
		
		$config['total_rows']         = $total_rows;
		
		$config['page_query_string']  = $page_query_string;

		if($page_query_string)
		$config['query_string_segment']  = "page";

		
		$config['anchor_class']       = 'paginate_button';
		
		$config['first_link_class']   = 'first paginate_button';
		
		$config['prev_link_class']    = 'previous paginate_button';
		
		$config['next_link_class']    = 'next paginate_button';
		
		$config['last_link_class']    = 'last paginate_button';
		
		$config['active_link_class']  = 'paginate_active paginate_button';
		
		$config['disable_link_class'] = 'paginate_button paginate_button_disabled disabled';
		
		$config['first_tag_open']     = '<li>';
		
		$config['first_tag_close']    = '</li>';
		
		$config['num_tag_open']       = '<li>';
		
		$config['num_tag_close']      = '</li>';
		
		$config['next_tag_open']      = '<li>';
		
		$config['next_tag_close']     = '</li>';
		
		$config['prev_tag_open']      = '<li>';
		
		$config['prev_tag_close']     = '</li>';
		
		$config['last_tag_open']      = '<li>';
		
		$config['last_tag_close']     = '</li>';
		
		$config['cur_tag_open']       = '<li class="active">';
		
		$config['cur_tag_close']      = '</li>';
		
		$config['full_tag_open']      = '<ul class="pagination">';
		
		$config['full_tag_close']     = '</ul>';


		$this->load->library('Pagination_Custom');
		
		$this->pagination_custom->initialize($config);
		
		return $this->pagination_custom->create_links();
	}

	
}