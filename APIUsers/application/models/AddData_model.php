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
		$this->load->helper('helper_helper'); //load helper
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
		$this->load->helper('helper_helper');

		$idnguoidang = $_POST['idnguoidang']; 
		$noidung = $_POST['noidung'];
		$image = uploadImage('image');
		$imageSize  = null;
		if($image!=null)
		$imageSize = getimagesize("http://125.212.227.42:9000/DevWeb/APIUsers/".$image);

		// if($image=='') {
		// 	$imageSize = array(0,0);
		// } else {
		// 	$imageSize = getimagesize("D:\\GITTeam\\DevWeb\\APIUsers\\".$image);	
		// }
		 //layimage size
		$ngayDang = date("Y-m-d H:i:s");

		$baiDang = array(
			'idnguoidang'=>$idnguoidang,
			'noiDungBaiDang'=>json_encode(
				array('text'=>$noidung, 
					'image'=>$image, 
					'imageSize'=>(is_null($imageSize))?null:array('width'=>$imageSize[0], 'height'=>$imageSize[1])
			
				)),
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
			'image'=>$image,
			'imageSize'=>json_encode(array('width'=>$imageSize[0], 'height'=>$imageSize[1])),			
			'noiDungBaiDang'=>$noidung,
			'ngayDang'=>$ngayDang
		);

		// echo(json_encode($response));
		
		// file_put_contents('idnguoidang.txt', $idnguoidang);
		
		

		UserReturn(0, "response", $response); 


	}
 
	public function layToanBoBaiDang()
	{
		$idUser = $_POST['idUser'];
		// file_put_contents('account.txt', $idUser);
		$this->load->database();
		$user = $this->db->get_where('usersinfomation', array('sothutu'=>$idUser));
		$user = $user->result_array();
		foreach ($user as $key) {
			$user = $key;
		} 

		$this->db->select('*');
		$this->db->from('baidang');
		$this->db->order_by('idBaiDang', 'DESC');
		//$allPosts = $this->db->get_where('baidang', array('idnguoidang'=>$idUser));

		 $this->db->where("idnguoidang", $idUser);
		 $allPosts = $this->db->get();
		$allPosts = $allPosts->result_array();
		
		$NguoiLike = array();

		$query = $this->db->get('liketable');
		foreach ($query->result() as $row)
		{
			// echo json_encode($row['NguoiLike']);
		    array_push($NguoiLike, $row);
		}

		foreach ($allPosts as $key=> $value) {
			$idbaidang= $value['idBaiDang'];
			// echo $idbaidang . " ";
			$like = $this->db->get_where('liketable', array('idBaiDang'=>$idbaidang));
			$like = $like->result_array();
			// echo count($like) . " ";
		
			$allPosts[$key]['NguoiLike'] = $like;
			// echo json_encode($like);
			// echo $idbaidang;
			// echo json_encode($value);
			$comment = $this->db->get_where('commenttable', array('idbaidang'=>$idbaidang));
			$comment = $comment->result_array();
		
			$allPosts[$key]['soLuongComment'] = count($comment);

		}
		// echo json_encode($likesOfPost);
		$response = array(

			'NguoiLike'=>$NguoiLike,
			
			'user'=>$user,
			'allPosts'=>$allPosts,

		);
		$this->load->helper('helper_helper');
		UserReturn(0, "response", $response); 
	}

	public function loadComment()
	{
		$this->load->database();
		$this->load->helper('helper_helper');

		$idBaiDang = $_POST['idBaiDang'];
		$idNguoiDang =$_POST['idNguoiDang'];

		$this->db->select('*');
		$this->db->from('commenttable');
		$this->db->order_by('idComment', 'DESC');

		$this->db->join('usersinfomation', 'usersinfomation.sothutu = commenttable.idNguoiDang', 'left');
		$this->db->where('idBaiDang',$idBaiDang);
		$query = $this->db->get();
		$query = $query->result_array();
	
			return UserReturn(0, "response", $query);
		
	}

	public function postComment()
	{
		$this->load->database();
		$this->load->helper('helper_helper');

		$idNguoiComment = $_POST['idAccount'];
		$ndComment = $_POST['ndComment'];
		$idPost = $_POST['idPost'];
		$ngayComment = date('Y-m-d H:i:s');


		$comment = array(
			'idNguoiDang'=>$idNguoiComment,
			'idBaiDang'=>$idPost,
			'noiDungComment'=>json_encode(array(
				'idNguoiComment'=>$idNguoiComment,
				'ndComment'=>$ndComment, 
			)),
			'ngayComment'=>$ngayComment,
		);

		$this->db->insert('commenttable', $comment);

		UserReturn(0, 'response', array(
			'idAccount'=>$idNguoiComment,
			'ndComment'=>json_encode(array(
				'idNguoiComment'=>$idNguoiComment,
				'ndComment'=>$ndComment, 
			)),
			'idPost'=>$idPost,
			'ngayComment'=>$ngayComment, 

		));

	}

	public function postLike()
	{
		$this->load->database();
		$this->load->helper('helper_helper');

		$idBaiDang = $_POST['idBaiDang'];
		$idAccount = $_POST['idAccount'];

		$this->db->insert('liketable', array(
			'idBaiDang'=>$idBaiDang,
			'idNguoiLike'=>$idAccount,
		));
		UserReturn(0, "response", array(
			'idBaiDang'=>$idBaiDang,
			'idAccount'=>$idAccount
		));
	}
	
	public function registerUser()
	{
		$this->load->helper('helper_helper');
		$this->load->database();
		
		// print_r($_POST);
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$linkfacebook = $_POST['linkfacebook'];
		$password = $_POST['password'];
		$imageAvatar = uploadImage('imageAvatar');
		$imageCover = uploadImage('imageCover');
		$ngaysinh = $_POST['birthday'];
		
		
		$info = array(
			'hoten' => $lastname . " " . $firstname,
			'ngaysinh' => $ngaysinh,
			'email' => $email,
			'linkfacebook' => $linkfacebook,
			'gioitinh' => $gender,
			'password' => $password,
			'image' => $imageAvatar,
			'imageCover' => $imageCover,
			);
		$this->db->insert('usersinfomation', $info);
		UserReturn(0, 'response', $info); 
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */