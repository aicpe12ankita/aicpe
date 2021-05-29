<?php

class Admin_model_part_1 extends CI_Model{

/*------------------------ Marketing material code start here -------------------------------------*/
	
	public function marketing_material($type,$where_data){
		$table = "aicp_marketing_material";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('mm_id');		
		}

		
		$this->db->where('mm_deleted_status','0');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('mm_publish_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('mm_publish_date <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('mm_title', addslashes($where_data['search']));				
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
				if(in_array($where_data['sort_by'], array('mm_id ','mm_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('mm_id','desc');
			}
		}

		$this->db->group_by('mm_id');
			
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

	public function delete_marketing_material($id){
		$table = "aicp_marketing_material";
		$data = array('mm_deleted_status'=>1);
		$this->db->where('mm_id',$id);
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
				return false;
			}
	}

	public function add_marketing_material($img){
		
		date_default_timezone_set('Asia/Kolkata');

		$table = "aicp_marketing_material";
		$prev_img="";
		if($this->input->post('mm_id')!=""){ 
				$this->db->select('mm_image');
				$this->db->where('mm_id',$this->input->post('mm_id'));
				$res = $this->db->get($table)->row();
				$prev_img = $res->mm_image;
		}
		if($img!=""){
			$nflag = $img;
		}else{
			$nflag = $prev_img;
		}
		
		$data = array('mm_title'=>$this->input->post('title'),
						'mm_image'=>$nflag,
						'mm_status'=>$this->input->post('status'),
						'mm_publish_date'=>date('Y-m-d h:i:s'));

		if($this->input->post('mm_id')!=""){
			$this->db->where('mm_id',$this->input->post('mm_id'));
			$res = $this->db->update($table,$data);
		}else{
			$res = $this->db->insert($table,$data);
		}
		
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_marketing_material_byId($id){
		$table = "aicp_marketing_material";
		$this->db->where('mm_id',$id);
		$this->db->where('mm_deleted_status','0');
		$res = $this->db->get($table);
		return $res->row();
	}
/*------------------------ Marketing material code end here ---------------------------------------*/
/*------------------------ Birthdays and anniversaries code starts here ---------------------------*/
	
	public function add_birthday_and_anniversary($img){
		$table = "aicp_birthday_and_anniversary"; 
		$prev_img="";
		if($this->input->post('id')!=""){
				$this->db->select('ba_photo');
				$this->db->where('ba_id',$this->input->post('id'));
				$this->db->where('ba_deleted_status','0');
				$res = $this->db->get($table)->row();
				$prev_img = $res->ba_photo;
		}
		if($img!=""){
			$nflag = $img;
		}else{
			$nflag = $prev_img;
		}
		
		$data = array('ba_name'=>$this->input->post('ba_name'),
						'ba_organisation'=>$this->input->post('ba_organisation'),
						'ba_email'=>$this->input->post('ba_email'),
						'ba_mobile_1'=>$this->input->post('ba_mobile_1'),
						'ba_mobile_2'=>$this->input->post('ba_mobile_2'),
						'ba_anni_type'=>$this->input->post('customRadio'),
						'ba_birth_or_anni'=>$this->input->post('ba_birth_or_anni'),
						'ba_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('ba_date'))),
						'ba_country'=>$this->input->post('country'),
						'ba_state'=>$this->input->post('state'),
						'ba_district'=>$this->input->post('district'),
						'ba_city'=>$this->input->post('city'),
						'ba_photo'=>$nflag);
		
		if($this->input->post('id')!=""){
			$this->db->where('ba_id',$this->input->post('id'));
			$res = $this->db->update($table,$data);
		}else{
			$res = $this->db->insert($table,$data);
		}
		
		if($res){
			return true;
		}else{
			return false;
		}
	}

	
	public function birthday_anniversaries($type,$where_data)
	{ 
		$table = " aicp_birthday_and_anniversary";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('ba_id');		
		}

		$this->db->where('ba_deleted_status','0');
		$this->db->join('aicp_countries','c_id=ba_country');
		$this->db->join('aicp_states','s_id=ba_state');
		$this->db->join('aicp_districts','d_id=ba_district');
		$this->db->join('aicp_cities','ci_id=ba_city');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('ba_name', addslashes($where_data['search']));
			$this->db->or_like('ba_organisation', addslashes($where_data['search']));
			$this->db->or_like('ba_birth_or_anni', addslashes($where_data['search']));			
			$this->db->or_like('c_name', addslashes($where_data['search']));			
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('ci_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('ba_id', 'ba_name','ba_organisation','ba_birth_or_anni','c_name','s_name','ci_name','d_district_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('ba_id','desc');
			}
		}

		$this->db->group_by('ba_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	//print_r($this->db->last_query());
		return $result;	
	}

	public function get_birthday_and_anniversary_byId(){
		$table = " aicp_birthday_and_anniversary";

		$this->db->where('ba_id',$this->input->post('id'));
		$this->db->join('aicp_countries','c_id=ba_country');
		$this->db->join('aicp_states','s_id=ba_state');
		$this->db->join('aicp_districts','d_id=ba_district');
		$this->db->join('aicp_cities','ci_id=ba_city');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_birthday_and_anniversary($id){
		$table = " aicp_birthday_and_anniversary";
		$data = array('ba_deleted_status'=>'1');
		$this->db->where('ba_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------------ Birthdays and anniversaries code end here ------------------------------*/
	
/*-----------------------------------Admin staff code starts here--------------------------------*/
	public function get_all_admin_designation(){
		$table = ' admin_staff_designation';
		$this->db->where('asd_delete','0');
		$qry = $this->db->get($table);
		return $qry->result();
	}

	public function administrative_staff($type,$where_data)
	{ 
		$table = "aicp_admin_staff";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('as_id');		
		}

		$this->db->where('as_deleted_status','0');
		$this->db->where('as_staff_type','administrative');
		$this->db->join('aicp_countries','c_id=as_country');
		$this->db->join('aicp_states','s_id=as_state');
		$this->db->join('aicp_districts','d_id=as_district');
		$this->db->join('aicp_cities','ci_id=as_city');
		$this->db->join('admin_staff_designation','asd_id=as_designation');
		$this->db->join('aicp_photo_id_type','ph_id=as_id_type','left');
		$this->db->join('aicp_qualification','q_id=as_education','left');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('as_created_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('as_created_date <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('as_firstName', addslashes($where_data['search']));
			$this->db->or_like('as_middleNmae', addslashes($where_data['search']));
			$this->db->or_like('as_lastName', addslashes($where_data['search']));
			$this->db->or_like('as_education', addslashes($where_data['search']));
			$this->db->or_like('as_whats_app', addslashes($where_data['search']));			
			$this->db->or_like('asd_title', addslashes($where_data['search']));			
			$this->db->or_like('q_title', addslashes($where_data['search']));			
			$this->db->or_like('ph_title', addslashes($where_data['search']));			
			$this->db->or_like('c_name', addslashes($where_data['search']));			
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('ci_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('as_id', 'as_firstName','as_mobile_1','asd_title','c_name','s_name','ci_name','d_district_name','ph_title','q_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('as_id','desc');
			}
		}

		$this->db->group_by('as_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	//print_r($this->db->last_query());
		return $result;	
	}

	public function add_admin_staff($profile_img,$id_proof){
		
		date_default_timezone_set('Asia/Kolkata');
		$pro_img = $profile_img;
		$table = "aicp_admin_staff";
		
		$data = array('as_firstName'=> $this->input->post('fname'),
						'as_middleNmae'=> $this->input->post('mname'),
						'as_lastName'=> $this->input->post('lname'),
						'as_user_photo'=>$pro_img,
						'as_id_proof'=>$id_proof,
						'as_mobile_1'=>$this->input->post('mobile_1'),
						'as_mobile_2'=>$this->input->post('mobile_2'),
						'as_whats_app'=>$this->input->post('whatsapp_no'),
						'as_email'=>$this->input->post('email'),
						'as_gender'=>$this->input->post('gender'),
						'as_date_of_birth'=>date('Y-m-d',strtotime($this->input->post('dob'))),
						'as_temp_add'=>$this->input->post('temp_address'),
						'as_perm_add'=>$this->input->post('perm_address'),
						'as_country'=>$this->input->post('country'),
						'as_state'=>$this->input->post('state'),
						'as_district'=>$this->input->post('district'),
						'as_city'=>$this->input->post('city'),
						'as_pincode'=>$this->input->post('pincode'),
						'as_education'=>$this->input->post('education'),
						'as_password'=>$this->input->post('password'),
						'as_designation'=>$this->input->post('designation'),
						'as_incentive_eligibility'=> $this->input->post('incentive')!=NULL ? $this->input->post('incentive') : "",
						'as_status'=>$this->input->post('status'),
						'as_role'=>$this->input->post('as_role'),
						'as_id_no'=>$this->input->post('as_id_no'),
						'as_id_type'=>$this->input->post('photo_id_type'),
						'as_staff_type'=>$this->input->post('staff_type'),
						'as_created_date'=>date('Y-m-d h:i:s'));

		
		$res = $this->db->insert($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function edit_admin_staff($profile_img,$id_proof){
		//echo $profile_img;
		date_default_timezone_set('Asia/Kolkata');
		$pro_img=$id_pro="";
		$table = "aicp_admin_staff";
		
				$this->db->select('as_user_photo,as_id_proof');
				$this->db->where('as_id',$this->input->post('id'));
				$this->db->where('as_staff_type','administrative');
				$res = $this->db->get($table)->row();
				//print_r($res);
		
		if($profile_img==""){
			$pro_img = $res->as_user_photo;
		}else{
			$pro_img = $profile_img;
		}
		if($id_proof==""){
			$id_pro = $res->as_id_proof;
		}else{
			$id_pro = $id_proof;
		}
		
		$data = array('as_firstName'=> $this->input->post('fname'),
						'as_middleNmae'=> $this->input->post('mname'),
						'as_lastName'=> $this->input->post('lname'),
						'as_user_photo'=>$pro_img,
						'as_id_proof'=>$id_pro,
						'as_mobile_1'=>$this->input->post('mobile_1'),
						'as_mobile_2'=>$this->input->post('mobile_2'),
						'as_whats_app'=>$this->input->post('whatsapp_no'),
						'as_email'=>$this->input->post('email'),
						'as_gender'=>$this->input->post('gender'),
						'as_date_of_birth'=>date('Y-m-d',strtotime($this->input->post('dob'))),
						'as_temp_add'=>$this->input->post('temp_address'),
						'as_perm_add'=>$this->input->post('perm_address'),
						'as_country'=>$this->input->post('country'),
						'as_state'=>$this->input->post('state'),
						'as_district'=>$this->input->post('district'),
						'as_city'=>$this->input->post('city'),
						'as_pincode'=>$this->input->post('pincode'),
						'as_education'=>$this->input->post('education'),
						'as_password'=>$this->input->post('password'),
						'as_designation'=>$this->input->post('designation'),
						'as_incentive_eligibility'=>$this->input->post('incentive')!=NULL ? $this->input->post('incentive') : "",
						'as_status'=>$this->input->post('status'),
						'as_role'=>$this->input->post('as_role'),
						'as_id_no'=>$this->input->post('as_id_no'),
						'as_id_type'=>$this->input->post('photo_id_type'),
						'as_staff_type'=>$this->input->post('staff_type'),
						'as_created_date'=>date('Y-m-d h:i:s'));

		$this->db->where('as_id',$this->input->post('id'));
		$res = $this->db->update($table,$data);
		
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_admin_staff_byId($id){
		$table = "aicp_admin_staff";
		$this->db->where('as_id',$id);
		$this->db->where('as_deleted_status','0');
		$this->db->where('as_staff_type','administrative');
		$this->db->join('aicp_countries','c_id=as_country');
		$this->db->join('aicp_states','s_id=as_state');
		$this->db->join('aicp_districts','d_id=as_district');
		$this->db->join('aicp_cities','ci_id=as_city');
		//$this->db->join('admin_staff_designation', 'asd_id=as_designation');
		//$this->db->join('aicp_photo_id_type','ph_id=as_id_type','left');
		//$this->db->join('aicp_qualification','q_id=as_education','left');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_admin_staff($id){
		$table = " aicp_admin_staff";
		$data = array('as_deleted_status'=>'1');
		$this->db->where('as_staff_type','administrative');
		$this->db->where('as_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}


	public function staff_field($type,$where_data)
	{ 
		$table = "aicp_admin_staff";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('as_id');		
		}

		$this->db->where('as_deleted_status','0');
		$this->db->where('as_staff_type','field');
		$this->db->join('aicp_countries','c_id=as_country');
		$this->db->join('aicp_states','s_id=as_state');
		$this->db->join('aicp_districts','d_id=as_district');
		$this->db->join('aicp_cities','ci_id=as_city');
		$this->db->join('admin_staff_designation','asd_id=as_designation');
		$this->db->join('aicp_photo_id_type','ph_id=as_id_type','left');
		$this->db->join('aicp_qualification','q_id=as_education','left');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('as_created_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('as_created_date <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('as_firstName', addslashes($where_data['search']));
			$this->db->or_like('as_middleNmae', addslashes($where_data['search']));
			$this->db->or_like('as_lastName', addslashes($where_data['search']));
			$this->db->or_like('as_education', addslashes($where_data['search']));
			$this->db->or_like('as_whats_app', addslashes($where_data['search']));			
			$this->db->or_like('asd_title', addslashes($where_data['search']));			
			$this->db->or_like('q_title', addslashes($where_data['search']));			
			$this->db->or_like('ph_title', addslashes($where_data['search']));			
			$this->db->or_like('c_name', addslashes($where_data['search']));			
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('ci_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('as_id', 'as_firstName','as_mobile_1','asd_title','c_name','s_name','ci_name','d_district_name','ph_title','q_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('as_id','desc');
			}
		}

		$this->db->group_by('as_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	//print_r($this->db->last_query());
		return $result;	
	}

	public function add_staff_field($profile_img,$id_proof){
		
		date_default_timezone_set('Asia/Kolkata');
		$pro_img = $profile_img;
		$table = "aicp_admin_staff";
		
		$data = array('as_firstName'=> $this->input->post('fname'),
						'as_middleNmae'=> $this->input->post('mname'),
						'as_lastName'=> $this->input->post('lname'),
						'as_user_photo'=>$pro_img,
						'as_id_proof'=>$id_proof,
						'as_mobile_1'=>$this->input->post('mobile_1'),
						'as_mobile_2'=>$this->input->post('mobile_2'),
						'as_whats_app'=>$this->input->post('whatsapp_no'),
						'as_email'=>$this->input->post('email'),
						'as_gender'=>$this->input->post('gender'),
						'as_date_of_birth'=>date('Y-m-d',strtotime($this->input->post('dob'))),
						'as_temp_add'=>$this->input->post('temp_address'),
						'as_perm_add'=>$this->input->post('perm_address'),
						'as_country'=>$this->input->post('country'),
						'as_state'=>$this->input->post('state'),
						'as_district'=>$this->input->post('district'),
						'as_city'=>$this->input->post('city'),
						'as_pincode'=>$this->input->post('pincode'),
						'as_education'=>$this->input->post('education'),
						'as_password'=>$this->input->post('password'),
						'as_designation'=>$this->input->post('designation'),
						'as_incentive_eligibility'=>$this->input->post('incentive')!=NULL ? $this->input->post('incentive') : "",
						'as_status'=>$this->input->post('status'),
						'as_role'=>$this->input->post('as_role'),
						'as_id_no'=>$this->input->post('as_id_no'),
						'as_id_type'=>$this->input->post('photo_id_type'),
						'as_staff_type'=>$this->input->post('staff_type'),
						'as_created_date'=>date('Y-m-d h:i:s'));

		
		$res = $this->db->insert($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function edit_staff_field($profile_img,$id_proof){
		//echo $profile_img;
		date_default_timezone_set('Asia/Kolkata');
		$pro_img=$id_pro="";
		$table = "aicp_admin_staff";
		
				$this->db->select('as_user_photo,as_id_proof');
				$this->db->where('as_id',$this->input->post('id'));
				$this->db->where('as_staff_type','field');
				$res = $this->db->get($table)->row();
		
		if($profile_img==""){
			$pro_img = $res->as_user_photo;
		}else{
			$pro_img = $profile_img;
		}
		if($id_proof==""){
			$id_pro = $res->as_id_proof;
		}else{
			$id_pro = $id_proof;
		}
		
		$data = array('as_firstName'=> $this->input->post('fname'),
						'as_middleNmae'=> $this->input->post('mname'),
						'as_lastName'=> $this->input->post('lname'),
						'as_user_photo'=>$pro_img,
						'as_id_proof'=>$id_pro,
						'as_mobile_1'=>$this->input->post('mobile_1'),
						'as_mobile_2'=>$this->input->post('mobile_2'),
						'as_whats_app'=>$this->input->post('whatsapp_no'),
						'as_email'=>$this->input->post('email'),
						'as_gender'=>$this->input->post('gender'),
						'as_date_of_birth'=>date('Y-m-d',strtotime($this->input->post('dob'))),
						'as_temp_add'=>$this->input->post('temp_address'),
						'as_perm_add'=>$this->input->post('perm_address'),
						'as_country'=>$this->input->post('country'),
						'as_state'=>$this->input->post('state'),
						'as_district'=>$this->input->post('district'),
						'as_city'=>$this->input->post('city'),
						'as_pincode'=>$this->input->post('pincode'),
						'as_education'=>$this->input->post('education'),
						'as_password'=>$this->input->post('password'),
						'as_designation'=>$this->input->post('designation'),
						'as_incentive_eligibility'=>$this->input->post('incentive')!=NULL ? $this->input->post('incentive') : "",
						'as_status'=>$this->input->post('status'),
						'as_role'=>$this->input->post('as_role'),
						'as_id_no'=>$this->input->post('as_id_no'),
						'as_id_type'=>$this->input->post('photo_id_type'),
						'as_staff_type'=>$this->input->post('staff_type'),
						'as_created_date'=>date('Y-m-d h:i:s'));

		$this->db->where('as_id',$this->input->post('id'));
		$res = $this->db->update($table,$data);
		
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_staff_field($id){
		$table = "aicp_admin_staff";
		$this->db->where('as_id',$id);
		$this->db->where('as_deleted_status','0');
		$this->db->where('as_staff_type','field');
		$this->db->join('aicp_countries','c_id=as_country');
		$this->db->join('aicp_states','s_id=as_state');
		$this->db->join('aicp_districts','d_id=as_district');
		$this->db->join('aicp_cities','ci_id=as_city');
		//$this->db->join('admin_staff_designation', 'asd_id=as_designation');
		//$this->db->join('aicp_photo_id_type','ph_id=as_id_type','left');
		//$this->db->join('aicp_qualification','q_id=as_education','left');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_staff_field($id){
		$table = " aicp_admin_staff";
		$data = array('as_deleted_status'=>'1');
		$this->db->where('as_staff_type','field');
		$this->db->where('as_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function agent_staff($type,$where_data)
	{ 
		$table = "aicp_admin_staff";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('as_id');		
		}

		$this->db->where('as_deleted_status','0');
		$this->db->where('as_staff_type','agent');
		$this->db->join('aicp_countries','c_id=as_country');
		$this->db->join('aicp_states','s_id=as_state');
		$this->db->join('aicp_districts','d_id=as_district');
		$this->db->join('aicp_cities','ci_id=as_city');
		$this->db->join('admin_staff_designation','asd_id=as_designation');
		$this->db->join('aicp_photo_id_type','ph_id=as_id_type','left');
		$this->db->join('aicp_qualification','q_id=as_education','left');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('as_created_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('as_created_date <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('as_firstName', addslashes($where_data['search']));
			$this->db->or_like('as_middleNmae', addslashes($where_data['search']));
			$this->db->or_like('as_lastName', addslashes($where_data['search']));
			$this->db->or_like('as_education', addslashes($where_data['search']));
			$this->db->or_like('as_whats_app', addslashes($where_data['search']));			
			$this->db->or_like('asd_title', addslashes($where_data['search']));			
			$this->db->or_like('q_title', addslashes($where_data['search']));			
			$this->db->or_like('ph_title', addslashes($where_data['search']));			
			$this->db->or_like('c_name', addslashes($where_data['search']));			
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('ci_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('as_id', 'as_firstName','as_mobile_1','asd_title','c_name','s_name','ci_name','d_district_name','ph_title','q_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('as_id','desc');
			}
		}

		$this->db->group_by('as_id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result();			
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
	//print_r($this->db->last_query());
		return $result;	
	}

	public function add_staff_agents($profile_img,$id_proof){
		
		date_default_timezone_set('Asia/Kolkata');
		$pro_img = $profile_img;
		$table = "aicp_admin_staff";
		
		$data = array('as_firstName'=> $this->input->post('fname'),
						'as_middleNmae'=> $this->input->post('mname'),
						'as_lastName'=> $this->input->post('lname'),
						'as_user_photo'=>$pro_img,
						'as_id_proof'=>$id_proof,
						'as_mobile_1'=>$this->input->post('mobile_1'),
						'as_mobile_2'=>$this->input->post('mobile_2'),
						'as_whats_app'=>$this->input->post('whatsapp_no'),
						'as_email'=>$this->input->post('email'),
						'as_gender'=>$this->input->post('gender'),
						'as_date_of_birth'=>date('Y-m-d',strtotime($this->input->post('dob'))),
						'as_temp_add'=>$this->input->post('temp_address'),
						'as_perm_add'=>$this->input->post('perm_address'),
						'as_country'=>$this->input->post('country'),
						'as_state'=>$this->input->post('state'),
						'as_district'=>$this->input->post('district'),
						'as_city'=>$this->input->post('city'),
						'as_pincode'=>$this->input->post('pincode'),
						'as_education'=>$this->input->post('education'),
						'as_password'=>$this->input->post('password'),
						'as_designation'=>$this->input->post('designation'),
						'as_incentive_eligibility'=>$this->input->post('incentive')!=NULL ? $this->input->post('incentive') : "",
						'as_status'=>$this->input->post('status'),
						'as_role'=>$this->input->post('as_role'),
						'as_id_no'=>$this->input->post('as_id_no'),
						'as_id_type'=>$this->input->post('photo_id_type'),
						'as_staff_type'=>$this->input->post('staff_type'),
						'as_created_date'=>date('Y-m-d h:i:s'));

		
		$res = $this->db->insert($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function edit_staff_agents($profile_img,$id_proof){
		//echo $profile_img;
		date_default_timezone_set('Asia/Kolkata');
		$pro_img=$id_pro="";
		$table = "aicp_admin_staff";
		
				$this->db->select('as_user_photo,as_id_proof');
				$this->db->where('as_id',$this->input->post('id'));
				$this->db->where('as_staff_type','agent');
				$res = $this->db->get($table)->row();
		
		if($profile_img==""){
			$pro_img = $res->as_user_photo;
		}else{
			$pro_img = $profile_img;
		}
		if($id_proof==""){
			$id_pro = $res->as_id_proof;
		}else{
			$id_pro = $id_proof;
		}
		
		$data = array('as_firstName'=> $this->input->post('fname'),
						'as_middleNmae'=> $this->input->post('mname'),
						'as_lastName'=> $this->input->post('lname'),
						'as_user_photo'=>$pro_img,
						'as_id_proof'=>$id_pro,
						'as_mobile_1'=>$this->input->post('mobile_1'),
						'as_mobile_2'=>$this->input->post('mobile_2'),
						'as_whats_app'=>$this->input->post('whatsapp_no'),
						'as_email'=>$this->input->post('email'),
						'as_gender'=>$this->input->post('gender'),
						'as_date_of_birth'=>date('Y-m-d',strtotime($this->input->post('dob'))),
						'as_temp_add'=>$this->input->post('temp_address'),
						'as_perm_add'=>$this->input->post('perm_address'),
						'as_country'=>$this->input->post('country'),
						'as_state'=>$this->input->post('state'),
						'as_district'=>$this->input->post('district'),
						'as_city'=>$this->input->post('city'),
						'as_pincode'=>$this->input->post('pincode'),
						'as_education'=>$this->input->post('education'),
						'as_password'=>$this->input->post('password'),
						'as_designation'=>$this->input->post('designation'),
						'as_incentive_eligibility'=>$this->input->post('incentive')!=NULL ? $this->input->post('incentive') : "",
						'as_status'=>$this->input->post('status'),
						'as_role'=>$this->input->post('as_role'),
						'as_id_no'=>$this->input->post('as_id_no'),
						'as_id_type'=>$this->input->post('photo_id_type'),
						'as_staff_type'=>$this->input->post('staff_type'),
						'as_created_date'=>date('Y-m-d h:i:s'));

		$this->db->where('as_id',$this->input->post('id'));
		$res = $this->db->update($table,$data);
		
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_staff_agents($id){
		$table = "aicp_admin_staff";
		$this->db->where('as_id',$id);
		$this->db->where('as_deleted_status','0');
		$this->db->where('as_staff_type','agent');
		$this->db->join('aicp_countries','c_id=as_country');
		$this->db->join('aicp_states','s_id=as_state');
		$this->db->join('aicp_districts','d_id=as_district');
		$this->db->join('aicp_cities','ci_id=as_city');
		//$this->db->join('admin_staff_designation', 'asd_id=as_designation');
		//$this->db->join('aicp_photo_id_type','ph_id=as_id_type','left');
		//$this->db->join('aicp_qualification','q_id=as_education','left');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_staff_agents($id){
		$table = " aicp_admin_staff";
		$data = array('as_deleted_status'=>'1');
		$this->db->where('as_staff_type','agent');
		$this->db->where('as_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
}  