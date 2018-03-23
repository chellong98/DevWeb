<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getData()
	{
		$this->load->database();
		$this->db->select('*'); //lay heet du lieu
		$dulieu = $this->db->get('so_sim'); //tu bang so sim

		$dulieu = $dulieu->result_array(); //bien ket qua thanh 1 mang
		return $dulieu;
		// echo "<pre>";
		// var_dump($dulieu); //in ra ket qua
	}

	public function deleteDataById($id)
	{
		$this->db->where('idSim', $id);
		return $this->db->delete('so_sim');
		
	}
}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */