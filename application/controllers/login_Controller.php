<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//truyen du lieu vao model
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('login_Model');

		if ($this->login_Model->insert($username,$password))
		 {
			// code...
			echo 'thanh cong';
		}
		else
		{
			echo "that bai";
		}
	}

}

/* End of file InsertData_Controller.php */
/* Location: ./application/controllers/InsertData_Controller.php */