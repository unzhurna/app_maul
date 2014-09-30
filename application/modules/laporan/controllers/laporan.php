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
				$this->load->library('pdf');
				$this->pdf->SetHeaderData('slide.jpg', 9, 'KANIM II CIREBON', 'Jl. Sultan Ageng Tirtayasa No. 51 Cirebon 45153
');
				$this->pdf->AddPage();
				$this->pdf->SetFont("helvetica", "", 8);
				
				$item['source'] = $this->laporan_model->get_imigran_all();
				$html = $this->load->view('report', $item, TRUE);	
				$this->pdf->writeHTML($html, true, false, false, false, '');
				$this->pdf->Output('output.pdf', 'I');
				break;
			case 'kitas':
				$this->load->library('pdf');
				$this->pdf->SetHeaderData('slide.jpg', 9, 'KANIM II CIREBON', 'Jl. Sultan Ageng Tirtayasa No. 51 Cirebon 45153
');
				$this->pdf->AddPage();
				$this->pdf->SetFont("helvetica", "", 8);
				
				$item['source'] = $this->laporan_model->get_imigran_kitas();
				$html = $this->load->view('report2', $item, TRUE);	
				$this->pdf->writeHTML($html, true, false, false, false, '');
				$this->pdf->Output('output.pdf', 'I');
				break;
			case 'kitap':
				$this->load->library('pdf');
				$this->pdf->SetHeaderData('slide.jpg', 9, 'KANIM II CIREBON', 'Jl. Sultan Ageng Tirtayasa No. 51 Cirebon 45153
');
				$this->pdf->AddPage();
				$this->pdf->SetFont("helvetica", "", 8);
				
				$item['source'] = $this->laporan_model->get_imigran_kitap();
				$html = $this->load->view('report2', $item, TRUE);	
				$this->pdf->writeHTML($html, true, false, false, false, '');
				$this->pdf->Output('output.pdf', 'I');				
				break;
		}
	}
}
