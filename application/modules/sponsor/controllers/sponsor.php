<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsor extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('sponsor_model');
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}
	
	function index()
	{
		//Breadcrumbs
		$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
		$this->breadcrumbs->push('Data sponsor', '#');
		
		$item['source'] = $this->sponsor_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('dataTables', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function post($id = FALSE)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
			
		if($id)
		{
			//Breadcrumbs
			$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
			$this->breadcrumbs->push('Data sponsor', base_url().'sponsor');
			$this->breadcrumbs->push('Edit Data', '#');
			
			$item = (array) $this->sponsor_model->get_sponsor($id);
		}
		else
		{
			//Breadcrumbs
			$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
			$this->breadcrumbs->push('Data sponsor', base_url().'sponsor');
			$this->breadcrumbs->push('Tambah Data', '#');
			
			$item = array(
				'id'=>$id,
				'nm_sponsor'=>'',
				'no_telp'=>'',
				'email'=>'',
				'website'=>'',
				'alamat'=>''
			);	
		}
							
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('nm_sponsor', 'sponsor', 'required');
		$this->form_validation->set_rules('no_telp', 'no. telp', 'required|numeric');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('website', 'website', 'required|valid_url');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
				
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form', $item, TRUE);
			$data['script'] = $this->load->view('formComponent', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['id'] = $id;
			$save['nm_sponsor'] = $this->input->post('nm_sponsor');
			$save['no_telp'] = $this->input->post('no_telp');
			$save['email'] = $this->input->post('email');
			$save['website'] = $this->input->post('website');
			$save['alamat'] = $this->input->post('alamat');
			
			$this->sponsor_model->save_sponsor($save);
			redirect('sponsor');
		}
	}
	
	function delete($id)
	{
		$this->sponsor_model->delete_sponsor($id);
		redirect('sponsor');	
	}
}
