<?php
class Admin extends MY_Controller{
	
	function __construct()
    {
        parent::__construct();
		$this->page_segment = 2;
        $this->per_page = 3;
        $this->per_page_option = array(100=>100,200=>200, 500=>500, 1000=>1000); 
       // $this->load->library('PHPExcel');
        $this->load->helper('common_helper');      
    }
	
	public function index(){

		$this->load->view('admin/super-admin/dashboard');
	}

	public function upload_dropzone_file()
	{
		$upload_images_array = array();
		$this->load->library('upload');
		$error_msg =''; $p_status = true;
		if(!empty($_FILES['file']['name']))
		{
			$filesCount = count($_FILES['file']['name']);
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
	
/*---------------------------------institutions remarks code start here-----------------*/
    public function institutions_remarks(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'ir_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['data'] = $this->Admin_model->get_inst_remarks_all('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_inst_remarks_all('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-institutions-remarks/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/institutions_remarks',
            'default_sort'      => 'ir_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/institutions_remarks_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function add_institutions_remarks(){
       
            $res = $this->Admin_model->add_institutions_remarks();
            echo json_encode($res);
    } 

    public function get_institutions_remarks(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['institutions'] = $this->Admin_model->get_all_institutions();
            $data['remarks'] = $this->Admin_model->get_institutions_remarks();

            parent::s_render('admin/super-admin/add_institution_remark',$data);
            
        }
    }

    public function delete_institutions_remarks(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_institutions_remarks($id);
        echo json_encode($data);
    }

/*---------------------------------institutions remarks code ends here-----------------*/
/*------------------institutions role management code start here--------------------*/
	public function add_role_institute(){
		$response = $this->Admin_model->add_role_institute();
		echo json_encode($response);
	} 

	public function get_role_institute(){
		$response = $this->Admin_model->get_role_institute();
		echo json_encode($response);
	}

	public function institution_role_management(){
		$data['institutions'] = $this->Admin_model->get_all_institutions();
		$this->load->view('admin/super-admin/institution_role_management',$data);
	}
/*------------------institutions role management code ends here--------------------*/

/*-------------------------------------e-books code starts here----------------*/
	public function e_books(){

		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
        	"sort_by"        => $this->get_page_vars('sort_by', 'eb_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
    
        $data['categories'] = $this->Admin_model->get_all_book_categories();
        $data['data'] = $this->Admin_model->get_all_ebooks('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_all_ebooks('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-e-books/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/e_books',
            'default_sort'      => 'eb_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/e_books_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	public function add_e_books(){
       
       $uploadedImage = "";
       if(!empty($_FILES['book_pdf']['name'])){
                
                $config['upload_path']      = "uploads/ebooks/";
                $config['allowed_types']    = "gif|jpg|png|jpeg|pdf|doc|docx";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('book_pdf'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $uploadedImage  = $this->upload->data('file_name');
                    }
            }
            $res = $this->Admin_model->add_e_book($uploadedImage);
            echo json_encode($res);
            
    } 

    public function get_e_books(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['categories'] = $this->Admin_model->get_all_book_categories();
            $data['e_books'] = $this->Admin_model->get_e_book_byID();

            parent::s_render('admin/super-admin/add_e_book',$data);
            
        }
    }

    public function delete_e_books(){
       $id = $this->input->post('id');
         $data = $this->Admin_model->delete_e_book_byId($id);
            echo json_encode($data);
    }

    /*-------------------------------------e-books code ends here----------------*/

	public function employers(){

		$this->load->view('admin/super-admin/employers');
	}

	public function employers_jobpost(){

		$this->load->view('admin/super-admin/employer_jobpost');
	}
 /*-------------------------------------subjects code starts here----------------*/
	public function subjects(){

		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
        	"sort_by"        => $this->get_page_vars('sort_by', 'sub_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
    
        $data['subject_levels'] = $this->Admin_model->get_all_subjects_level();
        $data['data'] = $this->Admin_model->get_all_subjects('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_all_subjects('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-subjects/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/subjects',
            'default_sort'      => 'sub_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/subjects_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	public function get_subject(){
		$data['type'] = $this->input->post('type');
		$data['subjects'] = "";
        $data['subject_levels'] = $this->Admin_model->get_all_subjects_level();
		if($this->input->post('type')=='edit' && $this->input->post('id')){ 
           
            $data['subjects'] = $this->Admin_model->get_subject_byID();
		}
		$this->load->view('admin/super-admin/add_subject',$data);
		//echo json_encode($data);
        //parent::s_render('admin/super-admin/add_subject',$data);
    }
	public function add_subject(){

		$data = [];
   
      $count = count($_FILES['sub_notes']['name']);
    
      for($i=0;$i<$count;$i++){
    
        if(!empty($_FILES['sub_notes']['name'][$i])){
    
          $_FILES['file']['name'] = $_FILES['sub_notes']['name'][$i];
          $_FILES['file']['type'] = $_FILES['sub_notes']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['sub_notes']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['sub_notes']['error'][$i];
          $_FILES['file']['size'] = $_FILES['sub_notes']['size'][$i];
  
          $config['upload_path'] = 'uploads/subjects/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
          $config['max_size'] = '5000';
          $config['encrypt_name']     =  true;
          $config['overwrite']        =  TRUE;
          $config['file_name'] = $_FILES['sub_notes']['name'][$i];
   
          $this->load->library('upload',$config); 
    		$this->upload->initialize($config);
          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
   
            $data[] = $filename;
          }else{
          	 $error  = array('error'  => $this->upload->display_errors());
                       // print_r($error);
          }
        }
    } 
    if($count>0){
    	$new_data = json_encode($data);
    }else{
    	$new_data="";
    }
   		
        $res = $this->Admin_model->add_subject($new_data);
        echo json_encode($res);
    }

    public function delete_subject(){
       $id = $this->input->post('new_id');
         $data = $this->Admin_model->delete_subject($id);
            echo json_encode($data);
    }

    public function export_subject(){
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
    
        $report_list = $this->Admin_model->get_all_subjects('data',$where_data);
        
        $filename  = 'Subjects'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Subject Code';
        $header[] = 'Subject Title';
        $header[] = 'Subject Level';
        $header[] = 'Eligibility';
        $header[] = 'Description';
        $header[] = 'Prepared By';
        $header[] = 'Notes Remarks';
        $header[] = 'Links';
        $header[] = 'Links Remarks';
        $header[] = 'Youtube Links';
        $header[] = 'Youtube Links Remarks';
        $header[] = 'Publish date';
        $header[] = 'Status';  
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                $status="";
                if($row->sub_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = $row->sub_code;
                $rows[] = ucwords($row->sub_title); 
                $rows[] = ucwords($row->sl_title);
                $rows[] = ucfirst($row->sub_eligibility);
                $rows[] =   ucfirst($row->sub_description);
                $rows[] = ucfirst($row->sub_preparedBy);
                $rows[] = ucfirst($row->sub_notes_remarks);
                $rows[] = $row->sub_links;
                $rows[] = ucfirst($row->sub_links_remarks);
                $rows[] = $row->sub_youtube_links;
                $rows[] = ucfirst($row->sub_youtube_links_remarks);
                $rows[] = date('d-m-Y',strtotime($row->sub_created_date));
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Subjects');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

/*-------------------------------------subjects code ends here----------------*/
/*-------------------------------------course types code starts here----------------*/
	public function course_types(){
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'ct_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->course_types('data',$where_data);
        $data['total_records'] =  $this->Admin_model->course_types('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-course-stream/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/course_types',
            'default_sort'      => 'ct_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/course_types_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	public function add_course_type(){
        $res = $this->Admin_model->add_course_type();
        echo json_encode($res);
    } 

    public function get_course_type(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['course_type'] = $this->Admin_model->get_course_type();
            parent::s_render('admin/super-admin/add_course_type',$data);
        }
    }

    public function delete_course_type(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_course_type($id);
        echo json_encode($data);
    }
/*-------------------------------------course types ends here----------------*/
/*-------------------------------------aicpe courses starts here----------------*/

	public function aicpe_courses(){
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
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['subjects'] = $this->Admin_model->get_all_subjects_for_courses();
        $data['streams'] = $this->Admin_model->get_all_stream();
        $data['data'] = $this->Admin_model->aicpe_courses('data',$where_data);
        $data['total_records'] =  $this->Admin_model->aicpe_courses('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-aicpe-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/aicpe_courses',
            'default_sort'      => 'crs_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/aicpe_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	public function add_aicpe_courses(){
		$course_image = ""; $marketing_image="";
       	if(!empty($_FILES['crs_image']['name'])){
                
                $config['upload_path']      = "uploads/courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $course_image  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['crs_marketing_image']['name'])){
                
                $config['upload_path']      = "uploads/courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_marketing_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $marketing_image  = $this->upload->data('file_name');
                    }
            }

            $subs = $this->input->post('subjects');
            $tops = $this->input->post('topics');
            if(count($subs)>0 && count($tops)>0){
                $new_data = json_encode(array_combine($subs, $tops));
            }else{
                $new_data = "";
            }
            

        $res = $this->Admin_model->add_aicpe_course($course_image,$marketing_image,$new_data);

        if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'AICPE Course added successfully.'
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

    public function edit_aicpe_courses(){
        $course_image = ""; $marketing_image="";
        if(!empty($_FILES['crs_image']['name'])){
                
                $config['upload_path']      = "uploads/courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $course_image  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['crs_marketing_image']['name'])){
                
                $config['upload_path']      = "uploads/courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_marketing_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $marketing_image  = $this->upload->data('file_name');
                    }
            }

            $subs = $this->input->post('subjects');
            $tops = $this->input->post('topics');
             if(count($subs)>0 && count($tops)>0){
                $new_data = json_encode(array_combine($subs, $tops));
            }else{
                $new_data = "";
            }

        $res = $this->Admin_model->edit_aicpe_courses($course_image,$marketing_image,$new_data);

        if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'AICPE Course updated successfully.'
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

	public function get_aicpe_courses(){
		$id = $this->input->post('id');
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['subjects'] = $this->Admin_model->get_all_subjects_for_courses();
        $data['streams'] = $this->Admin_model->get_all_stream();
		 if($id!=''){
		 	$data['id'] = $this->input->post('id');
            $data['data'] = $this->Admin_model->get_aicpe_course($id);
            
        }else{
            $data['id'] = "";
            $data['data'] = "";
        }
        $this->load->view('admin/super-admin/add_aicpe_course',$data);
	}

    public function export_aicpe_courses(){
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'crs_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Admin_model->aicpe_courses('data',$where_data);
        
        $filename  = 'AICPE_Courses'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Code';
        $header[] = 'Course Name';
        $header[] = 'Course Stream';
        $header[] = 'Course Duration';
        $header[] = 'Awards '; 
        $header[] = 'Eligibility';     
        $header[] = 'Syllabus';    
        $header[] = 'Pattern';   
        $header[] = 'No. Of Semester';  
        $header[] = 'No. Of Marksheet';  
        $header[] = 'Demo Exam Count';  
        $header[] = 'Exam Fees';  
        $header[] = 'Marksheet Fees';  
        $header[] = 'Subjects';  
        $header[] = 'Publish Date';  
        $header[] = 'Status';  
        
        $row_data = array();
        $subjects = $this->Admin_model->get_all_subjects_for_courses();
        $sub = "";
        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                if($row->crs_subjects_weightage!=""){
                    $subject_1 = array_keys(json_decode($row->crs_subjects_weightage, true)); 
                    if($subjects!=""){
                        foreach ($subjects as $subs) { 
                            if(in_array($subs->sub_id, $subject_1)){ echo  $sub .= $sub.", ".$subs->sub_title; }
                        }
                    }
                } 
                  
                $pattern = $status="";
                if($row->crs_pattern==0){  
                    $pattern = "Semester"; }else{  $pattern = "Yearly"; }
               if($row->crs_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = $row->crs_code;
                $rows[] = ucwords($row->crs_name);
                $rows[] = ucwords($row->ct_title); 
                $rows[] = $row->crs_duration;
                $rows[] = $row->crs_awards;
                $rows[] = $row->crs_eligibility;
                $rows[] = $row->crs_syllabus;
                $rows[] = $pattern ;
                $rows[] = $row->crs_no_of_semester;
                $rows[] = $row->crs_no_of_marksheets;
                $rows[] = $row->crs_demo_exam_count;
                $rows[] = $row->crs_exam_fees;
                $rows[] = $row->crs_marksheet_fees;
                $rows[] = $sub;
                $rows[] = date('d-m-Y',strtotime($row->crs_publish_date));
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE_Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }
/*-------------------------------------aicpe courses ends here-----------------------*/
/*-------------------------------------non aicpe courses code starts here----------------*/
	
    public function non_aicpe_courses(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'no_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['data'] = $this->Admin_model->non_aicpe_courses('data',$where_data);
        $data['total_records'] =  $this->Admin_model->non_aicpe_courses('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-non-aicpe-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/non_aicpe_courses',
            'default_sort'      => 'no_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/non_aicpe_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }

    public function delete_non_aicpe_courses(){
        $id = $this->input->post('id');
        $data = $this->Admin_model->delete_non_aicpe_courses($id);
        echo json_encode($data);
   }

   public function export_non_aicpe_courses(){
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'no_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Admin_model->non_aicpe_courses('data',$where_data);
        $associates = $this->Admin_model->get_all_associates();
        $filename  = 'Non_AICPE_Courses'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Code';
        $header[] = 'Course Name';
        $header[] = 'Course Duration';
        $header[] = 'Institution Name';
        $header[] = 'Publish Date';  
        $header[] = 'Status';  
        
        $row_data = array();
        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                 $status="";
                 if($row->no_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = $row->no_code;
                $rows[] = ucwords($row->no_name);
                $rows[] = ucwords($row->inst_name); 
                $rows[] = $row->no_duration;
                $rows[] = date('d-m-Y',strtotime($row->no_created_date));
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Non_AICPE_Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    public function approve_non_aicpe_courses(){
        $resp = $this->Admin_model->approve_non_aicpe_courses();
        echo json_encode($resp);
    }
/*-------------------------------------non aicpe courses code ends here----------------*/
/*-------------------------------------aicpe associate courses code start here----------------*/
	public function associate_courses(){
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
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['subjects'] = $this->Admin_model->get_all_subjects_for_courses();
        $data['streams'] = $this->Admin_model->get_all_stream();
        $data['associates'] = $this->Admin_model->get_all_associates();
        $data['data'] = $this->Admin_model->associate_courses('data',$where_data);
        $data['total_records'] =  $this->Admin_model->associate_courses('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-associate-courses/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/associate_courses',
            'default_sort'      => 'asc_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/associate_courses_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }

    public function add_associate_courses(){
        $course_image = ""; $marketing_image="";
        if(!empty($_FILES['crs_image']['name'])){
                
                $config['upload_path']      = "uploads/associate_courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $course_image  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['crs_marketing_image']['name'])){
                
                $config['upload_path']      = "uploads/associate_courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_marketing_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $marketing_image  = $this->upload->data('file_name');
                    }
            }

            $subs = $this->input->post('subjects');
            $tops = $this->input->post('topics');
            if(count($subs)>0 && count($tops)>0){
                $new_data = json_encode(array_combine($subs, $tops));
            }else{
                $new_data = "";
            }

        $res = $this->Admin_model->add_associate_course($course_image,$marketing_image,$new_data);

            if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'AICPE Associate added successfully.'
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

    public function edit_associate_course(){
        $course_image = ""; $marketing_image="";
        if(!empty($_FILES['crs_image']['name'])){
                
                $config['upload_path']      = "uploads/associate_courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $course_image  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['crs_marketing_image']['name'])){
                
                $config['upload_path']      = "uploads/associate_courses/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('crs_marketing_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $marketing_image  = $this->upload->data('file_name');
                    }
            }

            $subs = $this->input->post('subjects');
            $tops = $this->input->post('topics');
             if(count($subs)>0 && count($tops)>0){
                $new_data = json_encode(array_combine($subs, $tops));
            }else{
                $new_data = "";
            }

        $res = $this->Admin_model->edit_associate_course($course_image,$marketing_image,$new_data);
        if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'AICPE Associate updated successfully.'
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

    public function get_associate_courses(){
            $id = $this->input->post('id');
            $data['subjects'] = $this->Admin_model->get_all_subjects_for_courses();
            $data['streams'] = $this->Admin_model->get_all_stream();
            $data['institutions'] = $this->Admin_model->get_all_institutions();
            $data['associates'] = $this->Admin_model->get_all_associates();
            if($id!=""){
                $data['id'] =$this->input->post('id');
                $data['data'] = $this->Admin_model->get_associate_course_byId($id);
            }else{
                $data['data'] = "";
                $data['id'] = "";
            }
            
            $this->load->view('admin/super-admin/add_associate_courses',$data);
    }

    public function delete_associate_courses(){
        $id = $this->input->post('id');
        $data = $this->Admin_model->delete_associate_courses($id);
        echo json_encode($data);
    }

    public function export_associte_courses(){
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'asc_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Admin_model->associate_courses('data',$where_data);
        $associates = $this->Admin_model->get_all_associates();
        $filename  = 'AICPE_Associate_Courses'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Code';
        $header[] = 'Course Name';
        $header[] = 'Course Stream';
        $header[] = 'Course Duration';
        $header[] = 'Associate Name';
        $header[] = 'Awards '; 
        $header[] = 'Eligibility';     
        $header[] = 'Syllabus';    
        $header[] = 'Pattern';   
        $header[] = 'No. Of Semester';  
        $header[] = 'No. Of Marksheet';  
        $header[] = 'Demo Exam Count';  
        $header[] = 'AICPE Exam Fees';  
        $header[] = 'Associate Exam Fees';  
        $header[] = 'Marksheet Fees';  
        $header[] = 'Subjects';  
        $header[] = 'Publish Date';  
        $header[] = 'Status';  
        
        $row_data = array();
        $subjects = $this->Admin_model->get_all_subjects_for_courses();
        $asso = "";
        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                if($associates!=""){
                    foreach ($associates as $associate) { 
                        if(in_array($associate->asso_id, json_decode($row->asc_associates))){ 
                            $asso .= $asso.", ".$associate->asso_name; 
                        }
                    }
                } 
                  
                $pattern = $status="";
                if($row->asc_pattern==0){  
                    $pattern = "Semester"; }else{  $pattern = "Yearly"; }
               if($row->crs_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = $row->asc_code;
                $rows[] = ucwords($row->asc_name);
                $rows[] = ucwords($row->ct_title); 
                $rows[] = $row->crs_duration;
                $rows[] = ucwords($asso);
                $rows[] = $row->asc_awards;
                $rows[] = $row->asc_eligibility;
                $rows[] = $row->asc_syllabus;
                $rows[] = $pattern ;
                $rows[] = $row->asc_no_of_semester;
                $rows[] = $row->asc_no_of_marksheets;
                $rows[] = $row->asc_demo_exam_count;
                $rows[] = $row->asc_aicpe_exam_fees;
                $rows[] = $row->asc_asso_exam_fees;
                $rows[] = $row->asc_marksheet_fees;
                $rows[] = $sub;
                $rows[] = date('d-m-Y',strtotime($row->asc_publish_date));
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'AICPE_Associate_Courses');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }
/*--------------------------aicpe associate courses code ends here-------------------------*/

	public function course_suggestions(){
	    
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');
       
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'cs_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],            
        );
        $data['data'] = $this->Admin_model->course_suggestions('data',$where_data);
        $data['total_records'] =  $this->Admin_model->course_suggestions('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-course-suggestions/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/course_suggestions',
            'default_sort'      => 'cs_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/course_suggestions_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }

    public function delete_course_suggestions(){
         $id = $this->input->post('id');
        $data = $this->Admin_model->delete_course_suggestion($id);
        echo json_encode($data);
    }

    public function export_course_suggestions(){
        $data["per_page"]   = $this->get_page_vars('per_page', 500);
        $data["page"]       = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']     = $this->get_request_params('search','');
        $data['start_date'] = $this->get_request_params('start_date','');
        $data['end_date']   = $this->get_request_params('end_date','');
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'cs_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'ASC'),
            "search"         => $data['search'],           
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
    
        $report_list = $this->Admin_model->non_aicpe_courses('data',$where_data);
        $associates = $this->Admin_model->get_all_associates();
        $filename  = 'Course_suggestions'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Course Name';
        $header[] = 'Course Duration';
        $header[] = 'Eligibility';
        $header[] = 'Beneficiaries';
        $header[] = 'Publish Date';  
        $header[] = 'Status';  
        
        $row_data = array();
        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
               
                 $status="";
                 if($row->cs_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = ucwords($row->cs_name);
                $rows[] = $row->cs_duration;
                $rows[] = $row->cs_eligibility;
                $rows[] = $row->cs_beneficiaries;
                $rows[] = date('d-m-Y',strtotime($row->cs_publish_date));
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Course_suggestions');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }
/*--------------------------question bank code starts here-------------------------*/
	public function question_bank(){

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
        $data['subjects'] =$this->Admin_model->get_subjects();
        $data['data'] = $this->Admin_model->question_bank('data',$where_data);
        $data['total_records'] =  $this->Admin_model->question_bank('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-question-bank/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/question_bank',
            'default_sort'      => 'qa_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/question_bank_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

    public function get_question_bank(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        $data['data'] ="";
        $data['subjects'] =$this->Admin_model->get_subjects();
         if($id!=='' && $data['type']=='edit'){
            $data['data'] = $this->Admin_model->get_question_bank_byId($id);
        }
        $this->load->view('admin/super-admin/add_question_bank',$data);
    }

    public function delete_question_bank(){
        $id = $this->input->post('id');
        $data = $this->Admin_model->delete_question_bank($id);
        echo json_encode($data);
    }

    public function add_question_bank(){
        
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

                $result = $this->Admin_model->add_question($img_1,$img_2,$img_3,$img_4,$que_img);
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

                $result = $this->Admin_model->edit_question($img_1,$img_2,$img_3,$img_4,$que_img);
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
/*--------------------------question banks code ends here-------------------------*/
	public function aicpe_world_membership_invention_center(){
		$this->load->view('admin/super-admin/aicpe_world_membership_invention_center');
	}

/*----------------------------------- AICPE Associates code start here------------------------*/

	public function aicpe_associates(){
        
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');
       
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'asso_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],            
        ); 
        
        $data['data'] = $this->Admin_model->aicpe_associates('data',$where_data);
        $data['total_records'] =  $this->Admin_model->aicpe_associates('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-aicpe-associates/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/aicpe_associates',
            'default_sort'      => 'asso_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/aicpe_associates_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

    public function get_aicpe_associates(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        $data['data'] ="";
         if($id!='' && $data['type']=='edit'){
            $data['data'] = $this->Admin_model->get_associate_byID($id);
        }
        $this->load->view('admin/super-admin/add_aicpe_associate',$data);
    }

    public function add_aicpe_associates(){
        $this->form_validation->set_rules('asso_code','Associate Code','required');
        $this->form_validation->set_rules('asso_name','Associate Name','required');
        if($this->form_validation->run() == false)
            {
                $message = array(
                        'type' => 'error',
                        'msg'  => 'Something went wrong! Please try again.'
                    );
                    echo json_encode($message);exit;
            }
            else
            { 
            $uploadedImage = "";
            if(!empty($_FILES['asso_logo']['name'])){
                    
                    $config['upload_path']      = "uploads/associates";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('asso_logo'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                            
                        }
                        else
                        {
                            $uploadedImage  = $this->upload->data('file_name');
                            //echo "ok"; print_r($uploadedImage);die;
                        }
                }

                $result = $this->Admin_model->add_associate($uploadedImage);
                if($result)
                {
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'AICPE Associate added successfully.'
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
    }

    public function delete_aicpe_associates(){
        $id = $this->input->post('id');
        $data = $this->Admin_model->delete_aicpe_associates($id);
        echo json_encode($data);
    }

    public function block_aicpe_associates(){
        $id = $this->input->post('id'); 
        $result = $this->Admin_model->block_aicpe_associates($id);
                if($result)
                {
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Status updated successfully.'
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

    public function view_aicpe_associates(){
        $id = $this->input->post('id');
        $data['data'] = $this->Admin_model->get_associate_byID($id);
        $this->load->view('admin/super-admin/view_aicpe_associate',$data);
    }
/*----------------------------------- AICPE Associates code ends here------------------------*/

/*-----------------------------------Enquiries code start here------------------------*/
	
	public function student_enquiries(){
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
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['courses'] = $this->Admin_model->get_all_courses();
        $data['data'] = $this->Admin_model->get_all_student_enquiries('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_all_student_enquiries('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-student-enquiries/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/student_enquiries',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/student_enquiries_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function delete_student_enquiry(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_student_enquiry($id);
        echo json_encode($data);
    }

    public function allot_institute(){
    	$response = $this->Admin_model->allot_institute();
		echo json_encode($response);
    }


	public function institution_enquiries(){
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'iq_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'], 
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['data'] = $this->Admin_model->get_all_inst_enquiries('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_all_inst_enquiries('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-institution-enquiries/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/institution_enquiries',
            'default_sort'      => 'iq_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/institution_enquiries_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	public function delete_institute_enquiry(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_institute_enquiry($id);
        echo json_encode($data);
    }
	
	public function employer_enquiries(){
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'eq_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'], 
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],           
        ); 
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['data'] = $this->Admin_model->get_all_employer_enquiries('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_all_employer_enquiries('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-employer-enquiries/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/employer_enquiries',
            'default_sort'      => 'eq_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/employer_enquiries_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	public function delete_employere_enquiry(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_employere_enquiry($id);
        echo json_encode($data);
    }

    public function quick_enquiries(){
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'qe_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],   
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],       
        ); 
        $data['data'] = $this->Admin_model->get_allquick_enquiries('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_allquick_enquiries('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-quick-enquiries/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/quick_enquiries',
            'default_sort'      => 'qe_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/quick_enquiries_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

	public function delete_quick_enquiry(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_quick_enquiry($id);
        echo json_encode($data);
    }
/*-----------------------------------Enquiries code ends here------------------------*/

	public function admissions(){
		$this->load->view('admin/super-admin/admissions');
	}

	public function aicpe_admissions(){
		$this->load->view('admin/super-admin/aicpe_admissions');
	}

	public function associates_admissions(){
		$this->load->view('admin/super-admin/associates_admissions');
	}

	public function dropout_students(){
		$this->load->view('admin/super-admin/dropout_students');
	}

	public function old_Students(){
		$this->load->view('admin/super-admin/old_Students');
	}

	public function add_student(){
		$this->load->view('admin/super-admin/add_student');
	} 

/*--------------admin staff code start here------------------------------*/

	public function admin_staff(){
		
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'as_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],   
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],       
        ); 
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['designation'] = $this->Admin_model_part_1->get_all_admin_designation();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
        $data['data'] = $this->Admin_model_part_1->administrative_staff('data',$where_data);
        $data['total_records'] =  $this->Admin_model_part_1->administrative_staff('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-administrative-staff/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/admin_staff',
            'default_sort'      => 'as_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/admin_staff_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

    public function add_admin_staff(){
         $profile_img = ""; $id_proof="";
        if(!empty($_FILES['image']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        print_r($error);die;
                    }
                    else
                    {
                        $profile_img  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['id_proof']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('id_proof'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $id_proof  = $this->upload->data('file_name');
                    }
            }

        $res = $this->Admin_model_part_1->add_admin_staff($profile_img,$id_proof);

            if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Administrative staff added successfully.'
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

    public function edit_admin_staff(){
         $profile_img = ""; $id_proof="";
        
        if(!empty($_FILES['image']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $profile_img  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['id_proof']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('id_proof'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $id_proof  = $this->upload->data('file_name');
                    }
            }

        $res = $this->Admin_model_part_1->edit_admin_staff($profile_img,$id_proof);

            if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Administrative staff updated successfully.'
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

    public function get_admin_staff(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['designation'] = $this->Admin_model_part_1->get_all_admin_designation();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
         if($id!='' && $data['type']=='edit'){
            $data['staff'] = $this->Admin_model_part_1->get_admin_staff_byId($id);
        }else{
            $data['staff'] ="";
            $data['id'] = "";
        }
        $this->load->view('admin/super-admin/add_admin_staff',$data);
    }

    public function delete_admin_staff(){
        $id = $this->input->post('id');
        $data = $this->Admin_model_part_1->delete_admin_staff($id);
        echo json_encode($data);
    }

    public function export_admin_staff()
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
    
        $report_list = $this->Admin_model_part_1->administrative_staff('data',$where_data);
        
        $filename  = 'Admin_Staff'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Name';
        $header[] = 'Mobile No.';
        $header[] = 'Alternate Mobile No.';
        $header[] = 'Whatsapp No'; 
        $header[] = 'Email';     
        $header[] = 'Gender';    
        $header[] = 'Date Of Birth';   
        $header[] = 'Temporary Address';  
        $header[] = 'Permanent Address';  
        $header[] = 'Country';  
        $header[] = 'State';  
        $header[] = 'District';  
        $header[] = 'City';  
        $header[] = 'Pincode';  
        $header[] = 'Designation';  
        $header[] = 'Education';  
        $header[] = 'Role';  
        $header[] = 'Username';  
        $header[] = 'Password';  
        $header[] = 'ID Proof Type';  
        $header[] = 'ID Proof No.';  
        $header[] = 'Eligibility For Incentive';  
        $header[] = 'Status';  
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                $gender = $eligibity = $status="";
                if($row->as_gender==0){  
                    $gender = "Male"; }elseif ($row->as_gender==1) {  $gender = "Female"; }else{  $gender = "Other"; }
                if($row->as_incentive_eligibility==0){ $eligibity = 'Yes'; }else{ $eligibity = 'No'; };
                if($row->as_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = ucwords($row->as_firstName." ".$row->as_middleNmae." ".$row->as_lastName);
                $rows[] = $row->as_mobile_1;
                $rows[] = $row->as_mobile_2; 
                $rows[] = $row->as_whats_app;
                $rows[] = $row->as_email;
                $rows[] =  $gender;
                $rows[] = date('d-m-Y',strtotime($row->as_date_of_birth));
                $rows[] = ucfirst($row->as_temp_add);
                $rows[] = ucfirst($row->as_perm_add);
                $rows[] = ucfirst($row->c_name);
                $rows[] = ucfirst($row->s_name);
                $rows[] = ucfirst($row->d_district_name);
                $rows[] = ucfirst($row->ci_name);
                $rows[] = $row->as_pincode;
                $rows[] = ucfirst($row->asd_title);
                $rows[] = ucfirst($row->q_title);
                $rows[] = ucfirst($row->as_role);
                $rows[] = $row->as_email;
                $rows[] = $row->as_password;
                $rows[] = ucfirst($row->ph_title);
                $rows[] = $row->as_id_no;
                $rows[] = $eligibity;
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Admin_Staff');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

	public function staff_field(){
		
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'as_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],   
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],       
        ); 
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['designation'] = $this->Admin_model_part_1->get_all_admin_designation();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
        $data['data'] = $this->Admin_model_part_1->staff_field('data',$where_data);
        $data['total_records'] =  $this->Admin_model_part_1->staff_field('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-field-staff/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/staff_field',
            'default_sort'      => 'as_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/field_staff_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

     public function add_staff_field(){
         $profile_img = ""; $id_proof="";
        if(!empty($_FILES['image']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $profile_img  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['id_proof']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('id_proof'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $id_proof  = $this->upload->data('file_name');
                    }
            }

        $res = $this->Admin_model_part_1->add_staff_field($profile_img,$id_proof);

            if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Field staff added successfully.'
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

    public function edit_staff_field(){
         $profile_img = ""; $id_proof="";
        
        if(!empty($_FILES['image']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $profile_img  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['id_proof']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('id_proof'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $id_proof  = $this->upload->data('file_name');
                    }
            }

        $res = $this->Admin_model_part_1->edit_staff_field($profile_img,$id_proof);

            if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Field staff updated successfully.'
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

    public function get_staff_field(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['designation'] = $this->Admin_model_part_1->get_all_admin_designation();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
         if($id!='' && $data['type']=='edit'){
            $data['field'] = $this->Admin_model_part_1->get_staff_field($id);
        }else{
            $data['field'] ="";
            $data['id'] = "";
        }
        $this->load->view('admin/super-admin/add_field_staff',$data);
    }

    public function delete_staff_field(){
        $id = $this->input->post('id');
        $data = $this->Admin_model_part_1->delete_staff_field($id);
        echo json_encode($data);
    }

    public function export_field_staff()
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
    
        $report_list = $this->Admin_model_part_1->staff_field('data',$where_data);
        
        $filename  = 'Field_Staff'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Name';
        $header[] = 'Mobile No.';
        $header[] = 'Alternate Mobile No.';
        $header[] = 'Whatsapp No'; 
        $header[] = 'Email';     
        $header[] = 'Gender';    
        $header[] = 'Date Of Birth';   
        $header[] = 'Temporary Address';  
        $header[] = 'Permanent Address';  
        $header[] = 'Country';  
        $header[] = 'State';  
        $header[] = 'District';  
        $header[] = 'City';  
        $header[] = 'Pincode';  
        $header[] = 'Designation';  
        $header[] = 'Education';  
        $header[] = 'Role';  
        $header[] = 'Username';  
        $header[] = 'Password';  
        $header[] = 'ID Proof Type';  
        $header[] = 'ID Proof No.';  
        $header[] = 'Eligibility For Incentive';  
        $header[] = 'Status';  
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                $gender = $eligibity = $status="";
                if($row->as_gender==0){  
                    $gender = "Male"; }elseif ($row->as_gender==1) {  $gender = "Female"; }else{  $gender = "Other"; }
                if($row->as_incentive_eligibility==0){ $eligibity = 'Yes'; }else{ $eligibity = 'No'; };
                if($row->as_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = ucwords($row->as_firstName." ".$row->as_middleNmae." ".$row->as_lastName);
                $rows[] = $row->as_mobile_1;
                $rows[] = $row->as_mobile_2; 
                $rows[] = $row->as_whats_app;
                $rows[] = $row->as_email;
                $rows[] =  $gender;
                $rows[] = date('d-m-Y',strtotime($row->as_date_of_birth));
                $rows[] = ucfirst($row->as_temp_add);
                $rows[] = ucfirst($row->as_perm_add);
                $rows[] = ucfirst($row->c_name);
                $rows[] = ucfirst($row->s_name);
                $rows[] = ucfirst($row->d_district_name);
                $rows[] = ucfirst($row->ci_name);
                $rows[] = $row->as_pincode;
                $rows[] = ucfirst($row->asd_title);
                $rows[] = ucfirst($row->q_title);
                $rows[] = ucfirst($row->as_role);
                $rows[] = $row->as_email;
                $rows[] = $row->as_password;
                $rows[] = ucfirst($row->ph_title);
                $rows[] = $row->as_id_no;
                $rows[] = $eligibity;
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'feild_Staff');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

	public function staff_agents(){
		
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'as_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],   
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],       
        ); 
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['designation'] = $this->Admin_model_part_1->get_all_admin_designation();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
        $data['data'] = $this->Admin_model_part_1->agent_staff('data',$where_data);
        $data['total_records'] =  $this->Admin_model_part_1->agent_staff('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-agent-and-other-staff/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/staff_agents',
            'default_sort'      => 'as_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/agent_staff_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

    public function export_agent_staff()
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
    
        $report_list = $this->Admin_model_part_1->agent_staff('data',$where_data);
        
        $filename  = 'Field_Staff'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Name';
        $header[] = 'Mobile No.';
        $header[] = 'Alternate Mobile No.';
        $header[] = 'Whatsapp No'; 
        $header[] = 'Email';     
        $header[] = 'Gender';    
        $header[] = 'Date Of Birth';   
        $header[] = 'Temporary Address';  
        $header[] = 'Permanent Address';  
        $header[] = 'Country';  
        $header[] = 'State';  
        $header[] = 'District';  
        $header[] = 'City';  
        $header[] = 'Pincode';  
        $header[] = 'Designation';  
        $header[] = 'Education';  
        $header[] = 'Role';  
        $header[] = 'Username';  
        $header[] = 'Password';  
        $header[] = 'ID Proof Type';  
        $header[] = 'ID Proof No.';  
        $header[] = 'Eligibility For Incentive';  
        $header[] = 'Status';  
        
        $row_data = array();

        if(!empty($report_list))
        {
            foreach($report_list as $key => $row)
            {
                $rows   = array();
                $gender = $eligibity = $status="";
                if($row->as_gender==0){  
                    $gender = "Male"; }elseif ($row->as_gender==1) {  $gender = "Female"; }else{  $gender = "Other"; }
                if($row->as_incentive_eligibility==0){ $eligibity = 'Yes'; }else{ $eligibity = 'No'; };
                if($row->as_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = ucwords($row->as_firstName." ".$row->as_middleNmae." ".$row->as_lastName);
                $rows[] = $row->as_mobile_1;
                $rows[] = $row->as_mobile_2; 
                $rows[] = $row->as_whats_app;
                $rows[] = $row->as_email;
                $rows[] =  $gender;
                $rows[] = date('d-m-Y',strtotime($row->as_date_of_birth));
                $rows[] = ucfirst($row->as_temp_add);
                $rows[] = ucfirst($row->as_perm_add);
                $rows[] = ucfirst($row->c_name);
                $rows[] = ucfirst($row->s_name);
                $rows[] = ucfirst($row->d_district_name);
                $rows[] = ucfirst($row->ci_name);
                $rows[] = $row->as_pincode;
                $rows[] = ucfirst($row->asd_title);
                $rows[] = ucfirst($row->q_title);
                $rows[] = ucfirst($row->as_role);
                $rows[] = $row->as_email;
                $rows[] = $row->as_password;
                $rows[] = ucfirst($row->ph_title);
                $rows[] = $row->as_id_no;
                $rows[] = $eligibity;
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'feild_Staff');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    public function add_staff_agents(){
        pr($_FILES);
        $profile_img = ""; $id_proof="";
        if(!empty($_FILES['image']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        print_r($error);die;
                    }
                    else
                    {
                        $profile_img  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['id_proof']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('id_proof'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $id_proof  = $this->upload->data('file_name');
                    }
            }

        $res = $this->Admin_model_part_1->add_staff_agents($profile_img,$id_proof);

            if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Agent staff added successfully.'
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

    public function edit_staff_agents(){
         $profile_img = ""; $id_proof="";
        
        if(!empty($_FILES['image']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $profile_img  = $this->upload->data('file_name');
                    }
            }
            if(!empty($_FILES['id_proof']['name'])){
                
                $config['upload_path']      = "uploads/admin_staff/";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('id_proof'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $id_proof  = $this->upload->data('file_name');
                    }
            }

        $res = $this->Admin_model_part_1->edit_staff_agents($profile_img,$id_proof);

            if($res){
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Agent staff updated successfully.'
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

    public function get_staff_agents(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['designation'] = $this->Admin_model_part_1->get_all_admin_designation();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
         if($id!='' && $data['type']=='edit'){
            $data['agents'] = $this->Admin_model_part_1->get_staff_agents($id);
        }else{
            $data['agents'] ="";
            $data['id'] = "";
        }
        $this->load->view('admin/super-admin/add_agent_staff',$data);
    }

    public function delete_staff_agents(){
        $id = $this->input->post('id');
        $data = $this->Admin_model_part_1->delete_staff_agents($id);
        echo json_encode($data);
    }

	public function staff_tasks(){
		$data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'st_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],   
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],       
        ); 
        $data['admin_staff'] = $this->Admin_model->get_alladminStaff();
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['data'] = $this->Admin_model->admin_staff_tasks('data',$where_data);
        $data['total_records'] =  $this->Admin_model->admin_staff_tasks('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-staff-tasks/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/staff_tasks',
            'default_sort'      => 'st_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/staff_tasks_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }
	public function get_staff_tasks(){
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        $data['tasks'] = "";
        $data['admin_staff'] = $this->Admin_model->get_alladminStaff();
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        if($this->input->post('type')=='edit' && $this->input->post('id')){ 
           
            $data['tasks'] = $this->Admin_model->get_admin_staff_byID();
        }
        $this->load->view('admin/super-admin/add_staff_tasks',$data);
    }
    public function add_staff_tasks(){

        $res = $this->Admin_model->add_staff_tasks();
        echo json_encode($res);
    }

    public function delete_staff_tasks(){
        $id = $this->input->post('id');
        $data = $this->Admin_model->delete_staff_tasks($id);
        echo json_encode($data);
    }

/*--------------admin staff code ends here------------------------------*/

/*-----------------------------------admin wallet-----------------*/

	public function wallet(){
		$this->load->view('admin/super-admin/wallet');
	}

/*----------------------------- marketing material code starts here-------------------------*/
	
    public function marketing_material(){
		
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');
       
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'mm_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],            
        ); 
        $data['data'] = $this->Admin_model_part_1->marketing_material('data',$where_data);
        $data['total_records'] =  $this->Admin_model_part_1->marketing_material('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-marketing-material/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/marketing_materials',
            'default_sort'      => 'mm_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/marketing_materials_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
	}

    public function get_marketing_material(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        $data['data'] ="";
        if($id!='' && $data['type']=='edit'){
            $data['data'] = $this->Admin_model_part_1->get_marketing_material_byId($id);
        }
        $this->load->view('admin/super-admin/add_marketing_material',$data);
    }

    public function add_marketing_material(){
        
            $uploadedImage = "";
            if(!empty($_FILES['image']['name'])){
                    
                    $config['upload_path']      = "uploads/marketing_material";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('image'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                        }
                        else
                        {
                            $uploadedImage  = $this->upload->data('file_name');
                        }
                }

                $result = $this->Admin_model_part_1->add_marketing_material($uploadedImage);
               
                    echo json_encode($result);exit;
    }

    public function delete_marketing_material(){
        $id = $this->input->post('id');
        $data = $this->Admin_model_part_1->delete_marketing_material($id);
        echo json_encode($data);
    }

/*----------------------------- marketing material code end here-------------------------*/

	public function gallery(){
		$this->load->view('admin/super-admin/gallery');
	}
/*----------------------------- birthday and anniversary code start here-------------------------*/
	public function birthday_and_anniversary(){

	    $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');
        $data['start_date']      = $this->get_request_params('start_date','');
        $data['end_date']        = $this->get_request_params('end_date','');
       
        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'ba_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],
            "start_date"     => $data['start_date'],           
            "end_date"       => $data['end_date'],            
        );
        $data['countries'] = $this->Admin_model->get_allCountries(); 
        $data['data'] = $this->Admin_model_part_1->birthday_anniversaries('data',$where_data);
        $data['total_records'] =  $this->Admin_model_part_1->birthday_anniversaries('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-birthday-and-anniversary/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/birthday_and_anniversary',
            'default_sort'      => 'ba_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/birthday_and_anniversary_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }

    public function get_birthday_and_anniversary(){
        $id = $this->input->post('id');
        $data['type'] = $this->input->post('type');
        $data['id'] = $this->input->post('id');
        $data['data'] ="";
        $data['countries'] = $this->Admin_model->get_allCountries();
        if($id!='' && $data['type']=='edit'){
            $data['data'] = $this->Admin_model_part_1->get_birthday_and_anniversary_byId($id);
        }
        $this->load->view('admin/super-admin/add_birthday_and_anniversary',$data);
    }

    public function add_birthday_and_anniversary(){
        
            $uploadedImage = "";
            if(!empty($_FILES['image']['name'])){
                    
                    $config['upload_path']      = "uploads/birthday_and_anniversary";
                    $config['allowed_types']    = "gif|jpg|png|jpeg";
                    $config['encrypt_name']     =  true;
                    $config['overwrite']        =  TRUE;
                 
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('image'))
                        {
                            $error  = array('error'  => $this->upload->display_errors());
                        }
                        else
                        {
                            $uploadedImage  = $this->upload->data('file_name');
                        }
                }

                $result = $this->Admin_model_part_1->add_birthday_and_anniversary($uploadedImage);
               
                    echo json_encode($result);exit;
    }

    public function delete_birthday_and_anniversary(){
        $id = $this->input->post('id');
        $data = $this->Admin_model_part_1->delete_birthday_and_anniversary($id);
        echo json_encode($data);
    }
/*----------------------------- birthday and anniversary code ends here-------------------------*/
	public function course_admissions(){
		$this->load->view('admin/super-admin/course_admissions');
	}

	public function postage_record(){
		$this->load->view('admin/super-admin/postage_record');
	}

	public function address_label(){
		$this->load->view('admin/super-admin/address_label');
	}
/*------------------------------------ Certificates ----------------------*/
	public function aicpe_vocational_certificates(){
		$this->load->view('admin/super-admin/aicpe_certificates');
	}

	public function participation_certificates(){
		$this->load->view('admin/super-admin/participation_certificates');
	}

	public function non_aicpe_certificates(){
		$this->load->view('admin/super-admin/non_aicpe_certificates');
	}

	public function aicpe_typing_certificates(){
		$this->load->view('admin/super-admin/aicpe_typing_certificates');
	}

/*------------------------------------business growth charts----------------------*/
	
	public function monthly_business(){
		$this->load->view('admin/super-admin/monthly_business');
	}

	public function virtual_business(){
		$this->load->view('admin/super-admin/virtual_business');
	}

	public function business_institutions(){
		$this->load->view('admin/super-admin/business_institutions');
	}

	public function recharge_report(){
		$this->load->view('admin/super-admin/recharge_report');
	}

	public function sms_management(){
		$this->load->view('admin/super-admin/sms_management');
	}

	public function role_management(){
		
		$this->load->view('admin/super-admin/role_management');
	}

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
