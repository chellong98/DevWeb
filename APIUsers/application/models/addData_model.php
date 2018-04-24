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

	public function postBaiDang()
	{
		$idnguoidang = $_POST['idnguoidang']; 
		$noidung = $_POST['noidung'];
		$ngayDang = date("Y-m-d H:i:s");

		$baiDang = array(
			'idnguoidang'=>$idnguoidang,
			'noiDungBaiDang'=>$noidung,
			'ngayDang'=>$ngayDang
		);
		$this->load->database();
		$this->db->insert('baidang', $baiDang);
		// $this->db->select("*");
		// $this->db->from("usersinfomation");
		$user = $this->db->get_where('usersinfomation', array('sothutu'=>$idnguoidang));
		$user = $user->result_array();
		foreach ($user as $key) {
			$user = $key;
		}
		$response = array(
			'user'=>$user,
			'noiDungBaiDang'=>$noidung,
			'ngayDang'=>$ngayDang
		);

		
		// file_put_contents('idnguoidang.txt', $idnguoidang);
		
		$this->load->helper('Helper_helper');

		UserReturn(0, "response", $response); 


	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */