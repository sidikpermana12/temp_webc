<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
	}

	public function index(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Dashboard';
		
		$this->temp_backend->load('temp_backend', 'backend/home/dashboard', $data);
	}
}
