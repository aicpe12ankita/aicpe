<?php

class Institution_model extends CI_Model
{

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	/*
	@Description 	: List of enquiey
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 01-03-2021
	*/

	/*public function getAllData($table){
		$this->db->order_by('id','desc');
		$this->db->limit(50);
		$result = $this->db->get($table);
		//print_r($this->db->last_query());exit();	
		return $result->result();
	}*/

/*	public function getAllData($type,$where_data)
	{

		if($type=='data')
		{
			$this->db->select(array(
				'enquiries.inst_id', 
				'enquiries.inst_staff_id', 
				'enquiries.stud_firstName', 
				'enquiries.stud_middleName', 
				'enquiries.stud_lastName', 
				'enquiries.course_of_interest', 
				'enquiries.mobile_1', 
				'enquiries.mobile_2', 
				'enquiries.whatsapp_no', 
				'enquiries.email', 
				'enquiries.gender', 
				'enquiries.date_of_birth', 
				'enquiries.education', 
				'enquiries.occupation', 
				'enquiries.address', 
				'enquiries.country', 
				'enquiries.state', 
				'enquiries.city', 
				'enquiries.pincode', 
				'enquiries.date_of_enquiry', 
				'enquiries.deleted_status', 
				'enquiries.ipaddress', 
				'enquiries.status'
			));   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('enquiries.id');		
		}

		
		$this->db->from($table);		
		
		if(isset($where_data['from_date']) && $where_data['from_date'] !='')
		{
			$this->db->where('DATE(enquiries.date_of_enquiry) >=', $where_data['from_date'].' 00:00:00');
		}	
		if(isset($where_data['to_date']) && $where_data['to_date'] !='')
		{
			$this->db->where('DATE(enquiries.date_of_enquiry) <=', $where_data['to_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('enquiries.course_of_interest', addslashes($where_data['search']));
			$this->db->or_like('enquiries.stud_firstName', addslashes($where_data['search']));
			$this->db->or_like('enquiries.stud_lastName', addslashes($where_data['search']));			
			$this->db->group_end();
		}

		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('id', 'stud_firstName','stud_middleName','stud_lastName','course_of_interest','mobile_1','whatsapp_no','email','inst_staff_id','education','occupation','address','country','state','pincode')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('enquiries.id','desc');
			}
		}

		$this->db->group_by('enquiries.id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
		return $result;	
	}*/

	/*
	@Description 	: List of server status log
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 24-02-2021
	*/

	public function institution_details($where_data)
	{
		$this->db->select('institutions.*');

		$this->db->from('institutions');
		
		if (isset($where_data['inst_code']) && $where_data['inst_code'] != '') 
		{
			$this->db->where('institutions.inst_code', $where_data['inst_code']);
		}

		// If data is required
		$result = $this->db->get()->row_array();
		
		return $result;
	}

	/*
	@Description 	: Save profile for institution
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 26-02-2021
	*/

