<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['solorum'] 		= $this->getdata_m->getdatasolorum();
		$data['sologupit'] 		= $this->getdata_m->getdatasologupit();
		$data['soloplesan'] 	= $this->getdata_m->getdatasoloplesan();

		$this->load->view('kota/solo/solo', $data);
	}
}
