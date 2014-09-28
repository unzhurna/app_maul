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
	
	function get_imigran($no_paspor)
	{
		$query = $this->db->get_where('imigran', array('no_paspor'=>$no_paspor));
		return $query->result();
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
		
	function tampil_dosen_semua($nama)
	{
		$q = $this->db->query("select * from ci_login where nama_depan like '%$nama%'");
		return $q;
	}
	function tampil_dosen_limit($nama)
	{
		$q = $this->db->query("select * from ci_login where nama_depan like '%$nama%' LIMIT 8");
		return $q;
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
