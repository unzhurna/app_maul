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
		$item['kunjungan'] = $this->beranda_model->count_kunjungan();
		$item['pasien'] = $this->beranda_model->count_pasien();
		$item['dokter'] = $this->beranda_model->count_dokter();
		$item['poliklinik'] = $this->beranda_model->count_poli();
		$item['no_pol'] = no_trx($this->db->count_all('pasien'));
		$data['content'] = $this->load->view('beranda', $item, TRUE);
		$this->load->view('template', $data);
	}
}