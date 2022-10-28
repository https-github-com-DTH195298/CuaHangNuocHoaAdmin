<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		 $this->load->model('products_Model');
		 $dulieu = $this->products_Model->getdatabase();
		 $dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		$this->load->view('shopPage_View', $dulieu, false);
	}
	public function editProducts($idLayVe)
	{
		$this->load->model('products_Model');
		$ketqua = $this->products_Model->editProductById($idLayVe);
		$ketqua = array('mangketqua' => $ketqua);

		//truyen ket qua vao sua du lieu

		$this->load->view('editProduct_View', $ketqua,FALSE);
	}

	public function updateProduct()
	{
		//lay du lieu tu view ve
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$brand = $this->input->post('brand');
		$price = $this->input->post('price');
		$amount = $this->input->post('amount');
		$imageproduct = $this->input->post('imageproduct');
// 

		$this->load->model('products_Model');
		// su dung ham trong models  voi gia tri nhan duoc
		if ($this->products_Model->updateDataById($id,$name,$brand,$price,$amount,$imageproduct)) {
			echo 'thanh cong';
		}
		else {
			echo 'khong thanh cong';
		}

	}

}

/* End of file homepage_Controller.php */
/* Location: ./application/controllers/homepage_Controller.php */