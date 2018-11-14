<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	public function cek_user($data) 
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }

// 	public function getlogin($usr, $pwd)
// 	{
// 		$u = $usr;
// 		$p = md5($pwd);
// 		$cek_login = $this->db->get_where('user', array('username' => $u, 'password' => $p));
// 		if ($cek_login->num_rows() > 0) {
// 			$qad = $cek_login->row();
// 			if ($u == $qad->username && $p == $qad->password) {
// 				$sess = array(
// 					'id_user'  => $qad->id_user,
// 					'nama'     => $qad->nama,
// 					'username' => $qad->username,
// 				);
// 				header('location:'.base_url('Admin/admin'));
// 			}
// 		}else {
// 			header('location:'.base_url('Admin'));
// 		}
// 	}

 }