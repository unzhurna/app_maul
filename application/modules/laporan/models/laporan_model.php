<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
	
	function get_imigran_all()
	{
		$query = $this->db->get('imigran_view');
		return $query->result();
	}
	
	function get_imigran_kitas()
	{
		$query = $this->db->get('kitas_view');
		return $query->result();
	}
	
	function get_imigran_kitap()
	{
		$query = $this->db->get('kitap_view');
		return $query->result();
	}

}   