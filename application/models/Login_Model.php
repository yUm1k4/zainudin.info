<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	}

	public function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where, 1);
	}

	public function update($email, $table, $data)
	{
		$this->db->where('email', $email);
		$query = $this->db->update($table, $data);
		return $query;
	}
}
