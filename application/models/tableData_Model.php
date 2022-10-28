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
	function editStaffById($i)
	{
		$this->db->select('*');
		$this->db->where('id', $i);
		$dulieu =$this->db->get('staff');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	function editProductsById($i)
	{
		$this->db->select('*');
		$this->db->where('id', $i);
		$dulieu =$this->db->get('products');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function updateDataById($id,$name,$Position,$Location,$Age,$Start_Date,$Salary)
	{
		$dulieucanupdate = array(
			'id' => $id,
			'name' => $name,
			'Position' =>$Position,
			'Location' => $Location,
			'Age' => $Age,
			'Start_Date' => $Start_Date,
			'Salary' => $Salary,
			);
		$this->db->where('id', $id);
		 return $this->db->update('staff', $dulieucanupdate);
	}

}

/* End of file tableData_Model.php */
/* Location: ./application/models/tableData_Model.php */