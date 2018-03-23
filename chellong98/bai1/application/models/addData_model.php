<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($num, $cost)
	{
		$this->load->database();
		$dulieu = array('soDienThoai'=>$num, 'giaTien'=>$cost);
		$this->db->insert("so_sim", $dulieu);
		
		$this->load->dbutil();

// check connection details
		if( !$this->dbutil->database_exists('thongtinsim')){
    		echo 'Not connected to a database, or database not exists';
		} else {
			echo "ket noi thanh cong <br/>";
		}
		return $this->db->insert_id(); //tra ve 1 so neu insert thanh cong
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */