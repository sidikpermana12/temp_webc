<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Levels extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
		check_bukan_group_staff();
		check_bukan_level_staff();
	}

	public function index(){
		$data['levels'] = $this->levels_m->get_levels();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Levels';

		$this->temp_backend->load('temp_backend', 'backend/levels/levels_list', $data);
	}

	public function add(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Levels';

		$this->form_validation->set_rules('lvl_name', 'Level Name', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/levels/levels_form_add', $data);
		} else {
			$this->levels_m->add_levels();
			redirect('list-levels');
		}		
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['levels'] = $this->levels_m->get_levels($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Levels';

		$this->form_validation->set_rules('lvl_name', 'Level Name', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/levels/levels_form_edit', $data);
		} else {
			$this->levels_m->update_levels();
			redirect('list-levels');
		}
	}

	public function view($slug = NULL){
		$data['levels'] = $this->levels_m->get_levelsview($slug);
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Levels';

		$this->temp_backend->load('temp_backend', 'backend/levels/levels_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$this->levels_m->delete_levels($id);
		redirect('list-levels');
	}

}
