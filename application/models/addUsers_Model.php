<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addUsers_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($email, $password, $avatar)
	{
		// code...
		$dulieu = array('email' => $email, 'password' => $password,'avatar' => $avatar);
		$this->db->insert('users', $dulieu);

		return $this->db->insert_id(); //tra ve mot gia tri
	}

}

/* End of file addData_Model.php */
/* Location: ./application/models/addData_Model.php */

/* End of file addData_Model.php */
/* Location: ./application/models/addData_Model.php */