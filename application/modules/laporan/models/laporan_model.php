<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
	
	function get_data($tgl2, $tgl1)
	{
		$query = $this->db->get_where('kunjungan_view', array('tanggal <='=>$tgl2, 'tanggal >='=>$tgl1));
		return $query->result();
	}

}   