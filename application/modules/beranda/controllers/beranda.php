<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('beranda_model');
		$this->load->helper('form');
		$this->load->helper('number');
		$this->load->library('form_validation');
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}
	
	function index()
	{
		$data['alert'] = $this->session->flashdata('alert');
		$imigran = $this->beranda_model->get_imigran();
		
		$this->load->library('googlemaps');

		$config['center'] = '-6.737246, 108.550656';
		$config['zoom'] = 'auto';
		$config['cluster'] = TRUE;
		$this->googlemaps->initialize($config);

		
		foreach($imigran as $row)
		{
			$marker = array();
			$marker['position'] = $row->location;
			$marker['infowindow_content'] = anchor('imigran/post/'.$row->id, '<i class="elusive icon-user"></i> '.$row->nm_imigran, 'class="btn btn-xs"');
			$marker['icon'] = base_url('assets/img/marker.png');
			$marker['animation'] = 'DROP';			
			$this->googlemaps->add_marker($marker);
		}
		$item['map'] = $this->googlemaps->create_map();

		$data['content'] = $this->load->view('beranda', $item, TRUE);
		$this->load->view('template', $data);
	}
}
