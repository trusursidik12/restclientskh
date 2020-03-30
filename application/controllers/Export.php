<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	public function index()
	{
		$data['alldata'] 	= $this->getdata_m->getalldata();

		$this->load->view('kota/solo/export', $data);
	}
}
