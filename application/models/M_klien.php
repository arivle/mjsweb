<?php
/**
 * Created by PhpStorm.
 * User: bxmai
 * Date: 7/3/2018
 * Time: 4:16 PM
 */

class M_klien extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		return $this->db->get('klien');
	}

	function getKlien($idKlien)
	{
		return $this->db->get_where('klien', array('idKlien' => $idKlien));
	}

	function addKlien($data)
	{
		$this->db->insert('klien', $data);
	}

	function updateKlien($where, $data)
	{
		$this->db->where($where);
		$this->db->update('klien', $data);
	}

	function hapusKlien($where)
	{
		$this->db->where($where);
		$this->db->delete('klien');
	}
}
