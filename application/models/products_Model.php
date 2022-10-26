<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('products');

		$ketqua = $ketqua->result_array();

		return $ketqua;
	}
	function deleteDataById($id)
	{
			$this->db->where('id', $id);
			if ($this->db->delete('products')) {
			}
			else
			{
				echo 'delete not complete';
			}
	}

}

/* End of file tableData_Model.php */
/* Location: ./application/models/tableData_Model.php */