<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($usernamee,$passwordd)
	{
		// code...
		$dulieu = array('username' => $usernamee, 'password' => $passwordd );
		$this->db->insert('cuahangnuochoa', $dulieu);

		return $this->db->insert_id(); //tra ve mot gia tri
	}

}

/* End of file addData_Model.php */
/* Location: ./application/models/addData_Model.php */