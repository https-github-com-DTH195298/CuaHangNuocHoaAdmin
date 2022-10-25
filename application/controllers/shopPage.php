<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $this->load->model('tableData_Model');
		// $dulieu = $this->tableData_Model->getdatabase();
		// $dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('shopPage_View');
	}

}

/* End of file homepage_Controller.php */
/* Location: ./application/controllers/homepage_Controller.php */