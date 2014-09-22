<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsor_model extends CI_Model {
	
	function grid()
	{
		$query = $this->db->get('sponsor');
		return $query->result();
	}
	
	function get_sponsor($id)
	{
		$query = $this->db->get_where('sponsor', array('id'=>$id));
		return $query->row();
	}
	
	function opt_negara()
	{
		$result = $this->db->get('negara')->result_array();
		
		$data[''] = '-- Kebangsaan --' ;
		foreach($result as $opt)
		{
			$data[$opt['id']] = '['.$opt['kode_iso'].'] '.$opt['nama'];
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
	
	function save_sponsor($data)
	{
		if($data['id'])
		{
			$this->db->update('sponsor', $data, array('id'=>$data['id']));
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah diubah</div>');
		}
		else
		{
			$this->db->insert('sponsor', $data);
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah ditambahkan</div>');
		}
	}
	
	function delete_sponsor($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('sponsor');
		$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="elusive icon-ok-sign"></i> Data telah dihapus</div>');
	}
    	
}   
