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
/* Location: ./application/models/users_model.php */