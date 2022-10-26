<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		 $this->load->model('products_Model');
		 $dulieu = $this->products_Model->getdatabase();
		 $dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('shopPage_View', $dulieu, false);
	}

}

/* End of file homepage_Controller.php */
/* Location: ./application/controllers/homepage_Controller.php */