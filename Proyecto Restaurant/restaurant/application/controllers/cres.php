<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Cres extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('recepcionista/vres');
		$this->load->view('layout/footer');
	}	
	
}