<?php
defined('BASEPATH') or exit('No direct script access allowed');


class mPegawai extends CI_Model
{
	public function getAll()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('t_pegawai')->result_array();
	}

	public function getItemPegawaiById()
	{
		// return $this->db->get_where('t_pegawai', ['id ' => $this->input->get('rowID')])->result();
		return $this->db->get_where('t_pegawai', ['id ' => $this->input->post('rowID')])->row_array();
	}

	public function addItem_Pegawai()
	{
		$data = [
			'name'	     	=> $this->input->post("name"),
			'nip'		    	=> $this->input->post("nip"),
			'jabatan'   	=> $this->input->post("jabatan"),
			'tgl_masuk'		=> $this->input->post("tgl_masuk"),
			'foto'	    	=> $this->input->post("foto")
		];
		$query = $this->db->insert("t_pegawai", $data);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function editItem_Pegawai()
	{
		$data = [
			'name'	    	=> $this->input->post("name"),
			'nip'		    	=> $this->input->post("nip"),
			'jabatan'   	=> $this->input->post("jabatan"),
			'tgl_masuk'		=> $this->input->post("tgl_masuk"),
			'foto'	    	=> $this->input->post("foto")
		];

		$query = $this->db->where('id', $this->input->get('rowID'))->update('t_pegawai', $data);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteItem_Pegawai()
	{
		$query = $this->db->delete('t_pegawai', ['id' => $this->input->get('rowID')]);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function pdf_Pegawai()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('t_pegawai');
	}
}
