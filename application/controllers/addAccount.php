<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addStaff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('tableData_Model');
		$dulieu = $this->tableData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		//echo '<pre>';
		//var_dump($dulieu);
		$this->load->view('addStaff_View', $dulieu, FALSE);
	}

}

/* End of file addStaff.php */
/* Location: ./application/controllers/addStaff.php */