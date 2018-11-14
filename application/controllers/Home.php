<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['feature'] = $this->db->query('SELECT * FROM artikel WHERE id = ? LIMIT 1', 2)-> row_array();
		$data['barang'] = $this->db->get('barang')->result_array();
		$data['artikel'] = $this->db->get('artikel')->result_array();
		$data['slide'] = $this->db->get('slide')->result_array();
		$this->load->view('template/home/header');
		$this->load->view('template/home/conten', $data);
		$this->load->view('template/home/footer');
	}

	public function galery()
	{
		$data['barang'] = $this->db->get('barang')->result_array();
		$this->load->view('template/home/header');
		$this->load->view('template/home/galery',$data);
		$this->load->view('template/home/footer');
	}

	public function contact()
	{
		$this->load->view('template/home/header');
		$this->load->view('template/home/contact');
		$this->load->view('template/home/footer');
	}
}
