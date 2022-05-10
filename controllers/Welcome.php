<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_datadiri','mself');
	}

	public function index() //route atau file yg ada
	{
		$data=[
			'data'=>$this->mself->getdatadiri(),
			'data2'=>$this->mself->getdataorganisasi()->result(),
			'data3'=>$this->mself->getdatakeahlian()->result()
		];
		//creating debug for view data
		//echo json_encode($data);
		//echo $data['data']->nama;
		$this->load->view('utama',$data);
	}

	public function home_dua()
	{
		$this->load->view('template/header');
		$this->load->view('template/content');
		$this->load->view('template/footer');
	}
}