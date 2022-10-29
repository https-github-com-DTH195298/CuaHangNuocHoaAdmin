<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class listAccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('listAccount_Model');
		$dulieu = $this->listAccount_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('listAccount_View', $dulieu, FALSE);
	}
	public function editUsers($idLayVe)
	{
		$this->load->model('listAccount_Model');
		$ketqua = $this->listAccount_Model->editusersById($idLayVe);
		$ketqua = array('mangketqua' => $ketqua);

		//truyen ket qua vao sua du lieu

		$this->load->view('editUsers_View', $ketqua,FALSE);
	}

	public function updateUsers()
	{
		//lay du lieu tu view ve
		$id = $this->input->post('id');
		$name = $this->input->post('email');
		$password = $this->input->post('password');
		$avatar = $this->input->post('avatar');
		//load data
		$this->load->model('tableData_Model');
		// su dung ham trong models  voi gia tri nhan duoc
		if ($this->tableData_Model->updateDataById($id,$name,$password,$avatar)) {
			echo 'thanh cong';
		}
		else {
			echo 'khong thanh cong';
		}

	}

}

/* End of file listAccount.php */
/* Location: ./application/controllers/listAccount.php */