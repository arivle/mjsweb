<?php
/**
 * Created by PhpStorm.
 * User: bxmai
 * Date: 7/3/2018
 * Time: 3:41 PM
 */

class M_daftarproyek
{
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		$this->db->select('*');
		$this->db->from('proyek');
		$this->db->join('kategori', 'proyek.idKategori = kategori.idKategori', 'left');
		return $this->db->get();
	}

	function getKategori()
	{
		return $this->db->get('kategori');
	}

	function getProyek($idProyek)
	{
		return $this->db->get_where('proyek', array('idProyek' => $idProyek));
	}

	function addProyek($data)
	{
		$this->db->insert('proyek', $data);
	}

	function updateProyek($where, $data)
	{
		$this->db->where($where);
		$this->db->update('proyek', $data);
	}

	function hapusProyek($where)
	{
		$this->db->where($where);
		$this->db->delete('proyek');
	}
}
