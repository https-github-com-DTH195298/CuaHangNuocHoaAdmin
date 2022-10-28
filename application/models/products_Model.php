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

	function editProductById($i)
	{
		$this->db->select('*');
		$this->db->where('id', $i);
		$dulieu =$this->db->get('products');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function updateDataById($id,$name,$brand,$price,$amount,$imageproduct)
	{
		$dulieucanupdate = array(
			'id' => $id,
			'name' => $name,
			'brand' =>$brand,
			'price' => $price,
			'amount' => $amount,
			'imageproduct' => $imageproduct
			);
		$this->db->where('id', $id);
		 return $this->db->update('products', $dulieucanupdate);
	}

}

/* End of file tableData_Model.php */
/* Location: ./application/models/tableData_Model.php */