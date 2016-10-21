<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_profil');
	}

	public function index(){
		$data['profil'] = $this->Model_profil->get(); 
		$this->load->view('head');
		$this->load->view('form_insert',$data);
		// print_r($data);

		if (isset($_POST['ok'])) {
			$this->Model_profil->insert();
			redirect(base_url().'welcome','refresh');
		}

	}

	public function update($nim){
		$this->load->view('head');
		
		$data['nim'] = $nim;
		$data['profil'] = $this->Model_profil->get_byId($nim);


		if (isset($_POST['ok'])) {
			$this->Model_profil->update($nim);
			redirect(base_url().'welcome','refresh');
		}

		// print_r($data['profil']);
		$this->load->view('form_update', $data);
	}

	public function delete($id){
		$this->Model_profil->delete($id);
		redirect(base_url().'welcome','refresh');
	}

	public function cari(){
		$cari = $this->input->post('cari');
		$data['cari'] = $this->Model_profil->cari($cari);

		// print_r($data['cari']);
		$this->load->view('head');
		$this->load->view('cari', $data);
	}
}
