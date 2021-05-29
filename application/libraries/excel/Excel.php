<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."libraries/excel/PHPExcel.php"; 

/*
@Description	: Library to export to excel
@Author			: Bhagyesh Mistry
@Input			: 
@Output			: 
@Date			: 20-05-2014
*/

class Excel extends PHPExcel {

    public function __construct() {
        parent::__construct();
    }
	
}