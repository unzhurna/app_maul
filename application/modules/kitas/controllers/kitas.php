<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kitas extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('kitas_model');
		$this->load->helper('number');
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
		$this->breadcrumbs->push('Data Kitas', '#');
		
		$item['source'] = $this->kitas_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('dataTables', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function post_save()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
				
		//Breadcrumbs
		$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
		$this->breadcrumbs->push('Data Kitas', base_url().'kitas');
		$this->breadcrumbs->push('Tambah Data', '#');
		
		$item['no_reg'] = no_kis($this->db->count_all('kitas'));		
		$item['opt_imigran'] = $this->kitas_model->opt_imigran();
							
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('id_imigran', 'imigran', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'masa berlaku', 'required');
						
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form_save', $item, TRUE);
			$data['script'] = $this->load->view('formComponent', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['no_reg'] = $this->input->post('no_reg');
			$save['id_imigran'] = $this->input->post('id_imigran');
			$save['masa_berlaku'] = format_ymd($this->input->post('masa_berlaku'));
						
			$this->kitas_model->save_kitas($save);
			redirect('kitas');
		}
	}
	
	function post_update($no_reg)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
			
		//Breadcrumbs
		$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
		$this->breadcrumbs->push('Data Kitas', base_url().'kitas');
		$this->breadcrumbs->push('Edit Data', '#');
		
		$item = (array) $this->kitas_model->get_kitas($no_reg);
		$item['opt_imigran'] = $this->kitas_model->opt_imigran();
							
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('id_imigran', 'imigran', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'masa berlaku', 'required');
						
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form_update', $item, TRUE);
			$data['script'] = $this->load->view('formComponent', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['no_reg'] = $this->input->post('no_reg');
			$save['id_imigran'] = $this->input->post('id_imigran');
			$save['masa_berlaku'] = format_ymd($this->input->post('masa_berlaku'));
						
			$this->kitas_model->update_kitas($save);
			redirect('kitas');
		}
	}
	
	function delete($id)
	{
		$this->kitas_model->delete_kitas($id);
		redirect('kitas');	
	}
}
