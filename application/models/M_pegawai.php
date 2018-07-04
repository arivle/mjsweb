<?php
/**
 * Created by PhpStorm.
 * User: bxmai
 * Date: 7/2/2018
 * Time: 10:26 PM
 */

class M_pegawai extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->join('role', 'pegawai.idRole = role.idRole', 'left');
		return $this->db->get();
	}

	function getRoles()
	{
		return $this->db->get('role');
	}

	function getPegawai($idPegawai)
	{
		return $this->db->get_where('pegawai', array('idPegawai' => $idPegawai));
	}

	function addPegawai($data)
	{
		$this->db->insert('pegawai', $data);
	}

	function updatePegawai($idPegawai, $data)
	{
		$this->db->where(array('idPegawai'=>$idPegawai));
		$this->db->update('pegawai', $data);
	}

	function hapusPegawai($idPegawai)
	{
		$this->db->where(array('idPegawai'=>$idPegawai));
		$this->db->delete('pegawai');
	}
}
