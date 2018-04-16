<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {
 
	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function addUserToDB_model($data)
	{
		$this->load->database();
		if ($this->db->insert('usersinfomation', $data)) {
			$success_messenger = "register account success";
			$this->load->view('Register_view', array('success_messenger'=>$success_messenger));
		} else {
			echo 'fail';
		} 
	}

	public function uploadImage ($nameImage) {
		$tmp_name = $_FILES[$nameImage]["tmp_name"]; //luu vao bo nho tam
		$filename = 'uploadImages/'.$_FILES[$nameImage]["name"];//luu vao o tren server
		move_uploaded_file($tmp_name,$filename ); //thuc hien luu
		return $filename;
	}

	public function addUsers_model()
	{	
			$check = true;
			if(!empty($_POST)) {

				// print_r($_POST);
				foreach ($_POST as $key=>$value) {

					if (empty($_POST[$key])) {
						echo 'string';
						$check = false;
						$error_messenger = "all fields are required";
						$this->load->view('Register_view',array('error_messenger'=>$error_messenger));
						return;
					}
					
				}

				if($_POST['password'] != $_POST['confirmpassword']) {
					$error_messenger = "password should be same";
					$check = false;
					$this->load->view('Register_view', array('error_messenger'=>$error_messenger));
					return;
				}
				
				if (!isset($error_messenger)) {
					if (!filter_var($_POST['email'],  FILTER_VALIDATE_EMAIL)) {
						$error_messenger = "invalid Email Address";
						$check = false;
						$this->load->view('Register_view', array('error_messenger'=>$error_messenger));
						return;
					}

				}

				if(!isset($error_messenger)) {
					$hoten = $_POST['lastname'] . " " . $_POST['firstname'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$ngaysinh = date_format(date_create($_POST['birthdate']), 'Y-m-d');
					$linkfacebook = $_POST['linkfacebook'];
					$gender = $_POST['sex'];
					$image = $this->addData_model->uploadImage("fileImage");
					$imageCover = $this->addData_model->uploadImage("fileImageCover");
					$data = array(
						'hoten'=>$hoten,
						'ngaysinh'=>$ngaysinh,
						'linkfacebook'=>$linkfacebook,
						'gioitinh'=>$gender,
						'email'=>$email,
						'password'=>$password,
						'image'=>$image,
						'imageCover'=>$imageCover,
					);

					$this->addData_model->addUserToDB_model($data);
					return;
				}
			}


		
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */