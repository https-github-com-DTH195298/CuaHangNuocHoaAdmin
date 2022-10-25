<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class changeDataStaff_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('staff');

		$ketqua = $ketqua->result_array();

		return $ketqua;
		//echo "<pre>";
		//var_dump($ketqua);
	}

}

/* End of file changeDataStaff.php */
/* Location: ./application/models/changeDataStaff.php */