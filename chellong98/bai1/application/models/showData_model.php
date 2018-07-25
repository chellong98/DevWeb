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

	public function editbyID($idlayve)
	{
		$this->db->select('*');
		$this->db->where('idSim', $idlayve);
		$dulieu = $this->db->get('so_sim'); 
		$dulieu = $dulieu->result_array();//chuyen du lieu ve mang
		// echo '<pre>';
		// var_dump($dulieu); //in ra gia triva kieu du lieu
		return $dulieu;
	}
	public function updateData($id, $so, $gia)
	{
		$dulieucanupdate = array(
			'idSim'=>$id,
			'soDienThoai'=>$so,
			'giaTien'=>$gia
		);

		$this->db->where('idSim', $id);
		return $this->db->update('so_sim', $dulieucanupdate);
	}
}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */