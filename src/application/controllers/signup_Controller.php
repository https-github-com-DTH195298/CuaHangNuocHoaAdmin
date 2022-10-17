<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signup_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('signup_View');

		//truyen du lieu vao model
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('signupData_Model');

		if ($this->signupData_Model->insert($name,$email,$password))
		 {
			// code...
			$this->load->view('thanhcong');
		}
		else
		{
			echo "that bai";
		}
	}

}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */