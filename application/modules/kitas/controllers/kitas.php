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
		$this->breadcrumbs->push('Data KITAS', '#');
		
		$item['source'] = $this->kitas_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('dataTables', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function fill_form($term = FALSE)
	{
		$imigran = $this->kitas_model->get_imigran($term);
		$item = array(
			'id'=>$imigran['id'],
			'nm_imigran'=>$imigran['nm_imigran'],
			'kelamin'=>$imigran['kelamin'],
			'tmpt_lahir'=>$imigran['tmpt_lahir'],
			'tgl_lahir'=>format_dmy($imigran['tgl_lahir']),
			'id_negara'=>$imigran['id_negara'],
			'id_sponsor'=>$imigran['id_sponsor'],
			'alamat'=>$imigran['alamat']
		);
		echo json_encode($item);
	}
	
	function post()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation'));
			
		//Breadcrumbs
		$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
		$this->breadcrumbs->push('Registrasi KITAS', base_url().'kitas');
		$this->breadcrumbs->push('Tambah Data', '#');
		
		$item['no_reg'] = no_kis($this->db->count_all('ijin_tinggal'));
		$item['opt_imigran'] = $this->kitas_model->opt_imigran();
		$item['opt_negara'] = $this->kitas_model->opt_negara();
		$item['opt_sponsor'] = $this->kitas_model->opt_sponsor();
									
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('expired', 'masa berlaku', 'required');
				
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form', $item, TRUE);
			$data['script'] = $this->load->view('formComponent', '', TRUE);
			$this->load->view('template', $data);	
		}
		else
		{
			$save['no_reg'] = $this->input->post('no_reg');
			$save['id_imigran'] = $this->input->post('id');
			$save['tipe'] = 'kitas';
			$save['masa_berlaku'] = format_ymd($this->input->post('expired'));
			
			$this->kitas_model->save_kitas($save);
			redirect('kitas');
		}
	}
}
