<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda_model extends CI_Model {
		
	function __construct()
	{
		parent:: __construct();
	}
	
	function count_pasien()
	{
		$query =  $this->db->count_all_results('pasien');
		return $query;	
	}
	
	function count_dokter()
	{
		$query =  $this->db->count_all_results('dokter');
		return $query;	
	}
	
	function count_poli()
	{
		$query =  $this->db->count_all_results('poliklinik');
		return $query;	
	}
	
	function count_kunjungan()
	{
		$query =  $this->db->count_all_results('kunjungan');
		return $query;	
	}
	
}   