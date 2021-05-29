<?php
class Students_model extends CI_Model
{
	public function __construct()
	{
		$this->log_in_user_id = '1';
		parent::__construct();
	}

	/*
	@Description 	: get list of Courses detail with syllabus
	@Author 		: Ankita Mandlik
	@Output 		: 
	@Date 			: 25-01-2021
	*/
	
	public function get_courses_list($type='data',$where_data = array())
	{		
		if($type=='data')
		{
			$this->db->select(array(
				'aicp_courses.id as course_id',
				'aicp_syllabus.id as syllabus_id',
				'aicp_syllabus.suject_name',									
			));   
		}
		else
		{
			$this->db->select('aicp_syllabus.id');			
		}
		
		$this->db->from('aicp_courses');	
		$this->db->join('aicp_syllabus','aicp_syllabus.course_id=aicp_courses.id','left');		
		$this->db->where('aicp_syllabus.is_deleted','0');			

		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('aicp_syllabus.suject_name', addslashes($where_data['search']));
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
				if(in_array($where_data['sort_by'], array('id', 'topic_name','suject_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}			
		}

		//$this->db->group_by('aicp_syllabus.id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();
			
		}   
		else
		{
			$result = $this->db->get()->num_rows();
			//$result=isset($result['total']) ? $result['total'] : 0;
		}
		return $result;
	}
	/*
	@Description 	: get list of topics
	@Author 		: Ankita Mandlik
	@Output 		: 
	@Date 			: 25-01-2021
	*/
	public function get_topic_by_sysllabus($syllabus_ids = array(),$course_id='')
	{
		$topic_array = array();
		$this->db->select(array('aicp_subject_topic.id','aicp_subject_topic.topic_name','aicp_subject_topic.subject_id','aicp_subject_topic.course_id'));
		$this->db->from('aicp_subject_topic');
		if(is_array($syllabus_ids) && count($syllabus_ids) >0)
		{
			$this->db->where_in('aicp_subject_topic.subject_id', $syllabus_ids);
		}
		if($course_id !== '')
		{
			$this->db->where('aicp_subject_topic.course_id', $course_id);
		}

		$result = $this->db->get()->result_array();
		foreach ($result as $key => $value) {
			$topic_array[$value['subject_id']][] = $value;
		}
		return $topic_array;
	}

	/*
	@Description 	: get list of Courses detail with syllabus
	@Author 		: Ankita Mandlik
	@Output 		: 
	@Date 			: 31-01-2021
	*/
	
	public function get_library_management_list($type='data',$where_data = array())
	{		
		if($type=='data')
		{
			$this->db->select(array(
				'aicp_user_library.id',
				'aicp_user_library.category_id',
				'aicp_user_library.book_id',									
				'aicp_user_library.issue_date',									
				'aicp_user_library.submission_date',									
				'aicp_user_library.fine',									
				'aicp_user_library.fine_currency',									
				'aicp_user_library.status',									
				'aicp_library_category.category_name',									
				'aicp_library_book.book_name',									
			));   
		}
		else
		{
			$this->db->select('aicp_user_library.id');			
		}
		
		$this->db->from('aicp_user_library');				
		$this->db->join('aicp_library_category','aicp_library_category.id=aicp_user_library.category_id','left');				
		$this->db->join('aicp_library_book','aicp_library_book.id=aicp_user_library.book_id','left');				
		//$this->db->where('aicp_user_library.user_id',$where_data['user_id']);			

		
		if(isset($where_data['search']) && $where_data['search'] != '')
		{	
			$this->db->group_start();
			$this->db->like('aicp_library_category.category_name', addslashes($where_data['search']));
			$this->db->or_like('aicp_library_book.book_name', addslashes($where_data['search']));
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
				if(in_array($where_data['sort_by'], array('id', 'category_name','book_name')))
				{
					$this->db->order_by($where_data['sort_by'],$where_data['sort_direction']);
				}
			}			
		}

		//$this->db->group_by('aicp_syllabus.id');
		
		// If data is required
		if($type == 'data')
		{
			$result = $this->db->get()->result_array();
			
		}   
		else
		{
			$result = $this->db->get()->num_rows();
			//$result=isset($result['total']) ? $result['total'] : 0;
		}
		return $result;
	}
}
