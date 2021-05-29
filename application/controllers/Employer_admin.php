<?php
class Employer_admin extends MY_Controller{
	
	function __construct()
    {
        parent::__construct();
		$this->page_segment = 2;
        $this->per_page = 3;
        $this->per_page_option = array(100=>100,200=>200, 500=>500, 1000=>1000); 
       // $this->load->library('PHPExcel');
        $this->load->helper('common_helper');      
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

    public function index(){
        $this->load->view('admin/super-admin/employers');
    }

    public function add(){

    }
}