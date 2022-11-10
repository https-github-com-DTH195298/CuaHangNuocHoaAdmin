<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class storePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->load->model('products_Model');
		$dulieu = $this->products_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('storePage_View',$dulieu, false);
	}

}

/* End of file addStaff.php */
/* Location: ./application/controllers/addStaff.php */