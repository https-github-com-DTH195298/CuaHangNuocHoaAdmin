<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addAccount_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//truyen du lieu vao model
		$name = $this->input->post('email');
		$Position = $this->input->post('password');
		$Location = $this->input->post('avatar');

		$this->load->model('addAccount_Model');

		if ($this->addAccount_Model->insert($email, $password, $avatar))
		 {
			// code...
			$this->load->model('listAccount_Model');
			$dulieu = $this->tableData_Model->getdatabase();
			$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
			$this->load->view('listAccount_View',$dulieu, FALSE);
		}
		else
		{
			echo "that bai";
		}
	}
	}


/* End of file addStaff_Controller.php */
/* Location: ./application/controllers/addStaff_Controller.php */