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

	public function getAllData($table){
		$this->db->order_by('id','desc');
		$this->db->limit(50);
		$result = $this->db->get($table);
		//print_r($this->db->last_query());exit();	
		return $result->result();
	}

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

	public function getAllCourseData($where_data)
	{
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

}