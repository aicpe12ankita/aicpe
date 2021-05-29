<?php

class Admin_model extends CI_Model{

	/*--------------------master table start here-----------------*/
	/*------------------countries code start here--------------------*/
	
	public function add_country($flag){
		$table = "aicp_countries"; $prev_img="";
		//echo $this->input->post('cid'); die;
		if($this->input->post('cid')!=""){
				$this->db->select('c_flag_img');
				$this->db->where('c_id',$this->input->post('cid'));
				$res = $this->db->get($table)->row();
				$prev_img = $res->c_flag_img;
		}
		if($flag!=""){
			$nflag = $flag;
		}else{
			$nflag = $prev_img;
		}
		
		$data = array('c_name'=>$this->input->post('country_name'),
						'c_phone_code'=>$this->input->post('phone_code'),
						'c_currency'=>$this->input->post('currency'),
						'c_indian_value'=>$this->input->post('currency_india_value'),
						'c_flag_img'=>$nflag);
		if($this->input->post('cid')!=""){
			$this->db->where('c_id',$this->input->post('cid'));
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

	
	public function get_countries($type,$where_data)
	{ 
		$table = "aicp_countries";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('c_id');		
		}

		$this->db->where('c_deleted','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('c_name', addslashes($where_data['search']));
			$this->db->or_like('c_phone_code', addslashes($where_data['search']));
			$this->db->or_like('c_currency', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('c_id', 'c_name','c_phone_code','c_currency')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('c_id','desc');
			}
		}

		$this->db->group_by('c_id');
		
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

	public function get_country_byID(){
		$table = "aicp_countries";
		$this->db->where('c_id',$this->input->post('id'));
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_country_byID($id){
		$table = "aicp_countries";
		$data = array('c_deleted'=>'1');
		$this->db->where('c_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	/*------------------countries code ends here--------------------*/
	/*------------------state code start here--------------------*/

	public function get_allCountries(){
		$this->db->where('c_deleted','0');
		$res = $this->db->get('aicp_countries');
		return $res->result();
	}

	public function add_state(){
		$table = "aicp_states"; 
		
		$data = array('s_country_id'=>$this->input->post('country_name'),
						's_name'=>$this->input->post('state_name'));
		$data_up = array('s_name'=>$this->input->post('state_name'));
		if($this->input->post('sid')!=""){
			$this->db->where('s_id',$this->input->post('sid'));
			$res = $this->db->update($table,$data_up);
		}else{
			$res = $this->db->insert($table,$data);
		}
		
		if($res){
			return true;
		}else{
			return false;
		} 
	}

	
	public function get_states($type,$where_data)
	{ 
		$table = "aicp_states";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('s_id');		
		}

		$this->db->where('s_delete','0');
		$this->db->join('aicp_countries','c_id=s_country_id');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('c_name', addslashes($where_data['search']));
			$this->db->or_like('s_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('s_id', 's_name','s_country_id')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('s_id','desc');
			}
		}

		$this->db->group_by('s_id');
		
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

	public function get_state_byID(){
		$table = "aicp_states";
		$this->db->where('s_id',$this->input->post('id'));
		$this->db->join('aicp_countries','c_id=s_country_id');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_state_byID($id){
		$table = "aicp_states";
		$data = array('s_delete'=>'1');
		$this->db->where('s_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------state code ends here--------------------*/
/*------------------Districts code starts here--------------------*/
	public function add_district(){
		$table = "aicp_districts"; 
		
		$data = array('d_country_id'=>$this->input->post('country_name'),
					  'd_state_id'=>$this->input->post('state_name'),
					  'd_district_name'=>$this->input->post('district_name'),
					);
		$data_up = array('d_district_name'=>$this->input->post('district_name'));
		if($this->input->post('did')!=""){
			$this->db->where('d_id',$this->input->post('did'));
			$res = $this->db->update($table,$data_up);
		}else{
			$res = $this->db->insert($table,$data);
		}
		
		if($res){
			return true;
		}else{
			return false;
		} 
	}

	
	public function get_districts($type,$where_data)
	{ 
		$table = "aicp_districts";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('d_id');		
		}

		$this->db->where('d_delete','0');
		$this->db->join('aicp_countries','c_id=d_country_id');
		$this->db->join('aicp_states','s_id=d_state_id');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('c_name', addslashes($where_data['search']));
			$this->db->or_like('s_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('d_id', 'd_state_id','d_country_id','d_district_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('d_id','desc');
			}
		}

		$this->db->group_by('d_id');
		
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

	public function get_district_byID(){
		$table = "aicp_districts";
		$this->db->where('d_id',$this->input->post('id'));
		$this->db->join('aicp_countries','c_id=d_country_id');
		$this->db->join('aicp_states','s_id=d_state_id');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_district_byID($id){
		$table = "aicp_districts";
		$data = array('d_delete'=>'1');
		$this->db->where('d_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_state_by_country($sid){
		$table = "aicp_states";
		$this->db->where('s_delete','0');
		$this->db->where('s_country_id',$sid);
		$this->db->order_by('s_name');
		$res = $this->db->get($table);
		return $res->result();
	}

	public function get_district_by_state($did){
		$table = "aicp_districts";
		$this->db->where('d_state_id',$did);
		$this->db->where('d_delete','0');
		$res = $this->db->get($table);
		return $res->result();

	}

	public function get_cities_by_district($did){
		$table = " aicp_cities";
		$this->db->where('ci_district_id',$did);
		$this->db->where('ci_delete','0');
		$res = $this->db->get($table);
		return $res->result();

	}
/*------------------Districts code ends here--------------------*/
/*------------------cities code start  here--------------------*/
	public function add_city(){
		$table = "aicp_cities"; 
		
		$data = array('ci_country_id'=>$this->input->post('ci_country'),
					  'ci_state_id'=>$this->input->post('ci_state'),
					  'ci_district_id'=>$this->input->post('ci_district'),
					  'ci_name'=>$this->input->post('ci_city'),
					);
		$data_up = array('ci_name'=>$this->input->post('ci_city'));
		if($this->input->post('ci_id')!=""){
			$this->db->where('ci_id',$this->input->post('ci_id'));
			$res = $this->db->update($table,$data_up);
		}else{
			$res = $this->db->insert($table,$data);
		}
		
		if($res){
			return true;
		}else{
			return false;
		} 
	}

	
	public function get_cities($type,$where_data)
	{ 
		$table = "aicp_cities";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('ci_id');		
		}

		$this->db->where('ci_delete','0');
		$this->db->join('aicp_countries','c_id=ci_country_id');
		$this->db->join('aicp_states','s_id=ci_state_id');
		$this->db->join(' aicp_districts','d_id=ci_district_id');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('c_name', addslashes($where_data['search']));
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));			
			$this->db->or_like('ci_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('ci_id', 'c_name','s_name','d_district_name','ci_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('ci_id','desc');
			}
		}

		$this->db->group_by('ci_id');
		
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

	public function get_city_byID(){
		$table = "aicp_cities";
		$this->db->where('ci_id',$this->input->post('id'));
		$this->db->where('ci_delete','0');
		$this->db->join('aicp_countries','c_id=ci_country_id');
		$this->db->join('aicp_states','s_id=ci_state_id');
		$this->db->join(' aicp_districts','d_id=ci_district_id');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_city_byID($id){
		$table = "aicp_cities";
		$data = array('ci_delete'=>'1');
		$this->db->where('ci_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------cities code ends here----------------------*/

/*------------------awards code starts here----------------------*/
	public function add_award(){
		$table = "aicp_awards"; 
		
		$data = array('aw_title'=>$this->input->post('title'),
						'aw_description'=>$this->input->post('description'));
		if($this->input->post('aw_id')!=""){
			$this->db->where('aw_id',$this->input->post('aw_id'));
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

	
	public function get_awards($type,$where_data)
	{ 
		$table = "aicp_awards";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('aw_id');		
		}

		$this->db->where('aw_delete','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('aw_title', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('aw_id', 'aw_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('aw_id','desc');
			}
		}

		$this->db->group_by('aw_id');
		
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

	public function get_award_byID(){
		$table = "aicp_awards";
		$this->db->where('aw_id',$this->input->post('id'));
		$this->db->where('aw_delete','0');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_award_byID($id){
		$table = "aicp_awards";
		$data = array('aw_delete'=>'1');
		$this->db->where('aw_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*---------------------------award code ends here---------------------------------*/
/*------------------Admin Staff Designation code starts here----------------------*/

	public function add_staff_designation(){
		$table = "admin_staff_designation"; 
		
		$data = array('asd_title'=>$this->input->post('title'),
						'asd_description'=>$this->input->post('description'));
		if($this->input->post('asd_id')!=""){
			$this->db->where('asd_id',$this->input->post('asd_id'));
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

	
	public function get_admin_staff_designation($type,$where_data)
	{ 
		$table = "admin_staff_designation";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('asd_id');		
		}

		$this->db->where('asd_delete','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('asd_title', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('asd_id', 'asd_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('asd_id','desc');
			}
		}

		$this->db->group_by('asd_id');
		
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

	public function get_staff_designation_byID(){
		$table = "admin_staff_designation";
		$this->db->where('asd_id',$this->input->post('id'));
		$this->db->where('asd_delete','0');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_staff_designation_byID($id){
		$table = "admin_staff_designation";
		$data = array('asd_delete'=>'1');
		$this->db->where('asd_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------Admin Staff Designation code ends here--------------------*/

/*------------------Institution Staff Designation code starts here----------------------*/

	public function add_institution_designation(){
		$table = "institution_staff_designation"; 
		
		$data = array('isd_title'=>$this->input->post('title'),
						'isd_description'=>$this->input->post('description'));
		if($this->input->post('isd_id')!=""){
			$this->db->where('isd_id',$this->input->post('isd_id'));
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

	
	public function get_institution_staff_designation($type,$where_data)
	{ 
		$table = "institution_staff_designation";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('isd_id');		
		}

		$this->db->where('isd_delete','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('isd_title', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('isd_id', 'isd_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('isd_id','desc');
			}
		}

		$this->db->group_by('isd_id');
		
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

	public function get_institution_designation_byID(){
		$table = "institution_staff_designation";
		$this->db->where('isd_id',$this->input->post('id'));
		$this->db->where('isd_delete','0');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_institution_designation_byID($id){
		$table = "institution_staff_designation";
		$data = array('isd_delete'=>'1');
		$this->db->where('isd_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------Institution Staff Designation code ends here--------------------*/

	

	/*------------------payment mode code starts here----------------------*/

	public function add_payment_mode(){
		$table = "aicp_payment_mode"; 
		
		$data = array('p_title'=>$this->input->post('title'));
		if($this->input->post('p_id')!=""){
			$this->db->where('p_id',$this->input->post('p_id'));
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

	
	public function payment_mode($type,$where_data)
	{ 
		$table = "aicp_payment_mode";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('p_id');		
		}

		$this->db->where('p_delete','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('p_title', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('p_id', 'p_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('p_id','desc');
			}
		}

		$this->db->group_by('p_id');
		
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

	public function get_payment_mode(){
		$table = "aicp_payment_mode";
		$this->db->where('p_id',$this->input->post('id'));
		$this->db->where('p_delete','0');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_payment_mode($id){
		$table = "aicp_payment_mode";
		$data = array('p_delete'=>'1');
		$this->db->where('p_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------payment mode code ends here--------------------*/

/*------------------transaction type code starts here----------------------*/

    public function add_transaction_type(){
        $table = "aicp_transaction_type"; 
        
        $data = array('t_title'=>$this->input->post('title'));
        if($this->input->post('t_id')!=""){
            $this->db->where('t_id',$this->input->post('t_id'));
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

    
    public function transaction_type($type,$where_data)
    { 
        $table = "aicp_transaction_type";
        if($type=='data')
        {
            $this->db->select('*');   
        }
        else
        {
            $this->db->select('t_id');      
        }

        $this->db->where('t_delete','0');
        $this->db->from($table);        
        
            
        
        if(isset($where_data['search']) && $where_data['search'] != '')
        {   
            $this->db->grout_start();
            $this->db->like('t_title', addslashes($where_data['search']));          
            $this->db->grout_end();
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
                if(in_array($where_data['sort_by'], array('t_id', 't_title')))
                {
                    $this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
                }
            }
            else
            {
                // Set default sorting
                $this->db->order_by('t_id','desc');
            }
        }

        $this->db->group_by('t_id');
        
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

    public function get_transaction_type(){
        $table = "aicp_transaction_type";
        $this->db->where('t_id',$this->input->post('id'));
        $this->db->where('t_delete','0');
        $res = $this->db->get($table);
        return $res->row();
    }

    

    public function delete_transaction_type($id){
        $table = "aicp_transaction_type";
        $data = array('t_delete'=>'1');
        $this->db->where('t_id',$id);
        
        $res = $this->db->update($table,$data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
/*------------------transaction type code ends here--------------------*/
/*------------------qualification type code starts here----------------------*/

    public function add_qualification(){
        $table = "aicp_qualification"; 
        
        $data = array('q_title'=>$this->input->post('title'));
        if($this->input->post('q_id')!=""){
            $this->db->where('q_id',$this->input->post('q_id'));
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

    
    public function qualification($type,$where_data)
    { 
        $table = "aicp_qualification";
        if($type=='data')
        {
            $this->db->select('*');   
        }
        else
        {
            $this->db->select('q_id');      
        }

        $this->db->where('q_delete','0');
        $this->db->from($table);        
        
            
        
        if(isset($where_data['search']) && $where_data['search'] != '')
        {   
            $this->db->grout_start();
            $this->db->like('q_title', addslashes($where_data['search']));          
            $this->db->grout_end();
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
                if(in_array($where_data['sort_by'], array('q_id', 'q_title')))
                {
                    $this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
                }
            }
            else
            {
                // Set default sorting
                $this->db->order_by('q_id','desc');
            }
        }

        $this->db->group_by('q_id');
        
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

    public function get_qualification(){
        $table = "aicp_qualification";
        $this->db->where('q_id',$this->input->post('id'));
        $this->db->where('q_delete','0');
        $res = $this->db->get($table);
        return $res->row();
    }

    

    public function delete_qualification($id){
        $table = "aicp_qualification";
        $data = array('q_delete'=>'1');
        $this->db->where('q_id',$id);
        
        $res = $this->db->update($table,$data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
/*------------------qualification code ends here--------------------*/
/*------------------photo id type code starts here----------------------*/

    public function add_photo_id_type(){
        $table = "aicp_photo_id_type"; 
        
        $data = array('ph_title'=>$this->input->post('title'));
        if($this->input->post('ph_id')!=""){
            $this->db->where('ph_id',$this->input->post('ph_id'));
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

    
    public function photo_id_type($type,$where_data)
    { 
        $table = "aicp_photo_id_type";
        if($type=='data')
        {
            $this->db->select('*');   
        }
        else
        {
            $this->db->select('ph_id');      
        }

        $this->db->where('ph_delete','0');
        $this->db->from($table);        
        
            
        
        if(isset($where_data['search']) && $where_data['search'] != '')
        {   
            $this->db->group_start();
            $this->db->like('ph_title', addslashes($where_data['search']));          
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
                if(in_array($where_data['sort_by'], array('ph_id', 'ph_title')))
                {
                    $this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
                }
            }
            else
            {
                // Set default sorting
                $this->db->order_by('ph_id','desc');
            }
        }

        $this->db->group_by('ph_id');
        
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

    public function get_photo_id_type(){
        $table = "aicp_photo_id_type";
        $this->db->where('ph_id',$this->input->post('id'));
        $this->db->where('ph_delete','0');
        $res = $this->db->get($table);
        return $res->row();
    }

    public function delete_photo_id_type($id){
        $table = "aicp_photo_id_type";
        $data = array('ph_delete'=>'1');
        $this->db->where('ph_id',$id);
        
        $res = $this->db->update($table,$data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
/*------------------photo id type code ends here--------------------*/

/*------------------book categories code starts here----------------------*/

    public function add_book_categories(){
        $table = "aicp_library_category"; 
        
        $data = array('category_name'=>$this->input->post('title'));
        if($this->input->post('id')!=""){
            $this->db->where('id',$this->input->post('id'));
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

    
    public function book_categories($type,$where_data)
    { 
        $table = "aicp_library_category";
        if($type=='data')
        {
            $this->db->select('*');   
        }
        else
        {
            $this->db->select('id');      
        }

        $this->db->where('delete_status','0');
        $this->db->from($table);        
        
            
        
        if(isset($where_data['search']) && $where_data['search'] != '')
        {   
            $this->db->group_start();
            $this->db->like('category_name', addslashes($where_data['search']));          
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
                if(in_array($where_data['sort_by'], array('id', 'category_name')))
                {
                    $this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
                }
            }
            else
            {
                // Set default sorting
                $this->db->order_by('id','desc');
            }
        }

        $this->db->group_by('id');
        
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

    public function get_book_categories(){
        $table = "aicp_library_category";
        $this->db->where('id',$this->input->post('id'));
        $this->db->where('delete_status','0');
        $res = $this->db->get($table);
        return $res->row();
    }

    

    public function delete_book_categories($id){
        $table = "aicp_library_category";
        $data = array('delete_status'=>'1');
        $this->db->where('id',$id);
        
        $res = $this->db->update($table,$data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
/*------------------book categories code ends here--------------------*/
/*------------------subject level code starts here--------------------*/
public function add_subject_level(){
		$table = "aicp_subject_level"; 
		
		$data = array('sl_title'=>$this->input->post('title'));
		if($this->input->post('sl_id')!=""){
			$this->db->where('sl_id',$this->input->post('sl_id'));
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

	
	public function subject_levels($type,$where_data)
	{ 
		$table = "aicp_subject_level";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('sl_id');		
		}

		$this->db->where('sl_deleted_status','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('sl_title', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('sl_id', 'sl_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('sl_id','desc');
			}
		}

		$this->db->group_by('sl_id');
		
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

	public function get_subject_level(){
		$table = "aicp_subject_level";
		$this->db->where('sl_id',$this->input->post('id'));
		$this->db->where('sl_deleted_status','0');
		$res = $this->db->get($table);
		return $res->row();
	}

	public function get_all_subjects_level(){
		$table = "aicp_subject_level";
		$this->db->where('sl_deleted_status','0');
		$this->db->order_by('sl_id','desc');
		$res = $this->db->get($table);
		return $res->result();
	}	

	public function delete_subject_level($id){
		$table = "aicp_subject_level";
		$data = array('sl_deleted_status'=>'1');
		$this->db->where('sl_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------subject level code ends here-------------------------------*/
/*----------------------subject  code starts here----------------------------*/

	public function add_subject($uploadedImage){
		date_default_timezone_set("Asia/Kolkata");
		$table = "aicp_subjects"; 

		if($this->input->post('id')!=""){
			$this->db->select('sub_notes');
			$this->db->where('sub_deleted_status','0');
			$this->db->where('sub_id',$this->input->post('id'));
			$res = $this->db->get('aicp_subjects');
			$notes = $res->row()->sub_notes;

			if(!isset($uploadedImage) && $uploadedImage==""){
				$uploadedImage= $notes;
			}
		}
		$data = array('sub_code'=>$this->input->post('sub_code'),
						'sub_title'=>$this->input->post('sub_title'),
						'sub_level'=>$this->input->post('sub_level'),
						'sub_eligibility'=>$this->input->post('content'),
						'sub_description'=>$this->input->post('sub_description'),
						'sub_preparedBy'=>$this->input->post('sub_preparedBy'),
						'sub_notes'=>$uploadedImage,
						'sub_notes_remarks'=>$this->input->post('sub_notes_remarks'),
						'sub_links'=>$this->input->post('sub_links'),
						'sub_links_remarks'=>$this->input->post('sub_links_remarks'),
						'sub_youtube_links'=>$this->input->post('sub_youtube_links'),
						'sub_youtube_links_remarks'=> $this->input->post('sub_youtube_links_remarks'),
						'sub_created_date'=>date('Y-m-d H:i:s'));
		
		if($this->input->post('sub_id')!=""){
			$this->db->where('sub_id',$this->input->post('sub_id'));
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

	public function get_all_subjects($type,$where_data)
	{ 
		$table = "aicp_subjects";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('sub_id');		
		}

		$this->db->where('sub_deleted_status','0');
		$this->db->join('aicp_subject_level','sl_id=sub_level');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('sub_title', addslashes($where_data['search']));			
			$this->db->or_like('sl_title', addslashes($where_data['search']));			
			$this->db->or_like('sub_code', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('sub_id', 'sub_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('sub_id','desc');
			}
		}

		$this->db->group_by('sub_id');
		
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

	public function get_subject_byID(){
		$table = "aicp_subjects";
		$this->db->where('sub_id',$this->input->post('id'));
		$this->db->where('sub_deleted_status','0');
		$res = $this->db->get($table);
		return $res->row();
	}

	public function delete_subject($id){
		$table = "aicp_subjects";
		$data = array('sub_deleted_status'=>'1');
		$this->db->where('sub_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------subject  code ends here---------------------------------------*/
/*------------------course types  code ends here---------------------------------------*/
	 public function add_course_type(){
        $table = "aicp_course_types"; 
        
        $data = array('ct_title'=>$this->input->post('title'));
        if($this->input->post('ct_id')!=""){
            $this->db->where('ct_id',$this->input->post('ct_id'));
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

    
    public function course_types($type,$where_data)
    { 
        $table = "aicp_course_types";
        if($type=='data')
        {
            $this->db->select('*');   
        }
        else
        {
            $this->db->select('ct_id');      
        }

        $this->db->where('ct_deleted_status','0');
        $this->db->from($table);        
        
            
        
        if(isset($where_data['search']) && $where_data['search'] != '')
        {   
            $this->db->group_start();
            $this->db->like('ct_title', addslashes($where_data['search']));          
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
                if(in_array($where_data['sort_by'], array('ct_id', 'ct_title')))
                {
                    $this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
                }
            }
            else
            {
                // Set default sorting
                $this->db->order_by('ct_id','desc');
            }
        }

        $this->db->group_by('ct_id');
        
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

    public function get_course_type(){
        $table = "aicp_course_types";
        $this->db->where('ct_id',$this->input->post('id'));
        $this->db->where('ct_deleted_status','0');
        $res = $this->db->get($table);
        return $res->row();
    }

    

    public function delete_course_type($id){
        $table = "aicp_course_types";
        $data = array('ct_deleted_status'=>'1');
        $this->db->where('ct_id',$id);
        
        $res = $this->db->update($table,$data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
/*------------------course types  code ends here---------------------------------------*/
/*------------------aicpe world content code start here--------------------------*/
	
	public function add_world_content($flag){
		$table = "aicp_world_content"; $prev_img="";
		if($this->input->post('w_id')!=""){
				$this->db->select('w_image');
				$this->db->where('w_id',$this->input->post('w_id'));
				$res = $this->db->get($table)->row();
				$prev_img = $res->w_image;
		}
		if($flag!=""){
			$nflag = $flag;
		}else{
			$nflag = $prev_img;
		}
		
		$data = array('w_title'=>$this->input->post('title'),
						'w_description'=>$this->input->post('description'),
						'w_image'=>$nflag);
		if($this->input->post('w_id')!=""){
			$this->db->where('w_id',$this->input->post('w_id'));
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

	
	public function get_world_content($type,$where_data)
	{ 
		$table = "aicp_world_content";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('w_id');		
		}

		$this->db->where('w_delete','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('w_title', addslashes($where_data['search']));
			$this->db->or_like('w_description', addslashes($where_data['search']));		
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
				if(in_array($where_data['sort_by'], array('w_id', 'w_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('w_id','desc');
			}
		}

		$this->db->group_by('w_id');
		
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

	public function get_world_content_byID(){
		$table = "aicp_world_content";
		$this->db->where('w_id',$this->input->post('id'));
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_world_content_byID($id){
		$table = "aicp_world_content";
		$data = array('w_delete'=>'1');
		$this->db->where('w_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	/*------------------aicpe world content code ends here--------------------*/
	/*------------------currency converter code starts here--------------------*/

	public function get_currencies(){
		$this->db->where('c_deleted','0');
		$qry = $this->db->get('aicp_countries');
		return $qry->result();
	}
	public function convert_currency(){
		$this->db->where('c_deleted','0');
		$this->db->where('c_id',$this->input->post('currency'));
		$qry = $this->db->get('aicp_countries');
		$qry1 =  $qry->row();
		$output = $this->input->post('ammount')*$qry1->c_indian_value;
		return $output;
	}
	/*------------------currency converter code ends here--------------------*/

	
/*------------------institutions remarks code starts here----------------------*/
	public function get_all_institutions(){
		$this->db->where('deleted_status','0');
		$this->db->where('status','Block');
		$res = $this->db->get('institutions');
		return $res->result();
	}

	public function add_institutions_remarks(){
		$table = "institutions_remarks"; 
		
		$data = array('ir_inst'=>$this->input->post('inst'),
						'ir_description'=>$this->input->post('description'));
		if($this->input->post('ir_id')!=""){
			$this->db->where('ir_id',$this->input->post('ir_id'));
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

	
	public function get_inst_remarks_all($type,$where_data)
	{ 
		$table = "institutions_remarks";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('ir_id');		
		}

		$this->db->where('ir_delete','0');
		$this->db->join('institutions','id=ir_inst');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('inst_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('ir_id', 'inst_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('ir_id','desc');
			}
		}

		$this->db->group_by('ir_id');
		
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

	public function get_institutions_remarks(){
		$table = "institutions_remarks";
		$this->db->where('ir_id',$this->input->post('id'));
		$this->db->where('ir_delete','0');
		$this->db->join('institutions','id=ir_inst');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_institutions_remarks($id){
		$table = "institutions_remarks";
		$data = array('ir_delete'=>'1');
		$this->db->where('ir_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}
/*------------------institutions remarks code ends here--------------------*/
/*------------------institutions role management code start here--------------------*/

	public function add_role_institute(){
		$table = 'institutions';
		$priv = implode(',',$this->input->post('privleges'));
		$data = array('privileges'=>$priv);
		$this->db->where('id',$this->input->post('user_select'));
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}
	}

	public function get_role_institute(){
		$table = 'institutions';
		$this->db->where('id',$this->input->post('id'));
		$this->db->where('deleted_status','0');
		$qry = $this->db->get($table);
		return $qry->row();
	}
/*------------------institutions role management code ends here--------------------*/
/*------------------institutions staff code start here--------------------*/
	
	public function get_inst_staff($type,$where_data)
	{ 
		$table = "aicp_institutions_staff";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('st_id');		
		}

		$this->db->where('st_deleted_status','0');
		$this->db->join('aicp_countries','c_id=st_country');
		$this->db->join('aicp_states','s_id=st_state');
		$this->db->join('aicp_districts','d_id=st_district');
		$this->db->join('aicp_cities','ci_id=st_city');
		$this->db->join('institution_staff_designation','isd_id=st_designation');
		$this->db->join('institutions','id=st_inst_id');
		$this->db->join('aicp_photo_id_type','ph_id=st_photo_id_type','left');
		$this->db->join('aicp_qualification','q_id=st_qualification','left');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('st_created_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('st_created_date <=', $where_data['end_date'].' 23:59:59');
		}	
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('inst_name', addslashes($where_data['search']));			
			$this->db->like('st_name', addslashes($where_data['search']));			
			$this->db->like('c_name', addslashes($where_data['search']));			
			$this->db->like('s_name', addslashes($where_data['search']));			
			$this->db->like('d_district_name', addslashes($where_data['search']));			
			$this->db->like('ci_name', addslashes($where_data['search']));			
			$this->db->like('isd_title', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('st_id','st_name','inst_name','c_name','s_name','d_district_name','ci_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('st_id','desc');
			}
		}

		$this->db->group_by('st_id');
		
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
/*------------------institutions staff code start here--------------------*/
/*------------------Admin AICPE Associates code start here--------------------*/
/*------------------Admin AICPE Associates code start here--------------------*/


/*--------------------------------institutions crud  code start here-------------------*/

	

	public function getallinstitution_designations(){
		$table = "institution_staff_designation";
		$this->db->where('isd_delete','0');
		$res = $this->db->get($table);
		return $res->result();
	}

	public function get_allqualifications(){
        $table = "aicp_qualification";
        $this->db->where('q_delete','0');
        $res = $this->db->get($table);
        return $res->result();
    }

     public function getallphoto_id_types(){
        $table = "aicp_photo_id_type";
        $this->db->where('ph_delete','0');
        $res = $this->db->get($table);
        return $res->result();
    }

    public function add_institute(){
    	if($this->input->post('institution_logo')==""){
	 		$logo = "";
	 	}else{
	 		$logo=$this->input->post('institution_logo');
	 	}
	 	if(json_encode($this->input->post('inst_gallery'))==""){
	 		$gallery = "";
	 	}else{
	 		$gallery=json_encode($this->input->post('inst_gallery'));
	 	}
	 	if($this->input->post('owner_photo')==""){
	 		$owner_photo = "";
	 	}else{
	 		$owner_photo=$this->input->post('owner_photo');
	 	}
	 	if($this->input->post('photo_id_proof')==""){
	 		$id_proof = "";
	 	}else{
	 		$id_proof=$this->input->post('photo_id_proof');
	 	}
		$data = array('inst_name'=>$this->input->post('inst_name'),
						'owner_name'=>$this->input->post('owner_name'),
						'atc_code'=>$this->input->post('inst_code'),
						'designation'=>$this->input->post('designation'),
						'email'=>$this->input->post('email'),
						'mobile_1'=>$this->input->post('mobile_1'),
						'mobile_2'=>$this->input->post('mobile_2'),
						'whatsapp_no'=>$this->input->post('whatsapp_no'),
						'dete_of_birth'=>date('Y-m-d',strtotime($this->input->post('date_of_birth'))),
						'address'=>$this->input->post('address'),
						'gender'=>$this->input->post('gender'),
						'country'=>$this->input->post('country'),
						'state'=>$this->input->post('state'),
						//'district'=>$this->input->post('district'),
						'city'=>$this->input->post('city'),
						'pincode'=>$this->input->post('pin_code'),
						'photo_id_no'=>$this->input->post('photo_id_no'),
						'photo_id_type'=>$this->input->post('photo_id_type'),
						'inst_details'=>$this->input->post('inst_details'),
						'pan_no'=>$this->input->post('pan_no'),
						'gst_no'=>$this->input->post('gst_no'),
						'qualification'=>$this->input->post('qualification'),
						'staff_id'=>$this->input->post('staff_id'),
						'inst_logo'=>$logo,
						'owner_photo'=>$owner_photo,
						'photo_id'=>$id_proof,
						'inst_gallery'=>$gallery,
						'created_on'=>date('Y-m-d h:i:s'));
		$res = $this->db->insert('institutions',$data);
		if($res){
			$id = $this->db->insert_id();
  			$aicpeID = 'INST-00'.$id;
  			$org_pass = random_string('alnum',10);
  			$data = array('inst_code'=>$aicpeID,'password'=>$org_pass);
  			$this->db->where('id',$id);
  			$this->db->update('institutions',$data);
			return true;
		}

	}

	 public function edit_institute(){
	 	$logo=$gallery=$owner_photo=$id_proof="";
	 	$this->db->where('id',$this->input->post('id'));
	 	$query = $this->db->get('institutions')->row();
	 	if($this->input->post('institution_logo')==""){
	 		$logo = $query->inst_logo;
	 	}else{
	 		$logo=$this->input->post('institution_logo');
	 	}
	 	if($this->input->post('inst_gallery')=="" || $this->input->post('inst_gallery')==NULL){
	 		$gallery = $query->inst_gallery;
	 	}else{
	 		$gallery=json_encode($this->input->post('inst_gallery'));
	 	}
	 	if($this->input->post('owner_photo')==""){
	 		$owner_photo = $query->owner_photo;
	 	}else{
	 		$owner_photo=$this->input->post('owner_photo');
	 	}
	 	if($this->input->post('photo_id_proof')==""){
	 		$id_proof = $query->photo_id;
	 	}else{
	 		$id_proof=$this->input->post('photo_id_proof');
	 	}
		$data = array('inst_name'=>$this->input->post('inst_name'),
						'owner_name'=>$this->input->post('owner_name'),
						'atc_code'=>$this->input->post('inst_code'),
						'designation'=>$this->input->post('designation'),
						'email'=>$this->input->post('email'),
						'mobile_1'=>$this->input->post('mobile_1'),
						'mobile_2'=>$this->input->post('mobile_2'),
						'whatsapp_no'=>$this->input->post('whatsapp_no'),
						'dete_of_birth'=>date('Y-m-d',strtotime($this->input->post('date_of_birth'))),
						'address'=>$this->input->post('address'),
						'gender'=>$this->input->post('gender'),
						'country'=>$this->input->post('country'),
						'state'=>$this->input->post('state'),
						//'district'=>$this->input->post('district'),
						'city'=>$this->input->post('city'),
						'pincode'=>$this->input->post('pin_code'),
						'photo_id_no'=>$this->input->post('photo_id_no'),
						'photo_id_type'=>$this->input->post('photo_id_type'),
						'inst_details'=>$this->input->post('inst_details'),
						'pan_no'=>$this->input->post('pan_no'),
						'gst_no'=>$this->input->post('gst_no'),
						'qualification'=>$this->input->post('qualification'),
						'staff_id'=>$this->input->post('staff_id'),
						'inst_logo'=>$logo,
						'owner_photo'=>$owner_photo,
						'photo_id'=>$id_proof ,
						'inst_gallery'=>$gallery ,
						'created_on'=>date('Y-m-d h:i:s'));
		$this->db->where('id',$this->input->post('id'));
		$res = $this->db->update('institutions',$data);
		return $res;
	}

	public function get_allInstitutions($type,$where_data)
	{ 
		$table = "institutions";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('id');		
		}

		$this->db->where('deleted_status','0');
		$this->db->join('aicp_countries','c_id=country');
		$this->db->join('aicp_states','s_id=state');
		$this->db->join('aicp_districts','d_id=district');
		$this->db->join('aicp_cities','ci_id=city');
		$this->db->join('aicp_admin_staff','as_id =staff_id','left');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('publish_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('publish_date <=', $where_data['end_date'].' 23:59:59');
		}	

		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('inst_name', addslashes($where_data['search']));
			$this->db->or_like('owner_name', addslashes($where_data['search']));
			$this->db->or_like('c_name', addslashes($where_data['search']));
			$this->db->or_like('s_name', addslashes($where_data['search']));
			$this->db->or_like('d_district_name', addslashes($where_data['search']));
			$this->db->or_like('ci_name', addslashes($where_data['search']));
			$this->db->or_like('atc_code', addslashes($where_data['search']));
			$this->db->or_like('inst_code', addslashes($where_data['search']));
			$this->db->or_like('status', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('id', 'inst_name','state','district','city')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('id','desc');
			}
		}

		$this->db->group_by('id');
		
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

	public function approve_institute(){
		$data = array('approve_status'=>'1');
		$this->db->where('id',$this->input->post('id'));
		$qry = $this->db->update('institutions',$data);
		if($qry){
			return $this->input->post('id');
		}
	}

	public function hold_institute(){
		$table = 'institutions';
		$id = $this->input->post('id');
		$this->db->select('hold_status');
		$this->db->where('deleted_status','0');
		$this->db->where('id',$id);
		$res = $this->db->get($table)->row();
		if($res->hold_status=='Hold'){
			$data = array('hold_status'=>'Unhold');
		}
		if($res->hold_status=='Unhold'){
			$data = array('hold_status'=>'Hold');
		}

		
		$this->db->where('id',$id);
		$qry = $this->db->update($table,$data);
		if($qry){
			return $id;
		}
	}

	public function active_institute(){
		$table = 'institutions';
		$id = $this->input->post('id');
		$this->db->select('active_status');
		$this->db->where('deleted_status','0');
		$this->db->where('id',$id);
		$res = $this->db->get($table)->row();
		if($res->active_status=='Active'){
			$data = array('active_status'=>'Inactive');
		}
		if($res->active_status=='Inactive'){
			$data = array('active_status'=>'Active');
		}

		
		$this->db->where('id',$id);
		$qry = $this->db->update($table,$data);
		if($qry){
			return $id;
		}
	}

	public function block_institute(){
		$table = 'institutions';
		$id = $this->input->post('id');
		$this->db->select('status');
		$this->db->where('deleted_status','0');
		$this->db->where('id',$id);
		$res = $this->db->get($table)->row();
		if($res->status=='Block'){
			$data = array('status'=>'Unblock');
		}
		if($res->status=='Unblock'){
			$data = array('status'=>'Block');
		}

		
		$this->db->where('id',$id);
		$qry = $this->db->update($table,$data);
		if($qry){
			return $id;
		}
	}

	public function delete_institutions($id){
		$data = array('deleted_status'=>'1');
		$this->db->where('id',$id);
		$qry = $this->db->update('institutions',$data);
		if($qry){
			return true;
		}
	}

	public function get_institution_byId(){
		$this->db->where('id',$this->input->post('id'));
		$this->db->where('deleted_status','0');
		$this->db->where('status','Block');
		$this->db->join('aicp_countries','c_id=country');
		$this->db->join('aicp_states','s_id=state');
		$this->db->join('aicp_districts','d_id=district');
		$this->db->join('aicp_cities','ci_id=city');
		$qry = $this->db->get('institutions');
		return $qry->row();
	}

	public function login_to_inst($id){
		$this->db->where('id',$id);
		$this->db->where('deleted_status','0');
		$qry = $this->db->get('institutions');
		if($qry->num_rows()>0){
			$inst_data = $qry->row();
			$session = array('username'=>$inst_data->email,
							 'name'=>$inst_data->inst_name,
							 'validate'=>true);
			$this->session->set_userdata($session);
			return $qry->row();
		}
	}

	public function send_password_recovery_mail(){
		$this->db->select('id,inst_name,password,email');
		$this->db->where('id',$this->input->post('id'));
		$qry = $this->db->get('institutions');
		$res = $qry->row();

		$this->email->initialize(array('mailtype'=>'html'));
		$this->email->from('info@aicpe.ac.in', "AICPE Team");
		$this->email->to($res->email);
		$this->email->subject("Password Recovery Mail!");

		$message = "<div leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0' style='height:auto !important;width:100% !important; font-family: Helvetica,Arial,sans-serif !important; margin-bottom: 40px;'>
        <center>
            <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' style='max-width:600px; background-color:#ffffff;border:1px solid #e4e2e2;border-collapse:separate !important; border-radius:4px;border-spacing:0;color:#242128; margin:0;padding:40px;'
                heigth='auto'>
                <tbody>
                    <tr>
                        <td align='left' valign='center' style='padding-bottom:40px;border-top:0;height:100% !important;width:100% !important;'>
                            <img src='".base_url()."assets/logos/aicpe-logo.png' style='width:100%'>
                        </td>
                        <td align='right' valign='center' style='padding-bottom:40px;border-top:0;height:100% !important;width:100% !important;'>
                            <span style='color: #8f8f8f; font-weight: normal; line-height: 2; font-size: 14px;'><?php echo  date('d/m/Y'); ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' style='padding-top:10px;border-top:1px solid #e4e2e2'>
                            <h3 style='color:#303030; font-size:18px; line-height: 1.6; font-weight:500;'>Hi, ".$res->inst_name."</h3>
                            
                            <h3 style='color:#303030; font-size:18px; line-height: 1.6; font-weight:500;'>Your Password is </h3>
                            <p style='background-color:#f1f1f1; padding: 8px 15px; border-radius: 50px; display: inline-block; margin-bottom:20px; font-size: 14px;  line-height: 1.4; font-family: Courier New, Courier, monospace; margin-top:0'>".$res->password."</p>
						</td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>";
    //print_r($message); die;
	$this->email->message($message);
	$this->email->send();
	return true;
	}

	public function send_password_recovery_message(){
		$this->db->select('id,inst_name,password,mobile_1');
		$this->db->where('id',$this->input->post('id'));
		$qry = $this->db->get('institutions');
		$res = $qry->row();

		//$mobile = $res->mobile_1;
		$mobile = '9158141621';
	    $sess = array('mobile'=>$mobile);
	    $this->session->set_userdata($sess);
	
		$curl = curl_init();
        $sender = 772323;
        
        
        $otp = $res->password;
        $message = "Your password for login to AICPE Panel is ".$otp;
        $authkey = "263912A6BcK0enP5c6d176f";
        $otp_expiry =1440;
        //$email="ruchika.mandlik@gmail.com";
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?template=&otp_length=6&authkey=$authkey&message=$message&sender=$sender&mobile=$mobile&otp=$otp",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return true;
		}
	}

	public function get_all_admin_staff(){ 
		$this->db->where('as_status','0');
		$this->db->where('as_deleted_status','0');
		$query = $this->db->get('aicp_admin_staff');
		return $query->result();
	}

/*--------------------------------institutions crud  code ends here------------------------*/

/*------------------e-books code start here--------------------*/
	
	public function add_e_book($flag){
		$table = "aicp_e_books"; $prev_img="";
		//echo $this->input->post('cid'); die;
		if($this->input->post('id')!=""){
				$this->db->select('eb_file');
				$this->db->where('eb_id',$this->input->post('id'));
				$res = $this->db->get($table)->row();
				$prev_img = $res->eb_file;
		}
		if($flag!=""){
			$nflag = $flag;
		}else{
			$nflag = $prev_img;
		}
		
		$data = array('eb_book_category'=>$this->input->post('book_category'),
						'eb_title'=>$this->input->post('book_title'),
						'eb_link'=>$this->input->post('book_link'),
						'eb_summery'=>$this->input->post('summery'),
						'eb_pages'=>$this->input->post('pages'),
						'eb_auther'=>$this->input->post('author'),
						'eb_status'=>$this->input->post('status'),
						'eb_file'=>$nflag);
		if($this->input->post('id')!=""){
			$this->db->where('eb_id',$this->input->post('id'));
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

	
	public function get_all_ebooks($type,$where_data)
	{ 
		$table = "aicp_e_books";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('eb_id');		
		}

		
		$this->db->where('eb_delete_status','0');
		$this->db->join('aicp_library_category','id=eb_book_category');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('eb_title', addslashes($where_data['search']));
			$this->db->or_like('category_name', addslashes($where_data['search']));
			$this->db->or_like('eb_auther', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('eb_id', 'eb_book_category','eb_title')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('eb_id','desc');
			}
		}

		$this->db->group_by('eb_id');
		
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

	public function get_e_book_byID(){
		$table = "aicp_e_books";
		$this->db->where('eb_id',$this->input->post('id'));
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_e_book_byId($id){
		$table = "aicp_e_books";
		$data = array('eb_delete_status'=>'1');
		$this->db->where('eb_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_all_book_categories(){
		$table = 'aicp_library_category';

		$this->db->where('delete_status','0');
		$qry = $this->db->get($table);
		return $qry->result();
	}
/*----------------------------e-books code ends here-------------------------------*/
/*----------------------------Enquiries code starts here-------------------------------*/
	public function get_all_courses(){
		$this->db->where('crs_deleted_status','0');
		$this->db->order_by('crs_name','asc');
		$res = $this->db->get('aicp_courses');
		return $res->result();
	}

	public function get_all_student_enquiries($type,$where_data){
		$table = "enquiries";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('enquiries.id');		
		}

		
		$this->db->where('deleted_status','0');
		$this->db->join('aicp_courses','aicp_courses.crs_id=course_of_interest');
		$this->db->join('aicp_countries','c_id=country');
		$this->db->join('aicp_states','s_id=state');
		$this->db->join('aicp_cities','ci_id=city');
		$this->db->join('aicp_districts','d_id=district');
		$this->db->from($table);	
		
			
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('date_of_enquiry >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('date_of_enquiry <=', $where_data['end_date'].' 23:59:59');
		}			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('crs_name', addslashes($where_data['search']));
			$this->db->or_like('ci_name', addslashes($where_data['search']));
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));			
			$this->db->or_like('c_name', addslashes($where_data['search']));			
			$this->db->or_like('stud_firstName', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('enquiries.id', 'crs_name','ci_name','s_name','d_district_name','c_name','date_of_enquiry')))
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
			$result = $this->db->get()->result();		
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
		return $result;
	}

	public function delete_student_enquiry($id){
		$table = "enquiries";
		$data = array('deleted_status'=>'1');
		$this->db->where('id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function allot_institute(){
		$std_ids =array();
		$res = false;
		$std_ids = $this->input->post('enq');
		$data = array('inst_id'=>$this->input->post('institution_name'));
		for($i=0; $i<count($std_ids);$i++) {
			$this->db->where('id',$std_ids[$i]);
			$res = $this->db->update('enquiries',$data);
		}
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_all_inst_enquiries($type,$where_data){
		$table = 'institution_enquiries';
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('iq_id');		
		}

		
		$this->db->where('iq_deleted_status','0');
		$this->db->join('aicp_courses','aicp_courses.crs_id=iq_course');
		$this->db->join('aicp_countries','c_id=iq_country');
		$this->db->join('aicp_states','s_id=iq_state');
		$this->db->join('aicp_cities','ci_id=iq_city');
		$this->db->join('aicp_districts','d_id=iq_district');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('iq_dateof_enquiry >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('iq_dateof_enquiry <=', $where_data['end_date'].' 23:59:59');
		}	
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('crs_name', addslashes($where_data['search']));
			$this->db->or_like('crs_code', addslashes($where_data['search']));
			$this->db->or_like('ci_name', addslashes($where_data['search']));
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));			
			$this->db->or_like('c_name', addslashes($where_data['search']));			
			$this->db->or_like('iq_email', addslashes($where_data['search']));			
			$this->db->or_like('iq_mobile', addslashes($where_data['search']));			
			$this->db->or_like('iq_instname', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('iq_id', 'crs_name','ci_name','s_name','d_district_name','c_name','iq_dateof_enquiry','iq_instname')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('iq_id','desc');
			}
		}

		$this->db->group_by('iq_id');
			
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

	public function delete_institute_enquiry($id){
		$table = "institution_enquiries";
		$data = array('iq_deleted_status'=>'1');
		$this->db->where('iq_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_all_employer_enquiries($type,$where_data){
		$table = 'employer_enquiries';
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('eq_id');		
		}

		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('eq_date_of_enquiry >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('eq_date_of_enquiry <=', $where_data['end_date'].' 23:59:59');
		}
		
		$this->db->where('eq_deleted_status','0');
		$this->db->join('aicp_countries','c_id=eq_country');
		$this->db->join('aicp_states','s_id=eq_state');
		$this->db->join('aicp_cities','ci_id=eq_city');
		$this->db->join('aicp_districts','d_id=eq_district');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('ci_name', addslashes($where_data['search']));
			$this->db->or_like('s_name', addslashes($where_data['search']));			
			$this->db->or_like('d_district_name', addslashes($where_data['search']));		
			$this->db->or_like('c_name', addslashes($where_data['search']));			
			$this->db->or_like('eq_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('eq_id','ci_name','s_name','d_district_name','c_name','iq_dateof_enquiry','eq_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('eq_id','desc');
			}
		}

		$this->db->group_by('eq_id');
			
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

	public function delete_employere_enquiry($id){
		$table = "employer_enquiries";
		$data = array('eq_deleted_status'=>'1');
		$this->db->where('eq_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_allquick_enquiries($type,$where_data){
		$table = 'quick_enquiries';
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('qe_id');		
		}

		
		$this->db->where('qe_deleted_status','0');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('qe_date_of_enquiry >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('qe_date_of_enquiry <=', $where_data['end_date'].' 23:59:59');
		}	
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('qe_franchise', addslashes($where_data['search']));			
			$this->db->or_like('qe_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('qe_id','qe_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('qe_id','desc');
			}
		}

		$this->db->group_by('qe_id');
			
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

	public function delete_quick_enquiry($id){
		$table = "quick_enquiries";
		$data = array('qe_deleted_status'=>'1');
		$this->db->where('qe_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function change_quick_enquiry_status(){
		$table = 'quick_enquiries';
		$id = $this->input->post('id');
		$this->db->select('qe_status');
		$this->db->where('qe_deleted_status','0');
		$this->db->where('qe_id',$id);
		$res = $this->db->get($table)->row();
		if($res->qe_status==0){
			$data = array('qe_status'=>'1');
		}
		if($res->qe_status==1){
			$data = array('qe_status'=>'0');
		}

		
		$this->db->where('qe_id',$id);
		$qry = $this->db->update($table,$data);
		if($qry){
			return $id;
		}
	}
/*----------------------------Enquiries code ends here-------------------------------*/

/*----------------------------courses code ends here-------------------------------*/
	public function get_all_subjects_for_courses(){

		$this->db->where('sub_status','0');
		$this->db->where('sub_deleted_status','0');
		$result = $this->db->get('aicp_subjects');
		return $result->result();
	}

	public function get_all_stream(){

		$this->db->where('ct_deleted_status','0');
		$result = $this->db->get('aicp_course_types');
		return $result->result();
	}

	public function aicpe_courses($type,$where_data){
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

		
		$this->db->where('crs_deleted_status','0');
		$this->db->join('aicp_course_types','ct_id=crs_stream');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('crs_publish_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('crs_publish_date <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('crs_name', addslashes($where_data['search']));			
			$this->db->or_like('ct_title', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('crs_id','crs_name','ct_title')))
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

	public function add_aicpe_course($img,$marketing_img,$sub){
		date_default_timezone_set('Asia/Kolkata');
		$table = "aicp_courses";
		if($this->input->post('crs_pattern')!=null){
			$pattern = $this->input->post('crs_pattern');
		}else{
			$pattern = "";
		}
		if($this->input->post('crs_publish_date')==""){
			$publish_date = date('Y-m-d');
		}else{
			$publish_date = $this->input->post('crs_publish_date');
		}
		$data = array('crs_code'=>$this->input->post('crs_code'),
						'crs_name'=>ucfirst($this->input->post('crs_name')),
						'crs_stream'=>$this->input->post('crs_stream'),
						'crs_awards'=>$this->input->post('crs_awards'),
						'crs_eligibility'=>$this->input->post('crs_eligibility'),
						'crs_pattern'=>$pattern,
						'crs_no_of_marksheets'=>$this->input->post('crs_no_of_marksheets'),
						'crs_demo_exam_count'=>$this->input->post('crs_demo_exam_count'),
						'crs_exam_fees'=>$this->input->post('crs_exam_fees'),
						'crs_marksheet_fees'=>$this->input->post('crs_marksheet_fees'),
						'crs_syllabus'=>$this->input->post('crs_syllabus'),
						'crs_status'=>$this->input->post('crs_status'),
						'crs_duration'=>$this->input->post('crs_duration'),
						'crs_associates'=>json_encode($this->input->post('crs_associates')),
						'crs_publish_for'=>json_encode($this->input->post('crs_publish_for')),
						'crs_no_of_semester'=>$this->input->post('crs_no_of_semester'),
						'crs_image'=>$img,
						'crs_marketing_image'=>$marketing_img,
						'crs_subjects_weightage'=>$sub,
						'crs_publish_date'=>$publish_date,
						'crs_created_on'=>date('Y-m-d H:i:s'));

		$res = $this->db->insert($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
		
	}

	public function edit_aicpe_courses($img,$marketing_img,$sub){
		
		date_default_timezone_set('Asia/Kolkata');
		$table = "aicp_courses";

		if($this->input->post('crs_pattern')!=null){
			$pattern = $this->input->post('crs_pattern');
		}else{
			$pattern = "";
		}
		
		$this->db->select('crs_image,crs_marketing_image');
		$this->db->where('crs_id',$this->input->post('id'));
		$qry = $this->db->get($table)->row();
		if($img==""){
			$img = $qry->crs_image;
		}
		if($marketing_img==""){
			$marketing_img = $qry->crs_marketing_image;
		}
		if($this->input->post('crs_publish_date')==""){
			$publish_date = date('Y-m-d');
		}else{
			$publish_date = $this->input->post('crs_publish_date');
		}
		$data = array('crs_code'=>$this->input->post('crs_code'),
						'crs_name'=>ucfirst($this->input->post('crs_name')),
						'crs_stream'=>$this->input->post('crs_stream'),
						'crs_awards'=>$this->input->post('crs_awards'),
						'crs_eligibility'=>$this->input->post('crs_eligibility'),
						'crs_pattern'=>$pattern,
						'crs_no_of_marksheets'=>$this->input->post('crs_no_of_marksheets'),
						'crs_demo_exam_count'=>$this->input->post('crs_demo_exam_count'),
						'crs_exam_fees'=>$this->input->post('crs_exam_fees'),
						'crs_marksheet_fees'=>$this->input->post('crs_marksheet_fees'),
						'crs_syllabus'=>$this->input->post('crs_syllabus'),
						'crs_status'=>$this->input->post('crs_status'),
						'crs_duration'=>$this->input->post('crs_duration'),
						'crs_associates'=>json_encode($this->input->post('crs_associates')),
						'crs_publish_for'=>json_encode($this->input->post('crs_publish_for')),
						'crs_no_of_semester'=>$this->input->post('crs_no_of_semester'),
						'crs_image'=>$img,
						'crs_marketing_image'=>$marketing_img,
						'crs_subjects_weightage'=>$sub,
						'crs_publish_date'=>$publish_date,
						'crs_created_on'=>date('Y-m-d H:i:s'));
		$this->db->where('crs_id',$this->input->post('id'));
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
		
	}

	public function get_aicpe_course($id){
		$table = "aicp_courses";
		$this->db->where('crs_deleted_status','0');
		$this->db->where('crs_id',$id);
		$res = $this->db->get($table);
		return $res->row();
	}
/*----------------------------courses code ends here-------------------------------*/
/*----------------------------------- AICPE Associates code start here------------------------*/
	
	public function aicpe_associates($type,$where_data){
		$table = "aicp_associates";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('asso_id');		
		}

		
		$this->db->where('asso_deleted_status','0');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('asso_code', addslashes($where_data['search']));			
			$this->db->or_like('asso_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('asso_id','asso_name','asso_code')))
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
			$result = $this->db->get()->result();		
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
		return $result;
	
	}

	public function add_associate($flag){
		
		date_default_timezone_set('Asia/Kolkata');

		$table = "aicp_associates"; $prev_img="";
		//echo $this->input->post('cid'); die;
		if($this->input->post('asso_id')!=""){
				$this->db->select('asso_logo');
				$this->db->where('asso_id',$this->input->post('asso_id'));
				$res = $this->db->get($table)->row();
				$prev_img = $res->asso_logo;
		}
		if($flag!=""){
			$nflag = $flag;
		}else{
			$nflag = $prev_img;
		}
		
		$data = array('asso_name'=>$this->input->post('asso_name'),
						'asso_code'=>$this->input->post('asso_code'),
						'asso_affiliation'=>$this->input->post('asso_affiliation'),
						'asso_modified_date'=>date('Y-m-d h:i:s'),
						'asso_logo'=>$nflag);

		if($this->input->post('asso_id')!=""){
			$this->db->where('asso_id',$this->input->post('asso_id'));
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

	public function get_associate_byID($id){
		$table = "aicp_associates";
		$this->db->where('asso_id',$id);
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_aicpe_associates($id){
		$table = "aicp_associates";
		$data = array('asso_deleted_status'=>'1');
		$this->db->where('asso_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function block_aicpe_associates($id){
		$table = 'aicp_associates';

		$this->db->select('asso_status');
		$this->db->where('asso_deleted_status','0');
		$this->db->where('asso_id',$id);
		$res = $this->db->get($table)->row();
		if($res->asso_status=='0'){
			$data = array('asso_status'=>'1');
		}
		if($res->asso_status=='1'){
			$data = array('asso_status'=>'0');
		}

		
		$this->db->where('asso_id',$id);
		$qry = $this->db->update($table,$data);
		if($qry){
			return true;
		}

		
	}
/*----------------------------------- AICPE Associates code ends here------------------------*/
/*------------------------------- AICPE Associates Courses code starts here---------------------*/

	public function associate_courses($type,$where_data){
		$table = "join_associates_courses";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('asc_id');		
		}

		
		$this->db->where('asc_deleted_status','0');
		$this->db->join('aicp_associate_courses','asc_id =j_asso_course_id');
		$this->db->join('aicp_associates','asso_id =j_associate_id');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('asc_publish_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('asc_publish_date <=', $where_data['end_date'].' 23:59:59');
		}	
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('asc_code', addslashes($where_data['search']));			
			$this->db->or_like('asc_name', addslashes($where_data['search']));			
			$this->db->or_like('asso_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('asc_id','asso_name','asc_code','asc_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('asc_id','desc');
			}
		}

		$this->db->group_by('asc_id');
			
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

	public function get_associate_course_byId($id){
		$this->db->where('asc_deleted_status','0');
		$this->db->where('asc_id',$id);
		$this->db->join('aicp_associate_courses','asc_id =j_asso_course_id');
		$this->db->join('aicp_associates','asso_id =j_associate_id');
		$this->db->from('join_associates_courses');
		return $this->db->get()->row();
	}

	public function get_all_associates(){
		$table = 'aicp_associates';

		$this->db->select('asso_id,asso_name,asso_code');
		$this->db->where('asso_deleted_status','0');
		$this->db->where('asso_status','0');
		$result = $this->db->get($table);
		return $result->result();
	}

	public function add_associate_course($img,$marketing_img,$sub){
		date_default_timezone_set('Asia/Kolkata');
		$table = "aicp_associate_courses";
		$id = $this->input->post('id');
		$asso = $this->input->post('crs_associates');
		if($this->input->post('crs_pattern')!=null){
			$pattern = $this->input->post('crs_pattern');
		}else{
			$pattern = "";
		}
		if($id!=""){
			$this->db->select('asc_id,asc_image,asc_marketing_image');
			$this->db->where('asc_id',$id);
			$res = $this->db->get($table);
			$images = $res->row();
			if($img==""){
				$img = $images->asc_image;
			}
			if($marketing_img==""){
				$marketing_img = $images->asc_marketing_image;
			}
		}
		if($this->input->post('crs_publish_date')==""){
			$publish_date = date('Y-m-d');
		}else{
			$publish_date = $this->input->post('crs_publish_date');
		}
		$data = array('asc_code'=>$this->input->post('crs_code'),
						'asc_name'=>ucfirst($this->input->post('crs_name')),
						'asc_stream'=>$this->input->post('crs_stream'),
						'asc_awards'=>$this->input->post('crs_awards'),
						'asc_eligibility'=>$this->input->post('crs_eligibility'),
						'asc_pattern'=>$pattern,
						'asc_no_of_marksheets'=>$this->input->post('crs_no_of_marksheets'),
						'asc_demo_exam_count'=>$this->input->post('crs_demo_exam_count'),
						'asc_aicpe_exam_fees'=>$this->input->post('crs_exam_fees'),
						'asc_asso_exam_fees'=>$this->input->post('asso_exam_fees'),
						'asc_marksheet_fees'=>$this->input->post('crs_marksheet_fees'),
						'asc_syllabus'=>$this->input->post('crs_syllabus'),
						'asc_status'=>$this->input->post('crs_status'),
						'asc_duration'=>$this->input->post('crs_duration'),
						'asc_associates'=>json_encode($this->input->post('crs_associates')),
						'asc_publish_for'=>json_encode($this->input->post('crs_publish_for')),
						'asc_no_of_semester'=>$this->input->post('crs_no_of_semester'),
						'asc_image'=>$img,
						'asc_marketing_image'=>$marketing_img,
						'asc_subjects_weightage'=>$sub,
						'asc_publish_date'=> $publish_date);

		$res = $this->db->insert($table,$data);
		$new_id = $this->db->insert_id();
			for($i=0;$i<count($asso);$i++){
				$data = array('j_associate_id'=>$asso[$i], 'j_asso_course_id'=>$new_id);
				$this->db->insert('join_associates_courses',$data);
			}
		if($res){
			return true;
		}else{
			return false;
		}
	}

		public function edit_associate_course($img,$marketing_img,$sub){
		date_default_timezone_set('Asia/Kolkata');
		$table = "aicp_associate_courses";
		$id = $this->input->post('id');
		$asso = $this->input->post('crs_associates');
		if($this->input->post('crs_pattern')!=null){
			$pattern = $this->input->post('crs_pattern');
		}else{
			$pattern = "";
		}
		if($this->input->post('crs_publish_date')==""){
			$publish_date = date('Y-m-d');
		}else{
			$publish_date = $this->input->post('crs_publish_date');
		}
			$this->db->select('asc_id,asc_image,asc_marketing_image');
			$this->db->where('asc_id',$id);
			$res = $this->db->get($table);
			$images = $res->row();
			if($img==""){
				$img = $images->asc_image;
			}
			if($marketing_img==""){
				$marketing_img = $images->asc_marketing_image;
			}
		
		$data = array('asc_code'=>$this->input->post('crs_code'),
						'asc_name'=>ucfirst($this->input->post('crs_name')),
						'asc_stream'=>$this->input->post('crs_stream'),
						'asc_awards'=>$this->input->post('crs_awards'),
						'asc_eligibility'=>$this->input->post('crs_eligibility'),
						'asc_pattern'=>$pattern,
						'asc_no_of_marksheets'=>$this->input->post('crs_no_of_marksheets'),
						'asc_demo_exam_count'=>$this->input->post('crs_demo_exam_count'),
						'asc_aicpe_exam_fees'=>$this->input->post('crs_exam_fees'),
						'asc_asso_exam_fees'=>$this->input->post('asso_exam_fees'),
						'asc_marksheet_fees'=>$this->input->post('crs_marksheet_fees'),
						'asc_syllabus'=>$this->input->post('crs_syllabus'),
						'asc_status'=>$this->input->post('crs_status'),
						'asc_duration'=>$this->input->post('crs_duration'),
						'asc_associates'=>json_encode($this->input->post('crs_associates')),
						'asc_publish_for'=>json_encode($this->input->post('crs_publish_for')),
						'asc_no_of_semester'=>$this->input->post('crs_no_of_semester'),
						'asc_image'=>$img,
						'asc_marketing_image'=>$marketing_img,
						'asc_subjects_weightage'=>$sub,
						'asc_publish_date'=> $publish_date);
			
			$this->db->where('asc_id',$id);
			$res = $this->db->update($table,$data);

			$this->db->where('j_asso_course_id',$id);
			$qry = $this->db->delete('join_associates_courses');
			if($qry){
				for($i=0;$i<count($asso);$i++){
				$data = array('j_associate_id'=>$asso[$i], 'j_asso_course_id'=>$id);
				$this->db->insert('join_associates_courses',$data);
				}
			}
		
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function delete_associate_courses($id){
			$table = "aicp_associate_courses";
			$data = array('asc_deleted_status'=>1);
			$this->db->where('asc_id',$id);
			$res = $this->db->update($table,$data);
			if($res){
				return true;
			}else{
					return false;
				}
	}
/*----------------------------------- AICPE Associates Courses code ends here------------------------*/
/*----------------------------------- NON-AICPE  Courses code starts here------------------------*/
	public function non_aicpe_courses($type,$where_data){
		$table = "institutions";
		if($type=='data')
		{
			$this->db->select('aicp_non_aicpe_courses.*, institutions.id, institutions.inst_name, institutions.atc_code,c_name,s_name,ci_name,d_district_name');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('no_id');		
		}

		
		$this->db->where('no_deleted_status','0');
		$this->db->join('aicp_non_aicpe_courses','id=no_inst');
		$this->db->join('aicp_countries','c_id=country');
		$this->db->join('aicp_states','s_id=state');
		$this->db->join('aicp_districts','d_id=district');
		$this->db->join('aicp_cities','ci_id=city');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('no_created_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('no_created_date <=', $where_data['end_date'].' 23:59:59');
		}	
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('no_id', addslashes($where_data['search']));			
			$this->db->or_like('no_code', addslashes($where_data['search']));			
			$this->db->or_like('no_name', addslashes($where_data['search']));			
			$this->db->or_like('inst_name', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('no_id','no_code','no_name','inst_name')))
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
			$result = $this->db->get()->result();		
		}   
		else
		{
			$result = $this->db->get()->num_rows();			
		}
		return $result;
	}

	public function delete_non_aicpe_courses($id){
			$table = "aicp_non_aicpe_courses";
			$data = array('no_deleted_status'=>1);
			$this->db->where('no_id',$id);
			$res = $this->db->update($table,$data);
			if($res){
				return true;
			}else{
					return false;
				}
	}

	public function approve_non_aicpe_courses(){
		$table = "aicp_non_aicpe_courses";
		$this->db->select('no_approve');
		$this->db->where('no_id',$this->input->post('id'));
		$qry = $this->db->get($table)->row();
		if($qry->no_approve=='0'){
			$data = array('no_approve'=>'1');
		}else{
			$data = array('no_approve'=>'0');
		}
		
		$this->db->where('no_id',$this->input->post('id'));
		$qry = $this->db->update($table,$data);
		if($qry){
			return $this->input->post('id');
		}
	}
/*----------------------------------- NON-AICPE Courses code ends here------------------------*/
/*----------------------------------- question bank code starts here------------------------*/
	
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
			$result = $this->db->get()->result();		
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
		return $res->row();
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
		return $res->result();
	}

/*----------------------------------- question bank code ends here------------------------*/
/*----------------------------------- course suggestions code starts here---------------------*/
	public function course_suggestions($type,$where_data){
		$table = "aicp_course_suggestions";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			//$this->db->select('COUNT(enquiries.id) as total');  
			$this->db->select('cs_id ');		
		}

		
		$this->db->where('cs_deleted_status','0');
		$this->db->from($table);		
		
		if(isset($where_data['start_date']) && $where_data['start_date'] !='')
		{
			$where_data['start_date'] = date('Y-m-d h:i:s',strtotime($where_data['start_date'].' 00:00:00'));
			$this->db->where('cs_publish_date >=', $where_data['start_date'].' 00:00:00');
		
		}	
		if(isset($where_data['end_date']) && $where_data['end_date'] !='')
		{
			$where_data['end_date'] = date('Y-m-d h:i:s',strtotime($where_data['end_date'].' 00:00:00'));
			$this->db->where('cs_publish_date <=', $where_data['end_date'].' 23:59:59');
		}		
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('cs_name', addslashes($where_data['search']));			
			$this->db->or_like('cs_eligibility', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('cs_id ','cs_name','cs_eligibility')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('cs_id ','desc');
			}
		}

		$this->db->group_by('cs_id ');
			
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

	public function delete_course_suggestion($id){
		$table = "aicp_course_suggestions";
		$data = array('cs_deleted_status'=>1);
		$this->db->where('cs_id',$id);
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
				return false;
			}
	}
/*----------------------------------- course suggestions code ends here------------------------*/
/*----------------------------------- Admin staff Tasks code starts here------------------------*/

public function add_staff_tasks(){
		$table = "aicp_admin_staff_tasks"; 
		date_default_timezone_set('Asia/Kolkata');
		$data =   array('st_staff_id'=>$this->input->post('admin_staff'),
						'st_inst_id'=>$this->input->post('institution_name'),
						'st_task'=>$this->input->post('task_title'),
						'st_description'=>$this->input->post('task_description'),
						'st_status'=>$this->input->post('status'),
						'st_publish_date'=>date('Y-m-d H:i:s'));
		if($this->input->post('id')!=""){
			$this->db->where('st_id',$this->input->post('id'));
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

	
	public function admin_staff_tasks($type,$where_data)
	{ 
		$table = "aicp_admin_staff_tasks";
		if($type=='data')
		{
			$this->db->select('*');   
		}
		else
		{
			$this->db->select('st_id');		
		}

		$this->db->where('st_deleted_status','0');
		$this->db->join('aicp_admin_staff','as_id=st_staff_id');
		$this->db->join('institutions','id=st_inst_id');
		$this->db->from($table);		
		
			
		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('inst_name', addslashes($where_data['search']));			
			$this->db->like('as_firstName', addslashes($where_data['search']));			
			$this->db->like('as_lastName', addslashes($where_data['search']));			
			$this->db->like('st_task', addslashes($where_data['search']));			
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
				if(in_array($where_data['sort_by'], array('st_id', 'inst_name','as_firstName')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}
			else
			{
				// Set default sorting
				$this->db->order_by('st_id','desc');
			}
		}

		$this->db->group_by('st_id');
		
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

	public function get_admin_staff_byID(){
		$table = "aicp_admin_staff_tasks";
		$this->db->where('st_id',$this->input->post('id'));
		$this->db->where('st_deleted_status','0');
		$this->db->join('aicp_admin_staff','as_id=st_staff_id');
		$this->db->join('institutions','id=st_inst_id');
		$res = $this->db->get($table);
		return $res->row();
	}

	

	public function delete_staff_tasks($id){
		$table = "aicp_admin_staff_tasks";
		$data = array('st_deleted_status'=>'1');
		$this->db->where('st_id',$id);
		
		$res = $this->db->update($table,$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function get_alladminStaff(){
		$table = "aicp_admin_staff";
		$this->db->select('as_id,as_firstName,as_lastName');
		$this->db->where('as_deleted_status','0');
		$this->db->where('as_status','0');
		$qry = $this->db->get($table);
		return $qry->result();
	}
/*----------------------------------- Admin staff Tasks code starts here------------------------*/

}