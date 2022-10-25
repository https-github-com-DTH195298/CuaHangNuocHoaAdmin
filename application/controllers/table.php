<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class table extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('tableData_Model');
		$dulieu = $this->tableData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('table_View', $dulieu, FALSE);
	}
	function deleteData($idnhanduoc)
	{
		
		$this->load->model('tableData_Model');
		$this->tableData_Model->deleteDataById($idnhanduoc);
		$dulieu = $this->tableData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('table_View', $dulieu, FALSE);
	}
	function showDetailsData($idnhanduoc)
	{
		
		$this->load->model('tableData_Model');
		$this->tableData_Model->showDetailsDataById($idnhanduoc);
		$dulieu = $this->tableData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('ViewDemo', $dulieu, FALSE);
	}

}

/* End of file table_Controller.php */
/* Location: ./application/controllers/table_Controller.php */