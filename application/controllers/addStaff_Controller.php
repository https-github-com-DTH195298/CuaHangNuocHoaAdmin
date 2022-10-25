<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addStaff_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//truyen du lieu vao model
		$name = $this->input->post('name');
		$Position = $this->input->post('Position');
		$Location = $this->input->post('Location');
		$Age = $this->input->post('Age');
		$Start_date = $this->input->post('Start_Date');
		$Salary = $this->input->post('Salary');

		$this->load->model('addData_Model');

		if ($this->addData_Model->insert($name, $Position, $Location, $Age, $Start_date, $Salary))
		 {
			// code...
			$this->load->model('tableData_Model');
			$dulieu = $this->tableData_Model->getdatabase();
			$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
			$this->load->view('table_View',$dulieu, FALSE);
		}
		else
		{
			echo "that bai";
		}
	}
	}


/* End of file addStaff_Controller.php */
/* Location: ./application/controllers/addStaff_Controller.php */