	public function getAllData($type,$where_data)
	{

		if($type=='data')
		{
			$this->db->select(array(
				'enquiries.id', 
				'enquiries.inst_id', 
				'enquiries.inst_staff_id', 
				'enquiries.stud_firstName', 
				'enquiries.stud_middleName', 
				'enquiries.stud_lastName', 
				'enquiries.course_of_interest', 
				'enquiries.mobile_1', 
				'enquiries.mobile_2', 
				'enquiries.whatsapp_no', 
				'enquiries.email', 
				'enquiries.gender', 
				'enquiries.date_of_birth', 
				'enquiries.education', 
				'enquiries.occupation', 
				'enquiries.address', 
				'enquiries.country', 
				'enquiries.state', 
				'enquiries.city', 
				'enquiries.pincode', 
				'enquiries.date_of_enquiry', 
				'enquiries.deleted_status', 
				'enquiries.ipaddress', 
				'enquiries.status'
			));   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('enquiries.id');		
		}

		
		$this->db->from('enquiries');		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$this->db->where('date_of_enquiry >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$this->db->where('date_of_enquiry <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('enquiries.course_of_interest', addslashes($where_data['search']));
			$this->db->or_like('enquiries.stud_firstName', addslashes($where_data['search']));
			$this->db->or_like('enquiries.stud_lastName', addslashes($where_data['search']));			
			$this->db->group_end();
		}

		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('id', 'stud_firstName','stud_middleName','stud_lastName','course_of_interest','mobile_1','whatsapp_no','email','inst_staff_id','education','occupation','address','country','state','pincode')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('enquiries.id','desc');
			}
		}

		$this->db->group_by('enquiries.id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	//print_r($this->db->last_query());
		return $result;	
	}
	
	public function save_profile($where_data)
	{
		
		if(is_array($where_data['id']) && !empty($where_data['id']))
    	{
    		$this->db->where_in('id',$where_data['id']);
    	}
    	else
    	{
    		$this->db->where('id',$where_data['id']);
    	}

    	if($this->db->update('institutions',$where_data['insert_data']))
    	{
    		return TRUE;
    	}
    	else
    	{
    		return FALSE;
    	}
	}
	
		/*
	@Description 	: Save profile for institution
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 26-02-2021
	*/

	public function getAllCourseData($type,$where_data)
	{
		$table = "aicp_courses";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('crs_id');		
		}

		//$this->db->where('c_deleted','0');
		$this->db->from($table);		
		
		//$this->db->join('');

		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('crs_code', addslashes($where_data['search']));
			$this->db->or_like('crs_name', addslashes($where_data['search']));
			//$this->db->or_like('c_currency', addslashes($where_data['search']));			
			$this->db->group_end();
		}

		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('crs_id','crs_code','crs_name','crs_stream','c_currency')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('crs_id','desc');
			}
		}

		$this->db->group_by('crs_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	
		return $result;	
	}

	public function getEnquiries(){
		
		$table = 'enquiries';
      	$this->db->order_by('id','asc');
      	$this->db->limit(20);
      	$records = $this->db->get($table);
      	return $records->result();
  	}

  	public function add_student(){
  		$stud_name = $this->input->post('first_name')." ".$this->input->post('middle_name')." ".$this->input->post('last_name');
  		 

  		$data = array('stud_name'=>$stud_name,
  		  				'stud_mobile1'=>$this->input->post('stud_mobile1'),
  						'stud_mobile2'=>$this->input->post('stud_mobile2'),
  						'stud_whatsappno'=>$this->input->post('stud_whatsappNo'),
  						'stud_email'=>$this->input->post('stud_email'),
  						'stud_gender'=>$this->input->post('stud_gender'),
  						'stud_dob'=>$this->input->post('stud_dob'),
  						'stud_qualification'=>$this->input->post('stud_qualification'),
  						'stud_occupation'=>$this->input->post('stud_occupation'),
  						'stud_address'=>$this->input->post('stud_address'),
  						'stud_country'=>$this->input->post('stud_country'),
  						'stud_state'=>$this->input->post('stud_state'),
  						'stud_district'=>$this->input->post('stud_district'),
  						'stud_city'=>$this->input->post('stud_city'),
  						'stud_pincode'=>$this->input->post('stud_pincode'),
  						'stud_photo'=>"",
  						'stud_photoIdType'=>$this->input->post('stud_photoIdType'),
  						'stud_photoIdNo'=>$this->input->post('stud_photoIdNo'),
  						'stud_photoIdProof'=>"",
  						'stud_course_name'=>$this->input->post('stud_course_name'),
  						'stud_course_fees'=>$this->input->post('stud_course_fees'),
  						'stud_discount_rate'=>$this->input->post('stud_discount_rate'),
  						'stud_discount_ammount'=>$this->input->post('stud_discount_ammount'),
  						'stud_total_fees'=>$this->input->post('stud_total_fees'),
  						'stud_fees_received'=>$this->input->post('stud_fees_received'),
  						'stud_balance_fees'=>$this->input->post('stud_balance_fees'),
  						'stud_admission_date'=>$this->input->post('stud_admission_date'),
  						'stud_remarks'=>$this->input->post('stud_remarks'));
  		$result = $this->db->insert('students',$data);
  		$id = $this->db->insert_id();
  		$aicpeID = 'ST-00'.$id;
  		$org_pass = random_string('alnum',10);
  		//$org_pass = 'test_pass';
  		$secret_code = random_string('alpha',15);
  		$password = sha1($org_pass.$secret_code);
  		$data = array('stud_aicpeID'=>$aicpeID,
  					  'stud_password'=>$password,
  					  'stud_secret_code' =>$secret_code);
  		$this->db->where('stud_id ',$id);
  		$res = $this->db->update('students',$data);
  		return $res;
  	}

  	/*
	@Description 	: List of AICPE Courses
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 25-04-2021
	*/

	public function get_aicpe_courses_data($type="data",$where_data)
	{
		$table = "aicp_courses";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{			
			$this->db->select('crs_id');		
		}
		
		$this->db->from($table);	

		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('crs_code', addslashes($where_data['search']));
			$this->db->or_like('crs_name', addslashes($where_data['search']));
			//$this->db->or_like('c_currency', addslashes($where_data['search']));			
			$this->db->group_end();
		}

		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('crs_id','crs_code','crs_name','crs_stream','c_currency')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('crs_id','desc');
			}
		}

		$this->db->group_by('crs_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	
		return $result;	
	}

	/*
	@Description 	: List of AICPE Courses
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 25-04-2021
	*/

	public function get_aicp_associate_courses_data($type="data",$where_data)
	{
		$table = "aicp_associates";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{			
			$this->db->select('asso_id');		
		}
		
		$this->db->from($table);	

		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('asc_code', addslashes($where_data['search']));
			$this->db->or_like('asc_name', addslashes($where_data['search']));
			//$this->db->or_like('c_currency', addslashes($where_data['search']));			
			$this->db->group_end();
		}

		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('asso_id','asso_code','asso_name','asso_status','asso_deleted_status')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('asso_id','desc');
			}
		}

		$this->db->group_by('asso_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	
		return $result;	
	}


	/*
	@Description 	: Details of Assosiate Courses and associate details
	@Author 		: Ankita Mandlik
	@input 			: $asso_id
	@Output 		: 
	@Date 			: 25-04-2021
	*/

	public function get_aicp_associate_courses_by_id($asso_id)
	{
		$this->db->select(array('aicp_associates.*','aicp_associate_courses.*','aicp_associate_courses_mapping.id as mapping_id','aicp_associate_courses_mapping.institute_course_fee','aicp_associate_courses_mapping.is_viva_and_practical','aicp_associate_courses_mapping.is_marksheets_fees'));
		$this->db->from('aicp_associates');
		$this->db->join('aicp_associate_courses_mapping' ,'aicp_associate_courses_mapping.asso_id = aicp_associates.asso_id'); 
		$this->db->join('aicp_associate_courses' ,'aicp_associate_courses.asc_id = aicp_associate_courses_mapping.asc_id'); 
		if($asso_id !='')
		{
			$this->db->where('aicp_associates.asso_id' , $asso_id);
		}
		
		$result = $this->db->get()->result_array();		
		return $result;	
	}

    /*
        @Description : Update data
        @Author      : Ankita Mandlik
        @Date        : 25-04-2021
    */

    public function update_course_mapping_data($id,$data=array())
    {   	

    	if(is_array($id))
    	{
    		$this->db->where_in('id',$id);
    	}
    	else
    	{
    		$this->db->where('id',$id);
    	}

    	if($this->db->update('aicp_associate_courses_mapping',$data))
    	{
    		return TRUE;
    	}
    	else
    	{
    		return FALSE;
    	}
    }

    /*
	@Description 	: List of NON AICPE Courses
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 25-04-2021
	*/

	public function get_non_aicp_courses_data($type="data",$where_data)
	{
		$table = "aicp_non_aicpe_courses";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{			
			$this->db->select('no_id');		
		}
		
		$this->db->from($table);	
		$this->db->where('no_status','1');

		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('no_code', addslashes($where_data['search']));
			$this->db->or_like('no_name', addslashes($where_data['search']));
			//$this->db->or_like('c_currency', addslashes($where_data['search']));			
			$this->db->group_end();
		}

		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('no_id','no_code','no_name','no_status','no_deleted_status')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('no_id','desc');
			}
		}

		$this->db->group_by('no_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	
		return $result;	
	}

	/*
	    @Description : Delete course (single and bulk)
	    @Author      : Ankita Mandlik
	    @Date        : 30-04-2021
	*/

    public function delete_non_aicep_course($id,$user_id)
    {
        $data = array(
            'no_status'    => '0',
            //'is_active'    => '0',
            'modified_by'   => $user_id,
            'modified_date' => get_inserted_date_time()
            );

        if(is_array($id))
        {
            $this->db->where_in('no_id',$id);
        }
        else
        {
            $this->db->where('no_id',$id);
        }

        if($this->db->update('aicp_non_aicpe_courses',$data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

	/*
	    @Description :get cuestion bank
	    @Author      : Ankita Mandlik
	    @Date        : 30-04-2021
	*/

	public function question_bank($type,$where_data){
		$table = "aicp_question_bank";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('qa_id');		
		}

		
		$this->db->where('qa_deleted_status','0');
		$this->db->join('aicp_subjects','sub_id=qa_sub_id');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('qa_created_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('qa_created_date <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('sub_title', addslashes($where_data['search']));			
			$this->db->or_like('qa_question', addslashes($where_data['search']));			
			$this->db->group_end();
		}

		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('qa_id','qa_question','sub_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('qa_id','desc');
			}
		}

		$this->db->group_by('qa_id');
			
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();		
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
		return $result;
	
	}

	public function add_question($img_1,$img_2,$img_3,$img_4,$que_img){
		date_default_timezone_set('Asia/Kolkata');
		$table = "aicp_question_bank";
		$data = array(  'qa_sub_id'=>$this->input->post('subject'),
						'qa_question'=>ucfirst($this->input->post('question')),
						'qa_que_img'=>$que_img,
						'qa_option_1'=>$this->input->post('option_1'),
						'qa_option_2'=>$this->input->post('option_2'),
						'qa_option_3'=>$this->input->post('option_3'),
						'qa_option_4'=>$this->input->post('option_4'),
						'qa_option_1_img'=>$img_1,
						'qa_option_2_img'=>$img_2,
						'qa_option_3_img'=>$img_3,
						'qa_option_4_img'=>$img_4,
						'qa_correct_option'=>$this->input->post('correct_option'),
						'qa_created_date'=>date('Y-m-d H:i:s'));

		$res = $this->db->insert($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
		
	}

	public function edit_question($img_1,$img_2,$img_3,$img_4,$que_img){
		date_default_timezone_set('Asia/Kolkata');
		$table = "aicp_question_bank";
		$this->db->select('qa_que_img,qa_option_1_img,qa_option_2_img,qa_option_3_img,qa_option_4_img');
		$this->db->where('qa_id',$this->input->post('id'));
		$qry = $this->db->get($table)->row();
		if($que_img==""){
			$que_img = $qry->qa_que_img;
		}
		if($img_1==""){
			$img_1 = $qry->qa_option_1_img;
		}
		if($img_2==""){
			$img_2 = $qry->qa_option_2_img;
		}
		if($img_3==""){
			$img_3 = $qry->qa_option_3_img;
		}
		if($img_4==""){
			$img_4 = $qry->qa_option_4_img;
		}
		$data = array(  'qa_sub_id'=>$this->input->post('subject'),
						'qa_question'=>ucfirst($this->input->post('question')),
						'qa_que_img'=>$que_img,
						'qa_option_1'=>$this->input->post('option_1'),
						'qa_option_2'=>$this->input->post('option_2'),
						'qa_option_3'=>$this->input->post('option_3'),
						'qa_option_4'=>$this->input->post('option_4'),
						'qa_option_1_img'=>$img_1,
						'qa_option_2_img'=>$img_2,
						'qa_option_3_img'=>$img_3,
						'qa_option_4_img'=>$img_4,
						'qa_correct_option'=>$this->input->post('correct_option'),
						'qa_created_date'=>date('Y-m-d H:i:s'));

		$this->db->where('qa_id',$this->input->post('id'));
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
		
	}

	public function get_question_bank_byId($id){
		$table = "aicp_question_bank";
		$this->db->where('qa_deleted_status','0');
		$this->db->where('qa_id',$id);
		$res = $this->db->get($table);
		return $res->row_array();
	}

	public function delete_question_bank($id){
		$table = "aicp_question_bank";
		$data = array('qa_deleted_status'=>1);
		$this->db->where('qa_id',$id);
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
				return false;
			}
	}

	public function get_subjects(){
		$table = 'aicp_subjects';
		$this->db->where('sub_deleted_status','0');
		$res = $this->db->get($table); 
		return $res->result_array();
	}

	/*
	    @Description : Delete course material
	    @Author      : Ankita Mandlik
	    @Date        : 30-04-2021
	*/

    public function delete_course_material($id,$user_id)
    {
        $data = array(
            'is_deleted'    => '1',
            //'is_active'    => '0',
            'modified_by'   => $user_id,
            'modified_date' => get_inserted_date_time()
            );

        if(is_array($id))
        {
            $this->db->where_in('id',$id);
        }
        else
        {
            $this->db->where('id',$id);
        }

        if($this->db->update('aipce_course_material',$data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

     /*
	@Description 	: List of NON AICPE Courses
	@Author 		: Ankita Mandlik
	@input 			: 
	@Output 		: 
	@Date 			: 25-04-2021
	*/

	public function get_old_students($type="data",$where_data)
	{
		$table = "aicpe_student";

		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{			
			$this->db->select('id');		
		}
		
		$this->db->from($table);

		$this->db->where('status','0');
		$this->db->where('is_deleted','0');

		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('student_name', addslashes($where_data['search']));
			$this->db->or_like('certificate_no', addslashes($where_data['search']));					
			$this->db->group_end();
		}

		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$this->db->where('admission_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$this->db->where('admission_date <=', $where_data['end_date'].' 23:59:59');
		}	


		//pagination and sorting
		if(isset($where_data['per_page']) && $type == 'data')
		{
			$limit = $where_data['per_page'];

			if($where_data['page'] != 0)
			{
				$page = --$where_data['page'];
			}
			else
			{
				$page = $where_data['page'];
			}

			$this->db->limit($limit, $page*$limit);
		}


		if(isset($where_data['sort_by']) && $type == 'data')
		{
			// Set sorting
			if($where_data['sort_by'] != '' && $where_data['sort_direction'] != '')
			{				
				if(in_array($where_data['sort_by'], array('student_name','certificate_no','mobile_no','username','exam_date','certificate_date','admission_date','status')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('inserted_date','desc');
			}
		}

		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
		
		return $result;	
	}

	/*
	    @Description : Delete Old student
	    @Author      : Ankita Mandlik
	    @Date        : 15-05-2021
	*/

    public function delete_old_student($id,$user_id)
    {
        $data = array(
            'is_deleted'    => '1',
            //'is_active'    => '0',
            'modified_by'   => $user_id,
            'modified_date' => get_inserted_date_time()
            );

        if(is_array($id))
        {
            $this->db->where_in('id',$id);
        }
        else
        {
            $this->db->where('id',$id);
        }

        if($this->db->update('aicpe_student',$data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /*
    @Description    : get customer detail by id
    @Author         : Shantanu
    @Input          : 
    @Output         : 
    @Date           : 22-02-2018
    */
    public function get_product_detail_for_label($product_ids = array())
    {
        $this->db->select('id,sku,product_id');

        $this->db->from('product_master');

       // $this->db->where('product_id_type', 'upc');

       // $this->db->where_in('id', $product_ids);

        $result = $this->db->get()->result_array();

        return $result;
    }
}