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

}

/* End of file showData_controller.php */
/* Location: ./application/controllers/showData_controller.php */