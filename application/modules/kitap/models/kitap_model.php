<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kitap_model extends CI_Model {
	
	function grid()
	{
		$query = $this->db->get_where('kitap_view');
		return $query->result();
	}
	
	function get_kitas($no_reg)
	{
		$query = $this->db->get_where('kitas', array('no_reg'=>$no_reg));
		return $query->row();
	}
	
	function get_imigran($id)
	{
		$query = $this->db->get_where('imigran', array('id'=>$id));
		return $query->row_array();
	}
	
	function opt_imigran()
	{
		$result = $this->db->get('imigran')->result_array();
		
		$data[''] = '-- Imigran --' ;
		foreach($result as $opt)
		{
			$data[$opt['id']] = $opt['no_paspor'];
		}
		return $data;
	}

	function opt_negara()
	{
		$result = $this->db->get('negara')->result_array();
		
		$data[''] = '-- Kebangsaan --' ;
		foreach($result as $opt)
		{
			$data[$opt['id']] = '['.$opt['kode_iso'].'] '.$opt['nm_negara'];
		}
		return $data;
	}
	
	function opt_sponsor()
	{
		$result = $this->db->get('sponsor')->result_array();
		
		$data[''] = '-- Sponsor --' ;
		foreach($result as $opt)
		{
			$data[$opt['id']] = $opt['nm_sponsor'];
		}
		return $data;
	}
	
	function save_kitap($data)
	{
		$this->db->insert('ijin_tinggal', $data);
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah ditambah</div>');
	}
    	
}   
