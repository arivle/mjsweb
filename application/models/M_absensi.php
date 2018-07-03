<?php
/**
 * Created by PhpStorm.
 * User: bxmai
 * Date: 7/3/2018
 * Time: 4:37 PM
 */

class M_absensi
{
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->join('pegawai', 'absensi.idPegawai = pegawai.idPegawai', 'left');
		return $this->db->get();
	}

	function getPegawais()
	{
		return $this->db->get('pegawai');
	}

	function getAbsensi($idAbsensi)
	{
		return $this->db->get_where('absensi', array('idAbsensi' => $idAbsensi));
	}

	function addAbsensi($data)
	{
		$this->db->insert('absensi', $data);
	}

	function updateAbsensi($where, $data)
	{
		$this->db->where($where);
		$this->db->update('absensi', $data);
	}

	function hapusAbsensi($where)
	{
		$this->db->where($where);
		$this->db->delete('absensi');
	}
}
