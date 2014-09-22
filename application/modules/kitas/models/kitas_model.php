<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kitas_model extends CI_Model {
	
	function grid()
	{
		$query = $this->db->get('kitas_view');
		return $query->result();
	}
	
	function get_kitas($no_reg)
	{
		$query = $this->db->get_where('kitas', array('no_reg'=>$no_reg));
		return $query->row();
	}
	
	function opt_imigran()
	{
		$result = $this->db->get('imigran')->result_array();
		
		$data[''] = '-- Imigran --' ;
		foreach($result as $opt)
		{
			$data[$opt['id']] = '['.$opt['no_paspor'].'] '.$opt['nm_imigran'];
		}
		return $data;
	}
	
	function save_kitas($data)
	{
		$this->db->insert('kitas', $data);
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah ditambah</div>');
	}
	
	function update_kitas($data)
	{
		$this->db->update('kitas', $data, array('no_reg'=>$data['no_reg']));
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah diubah</div>');
	}
	
	function delete_kitas($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('kitas');
		$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="elusive icon-ok-sign"></i> Data telah dihapus</div>');
	}
    	
}   
