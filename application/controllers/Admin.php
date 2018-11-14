<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
        $this->load->helper('url','form');
  		  // $this->load->model('Model_barang');
        //$this->load->model('Model_kategori');
        $this->load->model('Admin_model');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('ECRUD/ecrud');

        if ($this->session->userdata('nama')=="") {
              redirect('Login/index');
         }
	}

	public function index()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/conten');
		$this->load->view('template/admin/footer');
	}


	public function create()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/create');
		$this->load->view('template/admin/footer');
	}

	public function edit()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/edit');
		$this->load->view('template/admin/footer');
	}

	public function list_kategori()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/kategori/list_kategori');
		$this->load->view('template/admin/footer');
	}

	public function tambah_kategori()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/kategori/tambah_kategori');
		$this->load->view('template/admin/footer');
	}

	public function edit_kategori()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/kategori/edit_kategori');
		$this->load->view('template/admin/footer');
	}

	public function list_artikel()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/artikel/list_artikel');
		$this->load->view('template/admin/footer');
	}

	public function tambah_artikel()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/artikel/tambah_artikel');
		$this->load->view('template/admin/footer');
	}

	public function edit_artikel()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/artikel/edit_artikel');
		$this->load->view('template/admin/footer');
	}

	public function list_admin()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/admin/list_admin');
		$this->load->view('template/admin/footer');
	}

	public function tambah_admin()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/admin/tambah_admin');
		$this->load->view('template/admin/footer');
	}

	public function edit_admin()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/admin/edit_admin');
		$this->load->view('template/admin/footer');
	}

	public function list_slide()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/slide/list_slide');
		$this->load->view('template/admin/footer');
	}

	public function tambah_slide()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/slide/tambah_slide');
		$this->load->view('template/admin/footer');
	}

	public function edit_slide()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/slide/edit_slide');
		$this->load->view('template/admin/footer');
	}
}