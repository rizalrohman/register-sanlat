<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/tem-header');
		$this->load->view('templates/tem-sidebar');
		$this->load->view('templates/tem-navbar');
		$this->load->view('v-index');
		$this->load->view('templates/tem-footer');
	}
}
