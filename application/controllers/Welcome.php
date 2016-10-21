<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_profil');
	}

	public function index(){
		$data['profil'] = $this->Model_profil->get(); 
		$this->load->view('head');
		$this->load->view('halaman_profil',$data);		
	}
}
