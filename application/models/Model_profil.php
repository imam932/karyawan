<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_Model {

	public function get(){
		$data = $this->db->get('profil');
		return $data->result();
	}

	public function insert(){
		$object = array(
			'nim'		=> $this->input->post('nim'),
			'nama'		=> $this->input->post('nama'),
			'panggilan'	=> $this->input->post('panggilan'),
			'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			'alamat'	=> $this->input->post('alamat'),
			'hobi'		=> $this->input->post('hobi')
			);
		$this->db->insert('profil', $object);
	}

	public function update($nim){
		$this->db->where('nim', $nim);
		$object = array(
			'nama'		=> $this->input->post('nama'),
			'panggilan'	=> $this->input->post('panggilan'),
			'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			'alamat'	=> $this->input->post('alamat'),
			'hobi'		=> $this->input->post('hobi')
			);
		$this->db->update('profil', $object);
	}

	public function delete($id){
		$this->db->where('nim', $id);
		$this->db->delete('profil');
	}

	public function get_byId($nim){
		$data = $this->db->get_where('profil', array('nim' => $nim ));
		return $data->first_row();
	}

	public function cari($cari){
		$this->db->where('panggilan', $cari);
		$cari = $this->db->get('profil');
		return $cari->result();
	}
}

/* End of file Model_profil.php */
/* Location: ./application/models/Model_profil.php */