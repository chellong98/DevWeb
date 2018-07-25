<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getInfoUserFromDB()
	{
		$this->load->database();
		 
	}

}

/* End of file users_model.php */
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getInfoUserFromDB()
	{
		$this->load->database();
		 
	}

}

/* End of file users_model.php */
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
/* Location: ./application/models/users_model.php */