<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berobat');
	}

	// List all your items
	public function index($offset = 0)
	{
		$data = array(
			'title' => 'Dashboard',
			'grafik' => $this->m_berobat->grafik(),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
	}

	//Update one item
	public function update($id = NULL)
	{
	}

	//Delete one item
	public function delete($id = NULL)
	{
	}
}

/* End of file Home.php */
