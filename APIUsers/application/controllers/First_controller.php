<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
	public function loadDatabase()
	{
		$this->load->database();
		$this->load->dbutil();

		if(!$this->dbutil->database_exists("cuccut123database")) {
			echo 'none';
		} else {
			echo 'ket noi thanh cong';
		}
	}
	public function loadView()
	{
		$this->load->view('First_view');
	}
	public function loadHelper()
	{
		// $_FILES["image"]
		$this->load->helper('Helper');
		UserReturn(0, "messenger", "data");
	}

	public function accountController()
	{
		$this->load->model('AddData_model');
		$this->AddData_model->getAccount();
	}

	public function postBaiDangController()
	{
		$this->load->model('AddData_model');
		$this->AddData_model->postBaiDang();
	}

	public function layToanBoBaiDangController()
	{
		$this->load->model('AddData_model');
		$this->AddData_model->layToanBoBaiDang();
	}

	public function loadCommentController()
	{
		$this->load->model('AddData_model');
		$this->AddData_model->loadComment();
	}
	public function postCommentController()
	{
		$this->load->model('AddData_model');
		$this->AddData_model->postComment();
	}
	public function postLikeController()
	{
		$this->load->model('AddData_model');
		$this->AddData_model->postlike();	
	}
	
	public function registerUserController()
	{
		$this->load->model('AddData_model');
		$this->AddData_model->registerUser();
	}
	

}

/* End of file Firtst_controller.php */
/* Location: ./application/controllers/Firtst_controller.php */
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class First_controller extends CI_Controller {	public function __construct()	{		parent::__construct();	}	public function index()	{			}	public function loadDatabase()	{		$this->load->database();		$this->load->dbutil();		if(!$this->dbutil->database_exists("cuccut123database")) {			echo 'none';		} else {			echo 'ket noi thanh cong';		}	}	public function loadView()	{		$this->load->view('First_view');	}	public function loadHelper()	{		// $_FILES["image"]		$this->load->helper('Helper');		UserReturn(0, "messenger", "data");	}	public function accountController()	{		$this->load->model('addData_model');		$this->addData_model->getAccount();	}	public function postBaiDangController()	{		$this->load->model('addData_model');		$this->addData_model->postBaiDang();	}	public function layToanBoBaiDangController()	{		$this->load->model('addData_model');		$this->addData_model->layToanBoBaiDang();	}	public function loadCommentController()	{		$this->load->model('addData_model');		$this->addData_model->loadComment();	}	public function postCommentController()	{		$this->load->model('addData_model');		$this->addData_model->postComment();	}	public function postLikeController()	{		$this->load->model('addData_model');		$this->addData_model->postlike();		}}/* End of file Firtst_controller.php *//* Location: ./application/controllers/Firtst_controller.php */
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
