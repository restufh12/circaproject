<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {
	public function index()	{
		$this->load->view('vlogin0');
	}
	public function login() {
  		$this->load->view('vlogin');
  	}
}