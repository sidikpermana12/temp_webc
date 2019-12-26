<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
		check_bukan_group_staff();
		check_bukan_level_staff();
	}

	public function index(){
		$data['groups'] = $this->groups_m->get_groups();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Groups';

		$this->temp_backend->load('temp_backend', 'backend/groups/groups_list', $data);
	}

	public function add(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Groups';

		$this->form_validation->set_rules('grp_name', 'Group Name', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/groups/groups_form_add', $data);
		} else {
			$this->groups_m->add_groups();
			redirect('list-groups');
		}		
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['groups'] = $this->groups_m->get_groups($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Groups';

		$this->form_validation->set_rules('grp_name', 'Group Name', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');
		
		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/groups/groups_form_edit', $data);
		} else {
			$this->groups_m->update_groups();
			redirect('list-groups');
		}
	}

	public function view($slug = NULL){
		$data['groups'] = $this->groups_m->get_groupsview($slug);
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Groups';

		$this->temp_backend->load('temp_backend', 'backend/groups/groups_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$this->groups_m->delete_groups($id);
		redirect('list-groups');
	}

}
