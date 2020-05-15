<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $data['solorum'] 		= $this->getdata_m->getdatasolorum();
		// $data['sologupit'] 		= $this->getdata_m->getdatasologupit();
		// $data['soloplesan'] 	= $this->getdata_m->getdatasoloplesan();

		$data['solorum'] 		= $this->camsdata_m->get_rum();
		$data['sologupit'] 		= $this->camsdata_m->get_gupit();
		$data['soloplesan'] 	= $this->camsdata_m->get_plesan();

		$data['cemsrum'] 		= $this->getdata_cems_m->getcemsdata();

		$this->load->view('kota/solo/sukoharjo', $data);
	}
}
