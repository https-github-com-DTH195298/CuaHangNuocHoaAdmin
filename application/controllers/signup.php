<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('signup_View');
	}

}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */