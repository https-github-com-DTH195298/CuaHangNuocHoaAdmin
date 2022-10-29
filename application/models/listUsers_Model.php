<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class listUsers_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('users');

		$ketqua = $ketqua->result_array();

		return $ketqua;
	}
	function deleteDataById($id)
	{
			$this->db->where('id', $id);
			if ($this->db->delete('users')) {
			}
			else
			{
				echo 'delete not complete';
			}
	}
	function editusersById($i)
	{
		$this->db->select('*');
		$this->db->where('id', $i);
		$dulieu =$this->db->get('users');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function updateDataById($id,$email,$password,$avatar)
	{
		$dulieucanupdate = array(
			'id' => $id,
			'email' => $email,
			'password' =>$password,
			'avatar' => $avatar,
			);
		$this->db->where('id', $id);
		 return $this->db->update('users', $dulieucanupdate);
	}

}

/* End of file listUsers.php */
/* Location: ./application/models/listUsers.php */