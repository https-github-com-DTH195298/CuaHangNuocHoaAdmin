<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class listUsers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('listUsers_Model');
		$dulieu = $this->listUsers_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('listUsers_View', $dulieu, FALSE);
	}
	public function editUsers($idLayVe)
	{
		$this->load->model('listUsers_Model');
		$ketqua = $this->listUsers_Model->editusersById($idLayVe);
		$ketqua = array('mangketqua' => $ketqua);

		//truyen ket qua vao sua du lieu

		$this->load->view('editUsers_View', $ketqua,FALSE);
	}
	function deleteData($idnhanduoc)
	{
		
		$this->load->model('listUsers_Model');
		$this->listUsers_Model->deleteDataById($idnhanduoc);
		$dulieu = $this->listUsers_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('listUsers_View', $dulieu, FALSE);
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
	public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 500;
                $config['max_width']            = 2056;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }

}

/* End of file listUsers.php */
/* Location: ./application/controllers/listUsers.php */