<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormNeraca extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Neraca_model');
	}
	

	//function index
	/*public function index()
	{
		$data = array (
			'title' => 'Tes Tes',
			'data_neraca_aset' => $this->Neraca_model->get_all(),
			);
		$this->load->view('data_neraca_aset', $data);
		var_dump($data);
	}*/

	public function index()
	{ 
	
		$this->load->view('form_neraca_view');
	}

	//Tambah Data
	function tambah()
	{
		$data = array('title' => 'tambah data');
		$this->load->view('form_neraca_view', $data);

	}

	public function simpan ()
	{
	
		$data = array(
			'kassetarakas' => $this->input->post("kas-setara-kas"),
			'piutangusaha' =>$this->input->post("piutang-usaha"),
			'piutangpihakberelasi' => $this->input->post("piutang-pihak-berelasi")
			);
		$this->Neraca_model->simpan($data);
		$this->session->set_flashdata('notif', '<div class = "alert alert-success alert-dismissible"> 	Success! Data Saved </div>');

		redirect ('FormNeraca/');
		
	}

	
}
