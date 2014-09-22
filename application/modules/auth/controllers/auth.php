<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('auth_model');
	}
	
	function index()
	{
		if (!$this->session->userdata('id'))
		{
			$data['alert'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('alert');
			$this->load->view('login', $data);
		}
		else
		{
			redirect('imigran');
		}
	}
	
	function login()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning"><i class="elusive icon-info-sign"></i> ', '</div>');
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$result = $this->auth_model->check();
		
			if($result)
			{
				$this->session->set_userdata($result);
				$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Selamat datang! anda telah login</div>');
				redirect('imigran');
			}
			else
			{
				$this->session->set_flashdata('alert', '<div class="alert alert-warning"><i class="elusive icon-ok-sign"></i> Username atau Password salah</div>');
				redirect('auth');
			}		
		}
		
	}
	
	function profile()
	{
		// Breadcrumbs
		$this->breadcrumbs->push('<i class="elusive icon-home"></i>', base_url());
		$this->breadcrumbs->push('Profile', '#');
		
		$item = (array) $this->auth_model->profile();
				
		// Begin validation
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('username', 'username', 'required');		
		$this->form_validation->set_rules('password', 'password', 'min_length[6]');
		$this->form_validation->set_rules('passconf', 'confirmation', 'matches[password]');
				
		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('profile', $item, TRUE);
			$this->load->view('template', $data);
		}
		else
		{	
			$save['username'] = $this->input->post('username');
			$save['nama'] = $this->input->post('nama');
			if($this->input->post('password'))
			{
				$save['password'] = md5($this->input->post('password'));
			}
			else
			{
				$save['password'] = $item['password'];	
			}
									
			$this->auth_model->update_profile($save);
			redirect('/', 'refresh');
		}	
	}
	
	function logout()
	{
		$this->session->set_flashdata('alert', '<div class="alert alert-info"><i class="elusive icon-ok-sign"></i> Anda telah keluar</div>');
		$this->session->unset_userdata('id');
		redirect('auth');
	}	

}
