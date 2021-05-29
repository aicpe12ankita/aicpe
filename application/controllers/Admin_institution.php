<?php
class Admin_institution extends MY_Controller{
	
	function __construct()
    {
        parent::__construct();
		$this->page_segment = 2;
        $this->per_page = 3;
        $this->per_page_option = array(100=>100,200=>200, 500=>500, 1000=>1000); 
       // $this->load->library('PHPExcel');
        $this->load->helper('common_helper');      
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

    public function index(){

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
        $data['designations'] = $this->Admin_model->getallinstitution_designations();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
        $data['staff'] = $this->Admin_model->get_all_admin_staff();
        $data['data'] = $this->Admin_model->get_allInstitutions('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_allInstitutions('count',$where_data);
        //print_r($data['photoid_types']);
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-institutions/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/institutions',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/institutions_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }

    public function add(){
        $result = $this->Admin_model->add_institute();
        if($result)
                {
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Institution added successfully.'
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
    public function edit(){
       $result = $this->Admin_model->edit_institute();
       
        if($result)
                {
                    $message = array(
                        'type' => 'success',
                        'msg'  => 'Institution updated successfully.'
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

    public function delete(){
        $id = $this->input->post('id');
        $data = $this->Admin_model->delete_institutions($id);
        echo json_encode($data);
    }

    public function get(){
        $data['institution'] = "";
        $data['type'] = $this->input->post('type');
        $data['countries'] = $this->Admin_model->get_allCountries();
        $data['designations'] = $this->Admin_model->getallinstitution_designations();
        $data['qualifications'] = $this->Admin_model->get_allqualifications();
        $data['photoid_types'] = $this->Admin_model->getallphoto_id_types();
        $data['staff'] = $this->Admin_model->get_all_admin_staff();
        if($this->input->post('type')=='edit' && $this->input->post('id')!='')
        {
            
            $data['institution'] = $this->Admin_model->get_institution_byId();
        }
        parent::s_render('admin/super-admin/add_institution',$data);
            
        
    }

    public function send_sms_admin_to_institution(){
        if($this->input->post(id)!="" && $this->input->post('type')=='get'){
            $data['id'] = $this->input->post(id);
            parent::s_render('admin/super-admin/send_sms_admin_to_institution',$data);
        }
    }

    public function send_password_recovery_mail(){ 
        $result = $this->Admin_model->send_password_recovery_mail();
        echo json_encode($result);
    }

    public function send_password_recovery_message(){
        $result = $this->Admin_model->send_password_recovery_message();
        echo json_encode($result);
    }

    public function institute_login(){
        $id = $this->uri->segment(2);
        $result = $this->Admin_model->login_to_inst($id);
        if($result){
            redirect('institutions-dashboard');
        }
    }

    public function export()
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
    
        $report_list = $this->Admin_model_part_1->agent_staff('data',$where_data);
        
        $filename  = 'Institutions'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'Name';
        $header[] = 'ATC Code';
        $header[] = 'Institution Code';
        $header[] = 'Owner Name';
        $header[] = 'Designation';
        $header[] = 'Mobile No.';
        $header[] = 'Alternate Mobile No.';
        $header[] = 'Whatsapp No'; 
        $header[] = 'Email';     
        $header[] = 'Gender';    
        $header[] = 'Date Of Birth'; 
        $header[] = 'Address';  
        $header[] = 'Country';  
        $header[] = 'State';  
        $header[] = 'District';  
        $header[] = 'City';  
        $header[] = 'Pincode'; 
        $header[] = 'Username';  
        $header[] = 'Password';  
        $header[] = 'Qualification';  
        $header[] = 'GST No.';  
        $header[] = 'PAN No.';  
        $header[] = 'ID Proof Type';  
        $header[] = 'ID Proof No.';  
        $header[] = 'institution Details';  
        $header[] = 'Staff Assigned';  
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

        write_excel($file_path, $header, $row_data, 'Institutions');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }

    /*---------------------institutions staff code start here---------------------------*/

    public function institutions_staff(){

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
        
        $data['institutions'] = $this->Admin_model->get_all_institutions();
        $data['data'] = $this->Admin_model->get_inst_staff('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_inst_staff('count',$where_data);
        //print_r($data['photoid_types']);
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-institutions-staff/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/institutions_staff',
            'default_sort'      => 'st_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/institution_staff_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }
    public function add_instutute_staff(){

    }

    public function export_institutions_staff(){
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
    
        $report_list = $this->Admin_model->get_inst_staff('data',$where_data);
        
        $filename  = 'Institution_Staff'.time().'.xls';
        $file_path = './uploads/temp/'.$filename;       

        $header   = array();
        $header[] = 'institution Name';
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
                if($row->st_gender=='Male'){  
                    $gender = "Male"; }elseif ($row->st_gender=='Female') {  $gender = "Female"; }else{  $gender = "Other"; }
                if($row->st_incentives_eligibility==0){ $eligibity = 'Yes'; }else{ $eligibity = 'No'; };
                if($row->st_status==0){ $status = 'Active'; }else{ $status = 'Inactive'; }
                $rows[] = ucwords($row->inst_name);
                $rows[] = ucwords($row->st_name);
                $rows[] = $row->st_mobile_1;
                $rows[] = $row->st_mobile_2; 
                $rows[] = $row->st_whatsapp;
                $rows[] = $row->st_email;
                $rows[] =  $gender;
                $rows[] = date('d-m-Y',strtotime($row->st_date_of_birth));
                $rows[] = ucfirst($row->st_temp_address);
                $rows[] = ucfirst($row->st_per_address);
                $rows[] = ucfirst($row->c_name);
                $rows[] = ucfirst($row->s_name);
                $rows[] = ucfirst($row->d_district_name);
                $rows[] = ucfirst($row->ci_name);
                $rows[] = $row->st_pincode;
                $rows[] = ucfirst($row->isd_title);
                $rows[] = ucfirst($row->q_title);
                $rows[] = $row->st_email;
                $rows[] = $row->st_paaword;
                $rows[] = ucfirst($row->ph_title);
                $rows[] = $row->st_photo_id_no;
                $rows[] = $eligibity;
                $rows[] = $status;
                          

                $row_data[] = $rows;
            }
        }

        write_excel($file_path, $header, $row_data, 'Institution_Staff');
       
        $message = json_encode(base_url().'uploads/temp/'.$filename);
        echo $message;
    }
/*------------------------institutions staff code ends here------------------------------*/

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