<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $this->load->view('showData_view'); // -_ -: vlo d:)) gio moi de y :#
		//show model
		$this->load->model('showData_model');

		$dulieu = $this->showData_model->getData();

		$dulieu = array("dulieu" => $dulieu); //bien no thanh mang
		// echo '<pre>';
		// var_dump($dulieu);
		$this->load->view('showData_view', $dulieu); 
	}

	public function deleteData()
	{
		$id = $this->input->get("delete");

		// $id = $_GET["delete"];
		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($id)) {
			$this->load->view('thongbaoxoa');
		}
	}
	public function editsim($id)
	{
		$this->load->model('showData_model');
		$dulieu = $this->showData_model->editbyID($id);
		$dulieu = array('dulieu'=>$dulieu);
		$this->load->view('EditData_view', $dulieu);
	}
	public function updateDuLieu()
	{
		// echo 'string';
		$id = $this->input->post('id');
		$soDienThoai = $this->input->post('num');
		$giaTien = $this->input->post('cost');
		// echo $id;
		// echo '<br/>';
		// echo $soDienThoai;
		//  echo $giaTien;
		$this->load->model('showData_model');
		if($this->showData_model->updateData($id, $soDienThoai, $giaTien)) {
			echo 'thanh cong';
		} else {
			echo 'that bai';
		}
	}
}

/* End of file showData_controller.php */
/* Location: ./application/controllers/showData_controller.php */