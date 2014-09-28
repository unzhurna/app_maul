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
		
		//$item['source'] = $this->kitas_model->grid();
		$data['content'] = $this->load->view('datagrid', '', TRUE);
		$data['script'] = $this->load->view('dataTables', '', TRUE);
		$this->load->view('template', $data);
	}
	
	function tampil()
	{
		$nama = $this->input->post('kirimNama');
		$data['hasil_semua']=$this->dosen_model->tampil_dosen_semua($nama);
		$data['hasil_limit']=$this->dosen_model->tampil_dosen_limit($nama);
		if($nama!="")
		{
			echo '<ul>';
				foreach($data['hasil_limit']->result() as $result)
				{
			 		echo '<li onClick="pilih(\''.$result->nama_depan.'\');">
					<img src="'.base_url().'images/orang.jpg" style="padding-right:10px; float:left;">
					<b>'.$result->nama_dosen.'</b><br>NIDN : '.$result->nama_belakang.'</li>';
				}
				echo '<li id="total">
				<a href="'.base_url().'index.php/autocomplete/detail/'.$nama.'" class="thickbox">
				Terdapat <b>'.$data['hasil_semua']->num_rows().'</b> hasil pencarian dengan kata "<b>'.$nama.'</b>"</a></li>';
			echo '</ul>';
		}
		else
		{
			echo "error";
		}
	}
	
	function detail()
	{
		$nama = $this->uri->segment(3);
		$data['hasil_semua']=$this->dosen_model->tampil_dosen_semua($nama);
		echo '<ul>';
		foreach($data['hasil_semua']->result() as $result)
			{
	         		echo '<li onClick="pilih(\''.$result->nama_depan.'\');">
				<img src="'.base_url().'images/orang.jpg" style="padding-right:10px; float:left;">
				<b>'.$result->nama_belakang.'</b><br>NIDN : '.$result->nama_belakang.'</li>';
			}
		echo '</ul>';
	}
	
	function test()
	{
		echo $this->input->post('no_pas');
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
		$item['opt_negara'] = $this->kitas_model->opt_negara();
		$item['opt_sponsor'] = $this->kitas_model->opt_sponsor();
		
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_rules('id_imigran', 'imigran', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'masa berlaku', 'required');
						
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = $this->load->view('form', $item, TRUE);
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
	
	function fill_form()
	{
		$term = $this->input->post('nopas');
		
		$imigran = $this->kitas_model->get_imigran($term);
		$json = array();
		foreach($imigran as $r)
		{
			$return['nm_imigran'] = $r->nm_imigran."<br>";
			$return['kelamin'] = $r->kelamin."<br>";
			$return['tmpt_lahir'] = $r->tmpt_lahir."<br>";
			$return['tgl_lahir'] = $r->tgl_lahir."<br>";
			$return['id_negara'] = $r->id_negara."<br>";
			$return['id_sponsor'] = $r->id_sponsor."<br>";
			$return['alamat'] = $r->alamat;
			$json[] = $return;
		}
		echo json_encode($json);
	}
	
	function delete($id)
	{
		$this->kitas_model->delete_kitas($id);
		redirect('kitas');	
	}
}
