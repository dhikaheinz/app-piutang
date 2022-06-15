<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_Hutang');
    }

	public function index()
	{
		$data['data_cust'] = $this->M_Hutang->view_data();
		$this->load->view('hutang/index', $data);
	}
}