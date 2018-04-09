<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function addUserToDB($data, $check)
	{
		$this->load->database();
		if ($this->db->insert('usersinfomation', $data)) {
			$this->load->view('Register_view', array('data'=>$data, 'check'=>$check));
		} else {
			echo 'fail';
		}
	}

	public function uploadImage () {
		$tmp_name = $_FILES["file"]["tmp_name"]; //luu vao bo nho tam
		$filename = 'uploadImages/'.$_FILES["file"]["name"];//luu vao o tren server
		move_uploaded_file($tmp_name,$filename ); //thuc hien luu
		return $filename;
	}
	
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */