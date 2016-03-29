<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$page = 'main';
		$this->load->view('templates/header');
		$this->load->view('pages/' . $page);
		$this->load->view('templates/footer');
	}

	public function result()
	{
		$page = 'result';
		$this->load->view('templates/header');
		$this->load->view('pages/' . $page);
		$this->load->view('templates/footer');
	}

	public function checkout()
	{
		$page = 'checkout';
		$this->load->view('templates/header_payment');
		$this->load->view('pages/' . $page);
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$page = 'login';
		$this->load->view('pages/' . $page);
	}
}
