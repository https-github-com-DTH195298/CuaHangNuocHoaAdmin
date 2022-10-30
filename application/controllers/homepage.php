<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('tableData_Model');
		$dulieu = $this->tableData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('homepage_View', $dulieu, FALSE);
	}

	public function editStaff($idLayVe)
	{
		$this->load->model('tableData_Model');
		$ketqua = $this->tableData_Model->editStaffById($idLayVe);
		$ketqua = array('mangketqua' => $ketqua);

		//truyen ket qua vao sua du lieu

		$this->load->view('editStaff_View', $ketqua,FALSE);
	}

	public function updateStaff()
	{
		//lay du lieu tu view ve
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$Position = $this->input->post('Position');
		$Location = $this->input->post('Location');
		$Age = $this->input->post('Age');
		$Start_Date = $this->input->post('Start_Date');
		$Salary = $this->input->post('Salary');

		$this->load->model('staffData_Model');
		// su dung ham trong models  voi gia tri nhan duoc
		if ($this->tableData_Model->updateDataById($id,$name,$Position,$Location,$Age,$Start_Date,$Salary)) {
			echo 'thanh cong';
		}
		else {
			echo 'khong thanh cong';
		}
	}
	function deleteData($idnhanduoc)
	{
		
		$this->load->model('staffData_Model');
		$this->staffData_Model->deleteDataById($idnhanduoc);
		$dulieu = $this->staffData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('table_View', $dulieu, FALSE);
	}
}

/* End of file homepage_Controller.php */
/* Location: ./application/controllers/homepage_Controller.php */