<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAccount()
	{

		$json = json_decode($_POST["json"]);
		$username =$json->username;
		$password = $json->password;
		file_put_contents('./test.txt',$username);
		$this->load->helper('Helper_helper'); //load helper
		$this->load->database();
		$sql = "SELECT * FROM usersinfomation WHERE email = ? AND password = ?";
		$result = $this->db->query($sql, array($username, $password));
		if($result->num_rows() > 0) {
			$this->db->select('*');
			 $dulieu = $this->db->get('usersinfomation');
			 $dulieu = $dulieu->result_array();
			UserReturn(0, "đăng nhập thành công",$dulieu); //goi helper
			
		} else {
			
			UserReturn(1, "đăng nhập thất bại",''); //goi helper 
		}
		
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */