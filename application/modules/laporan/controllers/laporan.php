<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('laporan_model');
		if (!$this->session->userdata('id'))
		{
			show_404();
			exit;
		}
	}
	
	function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		//Breadcrumbs
		$this->breadcrumbs->push('<span class="elusive icon-home"></span>', base_url());
		$this->breadcrumbs->push('Ceta Data Imigran', '#');
		
		$data['content'] = $this->load->view('form', '', TRUE);
		$data['script'] = $this->load->view('formComponent', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function printout(){
		
		$tipe = $this->input->post('tipe');
		
		switch ($tipe)
		{
			case 'all':
				$item['source'] = $this->laporan_model->get_imigran_all();
				break;
			case 'kitas':
				$item['source'] = $this->laporan_model->get_imigran_where();
				break;
			case 'kitap':
				$item['source'] = $this->laporan_model->get_imigran_where();				
				break;
		}
	}
	
	function printout()
	{
		$this->load->library('pdf');
		$this->pdf->SetHeaderData('slide.jpg', 9, 'UNIT RAWAT JALAN RS BUDILUHUR', 'Jln. Raya Palasa Desa Cisambeng/ Kec Palasan, Kabupaten Majalengka');
		$this->pdf->AddPage();
		$this->pdf->SetFont("helvetica", "", 8);
		
		$tgl = explode(' - ', $this->input->post('tanggal'));
		$item['periode'] = $this->input->post('tanggal');
		$item['source'] = $this->laporan_model->get_data(format_ymd($tgl[1]), format_ymd($tgl[0]));
		$html = $this->load->view('report', $item, TRUE);	
		$this->pdf->writeHTML($html, true, false, false, false, '');
		$this->pdf->Output('output.pdf', 'I');
	}
	
}
