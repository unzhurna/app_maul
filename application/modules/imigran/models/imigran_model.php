<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imigran_model extends CI_Model {
	
	function grid()
	{
		$query = $this->db->get('imigran_view');
		return $query->result();
	}
	
	function get_imigran($id)
	{
		$query = $this->db->get_where('imigran', array('id'=>$id));
		return $query->row();
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
	
	function save_imigran($data)
	{
		if($data['id'])
		{
			$this->db->update('imigran', $data, array('id'=>$data['id']));
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah diubah</div>');
		}
		else
		{
			$this->db->insert('imigran', $data);
			$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah ditambahkan</div>');
		}
	}
	
	function delete_imigran($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('imigran');
		$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="elusive icon-ok-sign"></i> Data telah dihapus</div>');
	}
    	
}   
