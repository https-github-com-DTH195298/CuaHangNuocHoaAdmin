<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addUsers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('listUsers_Model');
		$dulieu = $this->listUsers_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		//echo '<pre>';
		//var_dump($dulieu);
		$this->load->view('addUsers_View', $dulieu, FALSE);
	}

}

/* End of file addStaff.php */
/* Location: ./application/controllers/addStaff.php */