<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($name, $Position, $Location, $Age, $Start_Date,$Salary)
	{
		// code...
		$dulieu = array('name' => $name, 'Position' => $Position,'Location' => $Location,'Age' => $Age,'Start_Date' => $Start_Date,'Salary' => $Salary);
		$this->db->insert('staff', $dulieu);

		return $this->db->insert_id(); //tra ve mot gia tri
	}

}

/* End of file addData_Model.php */
/* Location: ./application/models/addData_Model.php */