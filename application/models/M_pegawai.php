<?php
/**
 * Created by PhpStorm.
 * User: bxmai
 * Date: 7/2/2018
 * Time: 10:26 PM
 */

class M_pegawai extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
	function getAll(){
		return $this->db->get('pegawai');
	}
}
