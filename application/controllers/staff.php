<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('staffData_Model');
		$dulieu = $this->staffData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('table_View', $dulieu, FALSE);
	}
	function deleteData($idnhanduoc)
	{
		
		$this->load->model('staffData_Model');
		$this->staffData_Model->deleteDataById($idnhanduoc);
		$dulieu = $this->staffData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('table_View', $dulieu, FALSE);
	}
}

/* End of file table_Controller.php */
/* Location: ./application/controllers/table_Controller.php */