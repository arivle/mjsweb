<?php
/**
 * Created by PhpStorm.
 * User: bxmai
 * Date: 7/3/2018
 * Time: 3:41 PM
 */

class M_daftarproyek extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		$this->db->select('*');
		$this->db->from('proyek');
		$this->db->join('klien','proyek.idKlien = klien.idKlien');
		$this->db->join('kategori', 'proyek.idKategori = kategori.idKategori');
		$this->db->join('users','proyek.idPegawai = users.id');
		$this->db->where('idProyek !=',1);
		return $this->db->get();
	}

	function getPegawais()
	{
		$this->db->select('id,first_name,last_name');
		$this->db->from('users');
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

	function updateProyek($idProyek, $data)
	{
		$this->db->where(array('idProyek'=>$idProyek));
		$this->db->update('proyek', $data);
	}

	function hapusProyek($idProyek)
	{
		$this->db->where(array('idProyek'=>$idProyek));
		$this->db->delete('proyek');
	}
}
