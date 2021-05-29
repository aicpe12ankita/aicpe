<?php
class Admin_master extends MY_Controller{
	
	function __construct()
    {
        parent::__construct();
		$this->page_segment = 2;
        $this->per_page = 10;
        $this->per_page_option = array(100=>100,200=>200, 500=>500, 1000=>1000); 
       // $this->load->library('PHPExcel');
        $this->load->helper('common_helper');      
    }

   /*---------------------------admin master tables start-----------*/

    public function countries(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'c_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
    
        $data['data'] = $this->Admin_model->get_countries('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_countries('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-countries/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/countries',
            'default_sort'      => 'c_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/countries_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }

    public function add_country(){
       
       $uploadedImage = "";
       if(!empty($_FILES['flag_image']['name'])){
                
                $config['upload_path']      = "assets/images/countries";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('flag_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        
                    }
                    else
                    {
                        $uploadedImage  = $this->upload->data('file_name');
                        //echo "ok"; print_r($uploadedImage);die;
                    }
            }
            $res = $this->Admin_model->add_country($uploadedImage);
            echo json_encode($res);
            
    } 

    public function get_countries(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['countries'] = $this->Admin_model->get_country_byID();

            parent::s_render('admin/super-admin/master_tables/add_country',$data);
            
        }
    }

    public function delete_country(){
       $id = $this->input->post('new_id');
         $data = $this->Admin_model->delete_country_byID($id);
            echo json_encode($data);
    }
/*---------------------------------state code start here-----------------*/
    public function states(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 's_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['countries'] =  $this->Admin_model->get_allCountries();
        $data['data'] = $this->Admin_model->get_states('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_states('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-states/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/states',
            'default_sort'      => 's_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/states_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

     public function add_state(){
       
            $res = $this->Admin_model->add_state();
            echo json_encode($res);
            
    } 

    public function get_states(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['countries'] =  $this->Admin_model->get_allCountries();
            $data['states'] = $this->Admin_model->get_state_byID();

            parent::s_render('admin/super-admin/master_tables/add_state',$data);
            
        }
    }

    public function delete_state(){
       $id = $this->input->post('new_id');
         $data = $this->Admin_model->delete_state_byID($id);
            echo json_encode($data);
    }

    /*--------------------------------state code end here-------------------*/
    /*--------------------------------district code starts here-------------------*/
   
    public function district(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'd_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['countries'] =  $this->Admin_model->get_allCountries();
        $data['data'] = $this->Admin_model->get_districts('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_districts('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-district/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/district',
            'default_sort'      => 'd_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/districts_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

     public function add_district(){
       
            $res = $this->Admin_model->add_district();
            echo json_encode($res);
            
    } 

    public function get_districts(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['countries'] =  $this->Admin_model->get_allCountries();
            $data['districts'] = $this->Admin_model->get_district_byID();
            parent::s_render('admin/super-admin/master_tables/add_distric',$data);
            
        }
    }

    public function get_state_by_country(){
        $sid= $this->input->post('id');
        $response = $this->Admin_model->get_state_by_country($sid);
         echo json_encode($response);
    }

    public function get_district_by_state(){
        $did= $this->input->post('id');
        $response = $this->Admin_model->get_district_by_state($did);
         echo json_encode($response);
    }

    public function get_cities_by_district(){
        $cid= $this->input->post('cid');
        $response = $this->Admin_model->get_cities_by_district($cid);
         echo json_encode($response);
    }

    public function delete_district(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_district_byID($id);
        echo json_encode($data);
    }

    /*-----------------------district code ends here---------------------------------------*/

    /*--------------------------------city code starts here-------------------*/
   
    public function cities(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'c_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['countries'] =  $this->Admin_model->get_allCountries();
        $data['data'] = $this->Admin_model->get_cities('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_cities('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-cities/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/cities',
            'default_sort'      => 'ci_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/cities_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

     public function add_city(){
       
            $res = $this->Admin_model->add_city();
            echo json_encode($res);
            
    } 

    public function get_cities(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['countries'] =  $this->Admin_model->get_allCountries();
            $data['city'] = $this->Admin_model->get_city_byID();
            parent::s_render('admin/super-admin/master_tables/add_city',$data);
            
        }
    }

   

    public function delete_city(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_city_byID($id);
        echo json_encode($data);
    }

    /*-----------------------city code ends here---------------------------------------*/

    /*---------------------------------awards code start here-----------------*/
    public function awards(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'aw_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->get_awards('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_awards('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-awards/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/awards',
            'default_sort'      => 'aw_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/awards_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

     public function add_award(){
       
            $res = $this->Admin_model->add_award();
            echo json_encode($res);
            
    } 

    public function get_awards(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['award'] = $this->Admin_model->get_award_byID();

            parent::s_render('admin/super-admin/master_tables/add_award',$data);
            
        }
    }

    public function delete_award(){
       $id = $this->input->post('new_id');
         $data = $this->Admin_model->delete_award_byID($id);
            echo json_encode($data);
    }

    /*---------------------------------awards code ends here-----------------*/

    /*---------------------------------Admin Staff Designation code start here-----------------*/
    public function admin_staff_designation(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'asd_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->get_admin_staff_designation('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_admin_staff_designation('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-staff-designation/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/admin_staff_designation',
            'default_sort'      => 'asd_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/admin_staff_designation_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

     public function add_staff_designation(){
       
            $res = $this->Admin_model->add_staff_designation();
            echo json_encode($res);
            
    } 

    public function get_staff_designation(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['desg'] = $this->Admin_model->get_staff_designation_byID();

        parent::s_render('admin/super-admin/master_tables/add_admin_staff_designation',$data);
            
        }
    }

    public function delete_staff_designation(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_staff_designation_byID($id);
        echo json_encode($data);
    }

    /*---------------------------------Admin Staff Designation code ends here-----------------*/

    /*----------------------------Institution Staff Designation code start here---------------*/
    
    public function institute_staff_designation(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'isd_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->get_institution_staff_designation('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_institution_staff_designation('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-institute-staff-designation/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/institute_staff_designation',
            'default_sort'      => 'isd_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/institution_staff_designation_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

     public function add_institute_staff_designation(){
       
            $res = $this->Admin_model->add_institution_designation();
            echo json_encode($res);
            
    } 

    public function get_institute_staff_designation(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['desg'] = $this->Admin_model->get_institution_designation_byID();

        parent::s_render('admin/super-admin/master_tables/add_institution_staff_designation',$data);
            
        }
    }

    public function delete_institute_staff_designation(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_institution_designation_byID($id);
        echo json_encode($data);
    }

    /*-----------------------------Institution Staff Designation code ends here---------------*/
    
    /*-----------------------------payment mode code starts here---------------*/

    public function payment_mode(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'p_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->payment_mode('data',$where_data);
        $data['total_records'] =  $this->Admin_model->payment_mode('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-payment-mode/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/payment_mode',
            'default_sort'      => 'p_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/payment_mode_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function add_payment_mode(){
        $res = $this->Admin_model->add_payment_mode();
        echo json_encode($res);
    } 

    public function get_payment_mode(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['payment_mode'] = $this->Admin_model->get_payment_mode();
            parent::s_render('admin/super-admin/master_tables/add_payment_mode',$data);
        }
    }

    public function delete_payment_mode(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_payment_mode($id);
        echo json_encode($data);
    }

/*-----------------------------payment mode code ends here---------------*/
    
/*-----------------------------transaction type code starts here---------------*/

    public function transaction_type(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 't_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->transaction_type('data',$where_data);
        $data['total_records'] =  $this->Admin_model->transaction_type('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-transaction-type/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/transaction_type',
            'default_sort'      => 't_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/transaction_type_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function add_transaction_type(){
        $res = $this->Admin_model->add_transaction_type();
        echo json_encode($res);
    } 

    public function get_transaction_type(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['transaction_type'] = $this->Admin_model->get_transaction_type();
            parent::s_render('admin/super-admin/master_tables/add_transaction_type',$data);
        }
    }

    public function delete_transaction_type(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_transaction_type($id);
        echo json_encode($data);
    }

    /*-----------------------------transaction type code ends here---------------*/

    /*-----------------------------qualification code starts here---------------*/

    public function qualification(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'q_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->qualification('data',$where_data);
        $data['total_records'] =  $this->Admin_model->qualification('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-qualification/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/qualification',
            'default_sort'      => 'q_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/qualification_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function add_qualification(){
        $res = $this->Admin_model->add_qualification();
        echo json_encode($res);
    } 

    public function get_qualification(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['qualification'] = $this->Admin_model->get_qualification();
            parent::s_render('admin/super-admin/master_tables/add_qualification',$data);
        }
    }

    public function delete_qualification(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_qualification($id);
        echo json_encode($data);
    }

    /*-----------------------------qualification code ends here---------------*/

    /*-----------------------------photo id type code starts here---------------*/

    public function photo_id_type(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'ph_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->photo_id_type('data',$where_data);
        $data['total_records'] =  $this->Admin_model->photo_id_type('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-photo-id-type/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/photo_id_type',
            'default_sort'      => 'ph_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/photo_id_type_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function add_photo_id_type(){
        $res = $this->Admin_model->add_photo_id_type();
        echo json_encode($res);
    } 

    public function get_photo_id_type(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['photo_id_type'] = $this->Admin_model->get_photo_id_type();
            parent::s_render('admin/super-admin/master_tables/add_photo_id_type',$data);
        }
    }

    public function delete_photo_id_type(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_photo_id_type($id);
        echo json_encode($data);
    }

    /*-----------------------------photo id type code ends here---------------*/
    /*-----------------------------book categories code starts here---------------*/

    public function book_categories(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->book_categories('data',$where_data);
        $data['total_records'] =  $this->Admin_model->book_categories('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-book-categories/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/book_categories',
            'default_sort'      => 'id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/book_categories_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function add_book_categories(){
        $res = $this->Admin_model->add_book_categories();
        echo json_encode($res);
    } 

    public function get_book_categories(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['book_category'] = $this->Admin_model->get_book_categories();
            parent::s_render('admin/super-admin/master_tables/add_book_category',$data);
        }
    }

    public function delete_book_categories(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_book_categories($id);
        echo json_encode($data);
    }

/*-----------------------------book categories code ends here---------------*/
/*-----------------------------aicpe world content code ends here---------------*/
public function aicpe_world_content(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'w_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
    
        $data['data'] = $this->Admin_model->get_world_content('data',$where_data);
        $data['total_records'] =  $this->Admin_model->get_world_content('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-aicpe-world-content/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/aicpe_world_content',
            'default_sort'      => 'w_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/world_content_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    }

    public function add_aicpe_world_content(){
       
       $uploadedImage = "";
       if(!empty($_FILES['flag_image']['name'])){
                
                $config['upload_path']      = "uploads/aicpe_world";
                $config['allowed_types']    = "gif|jpg|png|jpeg";
                $config['encrypt_name']     =  true;
                $config['overwrite']        =  TRUE;
             
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('flag_image'))
                    {
                        $error  = array('error'  => $this->upload->display_errors());
                        //print_r($error);die;
                    }
                    else
                    {
                        $uploadedImage  = $this->upload->data('file_name');;
                        //echo "ok"; print_r($uploadedImage);die;
                    }
            }
            $res = $this->Admin_model->add_world_content($uploadedImage);
            echo json_encode($res);
            
    } 

    public function get_aicpe_world_content(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['aicpe_world'] = $this->Admin_model->get_world_content_byID();

            parent::s_render('admin/super-admin/master_tables/add_world_content',$data);
            
        }
    }

    public function delete_aicpe_world_content(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_world_content_byID($id);
        echo json_encode($data);
    }
/*-----------------------------aicpe world content code ends here---------------*/
    public function currency_converter(){
        $data['currencies'] = $this->Admin_model->get_currencies();
        $this->load->view('admin/super-admin/master_tables/currency_converter',$data);
    } 

    public function convert_currency(){
       $data= $this->Admin_model->convert_currency();
       echo json_encode($data);
    }

     /*-----------------------------subject level code starts here---------------*/

    public function subject_levels(){
        $data["per_page_option"] = $this->per_page_option;
        $data["per_page"]        = $this->get_page_vars('per_page', 10);
        $data["page"]            = $this->get_page_vars('page','',$this->page_segment);        
        $data['search']          = $this->get_request_params('search','');

        $where_data =   array(
            "sort_by"        => $this->get_page_vars('sort_by', 'sl_id'),
            "sort_direction" => $this->get_page_vars('sort_direction', 'DESC'),
            "per_page"       => $data["per_page"],
            "page"           => $this->get_page_vars('page', '', $this->page_segment),
            "search"         => $data['search'],          
        ); 
        $data['data'] = $this->Admin_model->subject_levels('data',$where_data);
        $data['total_records'] =  $this->Admin_model->subject_levels('count',$where_data);
        
         // Set page configs
        $page_config = array(
            'paging_url'        => 'admin-subject-level/',
            'page_segment'      => $this->page_segment,
            'per_page'          => $this->get_page_vars('per_page', 10),
            'total_records'     => $data['total_records'],
            'list'              => 'admin/super-admin/master_tables/subject_level',
            'default_sort'      => 'sl_id',
            'default_direction' => 'desc',
            'list_ajax'         => 'admin/super-admin/master_tables/subject_level_ajax',
            'data'              => $data
        );
        $this->set_pagination($page_config);
    } 

    public function add_subject_level(){
        $res = $this->Admin_model->add_subject_level();
        echo json_encode($res);
    } 

    public function get_subject_level(){
        if($this->input->post('type')=='edit'){
            $data['type'] = $this->input->post('type');
            $data['subject_level'] = $this->Admin_model->get_subject_level();
            parent::s_render('admin/super-admin/master_tables/add_subject_level',$data);
        }
    }

    public function delete_subject_level(){
        $id = $this->input->post('new_id');
        $data = $this->Admin_model->delete_subject_level($id);
        echo json_encode($data);
    }

/*-----------------------------subject level code ends here---------------*/
    
/*---------------------------admin master tables end-----------*/

/*----------------------pagination code start------------------------*/
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
/*----------------------pagination code end------------------------*/

}