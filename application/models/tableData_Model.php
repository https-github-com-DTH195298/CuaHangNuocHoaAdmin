<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tableData_Model extends CI_Model {

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
	}
	function deleteDataById($id)
	{
			$this->db->where('id', $id);
			if ($this->db->delete('staff')) {
			}
			else
			{
				echo 'delete not complete';
			}
	}
	function showDetailsDataById($id)
	{
		$this->db->where('id', $id);
			if ($this->db->select('*')) {
				$ketqua = $this->db->get('staff');

				$ketqua = $ketqua->result_array();
			}
			else
			{
				echo 'loi truy van';
			}
	}

}

/* End of file tableData_Model.php */
/* Location: ./application/models/tableData_Model.php */