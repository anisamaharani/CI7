<?php

class mMhs extends CI_Model
{
	public function getAll()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('t_mhs')->result_array();
	}

	public function getItemById()
	{
		// return $this->db->get_where('t_mhs', ['id ' => $this->input->get('rowID')])->result();
		return $this->db->get_where('t_mhs', ['id ' => $this->input->post('rowID')])->row_array();
	}

	public function addItem()
	{
		$data = [
			'name'		=> $this->input->post("name"),
			'nim'			=> $this->input->post("nim"),
			'jurusan'	=> $this->input->post("jurusan"),
			'prodi'		=> $this->input->post("prodi"),
			'kelas'		=> $this->input->post("kelas")
		];
		$query = $this->db->insert("t_mhs", $data);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function editItem()
	{
		$data = [
			'name'		=> $this->input->post("name"),
			'nim'			=> $this->input->post("nim"),
			'jurusan'	=> $this->input->post("jurusan"),
			'prodi'		=> $this->input->post("prodi"),
			'kelas'		=> $this->input->post("kelas")
		];

		$query = $this->db->where('id', $this->input->get('rowID'))->update('t_mhs', $data);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteItem()
	{
		$query = $this->db->delete('t_mhs', ['id' => $this->input->get('rowID')]);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function pdf()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('t_mhs');
	}

	public function excel()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('t_mhs');
	}
}
