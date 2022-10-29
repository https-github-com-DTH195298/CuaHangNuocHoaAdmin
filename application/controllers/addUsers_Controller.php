<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addUsers_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//truyen du lieu vao model
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$avatar = $this->input->post('avatar');

		$this->load->model('addUsers_Model');

		if ($this->addUsers_Model->insert($email, $password, $avatar))
		 {
			// code...
			$this->load->model('listUsers_Model');
			$dulieu = $this->listUsers_Model->getdatabase();
			$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
			$this->load->view('listUsers_View',$dulieu, FALSE);
		}
		else
		{
			echo "that bai";
		}
	}
	}


/* End of file addStaff_Controller.php */
/* Location: ./application/controllers/addStaff_Controller.php */