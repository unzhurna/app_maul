<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imigran extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('imigran_model');
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
		$this->breadcrumbs->push('Data Imigran', '#');
		
		$item['source'] = $this->imigran_model->grid();
		$data['content'] = $this->load->view('datagrid', $item, TRUE);
		$data['script'] = $this->load->view('dataTables', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function post($id = FALSE)
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'googlemaps'));

		$config['center'] = '-6.737246, 108.550656';
		$config['places'] = TRUE;
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);
	
		if($id)
		{
			//Breadcrumbs
			$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
			$this->breadcrumbs->push('Data Imigran', base_url().'imigran');
			$this->breadcrumbs->push('Edit Data', '#');
			
			$item = (array) $this->imigran_model->get_imigran($id);
			$marker = array();
			$marker['position'] = $item['alamat'];
			$marker['draggable'] = FALSE;
			$marker['animation'] = 'DROP';
			$this->googlemaps->add_marker($marker);
		}
		else
		{
			//Breadcrumbs
			$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
			$this->breadcrumbs->push('Data Imigran', base_url().'imigran');
			$this->breadcrumbs->push('Tambah Data', '#');
			
			$item = array(
				'id'=>$id,
				'no_paspor'=>'',
				'nm_imigran'=>'',
				'kelamin'=>'',
				'tmpt_lahir'=>'',
				'tgl_lahir'=>'',
				'id_negara'=>'',
				'id_sponsor'=>'',
				'alamat'=>''
			);	
		}
		$item['opt_negara'] = $this->imigran_model->opt_negara();
		$item['opt_sponsor'] = $this->imigran_model->opt_sponsor();
		$item['map'] = $this->googlemaps->create_map();		
							
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('no_paspor', 'no. paspor', 'required|numeric');
		$this->form_validation->set_rules('nm_imigran', 'nama', 'required');
		$this->form_validation->set_rules('kelamin', 'kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'tempat', 'required');
		$this->form_validation->set_rules('id_negara', 'kebangsaan', 'required');
		$this->form_validation->set_rules('id_sponsor', 'sponsor', 'required');
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
			$save['no_paspor'] = $this->input->post('no_paspor');
			$save['nm_imigran'] = $this->input->post('nm_imigran');
			$save['kelamin'] = $this->input->post('kelamin');
			$save['tmpt_lahir'] = $this->input->post('tmpt_lahir');
			$save['tgl_lahir'] = format_ymd($this->input->post('tgl_lahir'));
			$save['id_negara'] = $this->input->post('id_negara');
			$save['id_sponsor'] = $this->input->post('id_sponsor');
			$save['alamat'] = $this->input->post('alamat');
			
			$this->imigran_model->save_imigran($save);
			redirect('imigran');
		}
	}
	
	function delete($id)
	{
		$this->imigran_model->delete_imigran($id);
		redirect('imigran');	
	}
}
