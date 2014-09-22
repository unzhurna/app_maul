<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {
    	
    function __construct()
    {
        parent::__construct();
    }
	
	function check()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		$result = $this->db->get_where('admin', array('username' => $username, 'password'=>$password));
				
		if ($result->num_rows() > 0)
		{
			return $result->row_array();
		}
		else
		{
			return FALSE;
		}
	}
	
	function profile()
	{
		$query = $this->db->get_where('admin', array('id'=>$this->session->userdata('id')));
		return  $query->row();
	}
	
	function update_profile($data)
	{
		$this->db->update('admin', $data, array('id'=>$this->session->userdata('id')));
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Data telah berhasil diubah</div>');
	}

}
