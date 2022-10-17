<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signupData_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($namee, $emaill, $passwordd)
	{
		// code...
		$dulieu = array('name' => $namee, 'email' => $emaill, 'password' => $passwordd );
		$this->db->insert('user', $dulieu);

		return $this->db->insert_id(); //tra ve mot gia tri
	}

}

/* End of file addData_Model.php */
/* Location: ./application/models/addData_Model.php */