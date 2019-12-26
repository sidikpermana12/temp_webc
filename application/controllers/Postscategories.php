<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postscategories extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
		check_bukan_group_staff();
	}

	public function index(){
		$data['postscategories'] = $this->postscategories_m->get_postscategories();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List postscategories';

		$this->temp_backend->load('temp_backend', 'backend/posts/postscategories/postscategories_list', $data);
	}

	public function add(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add postscategories';

		$this->form_validation->set_rules('cat_pst_name', 'Posts Categories Name', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/posts/postscategories/postscategories_form_add', $data);
		} else {
			$this->postscategories_m->add_postscategories();
			redirect('list-postscategories');
		}		
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['postscategories'] = $this->postscategories_m->get_postscategories($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit postscategories';

		$this->form_validation->set_rules('cat_pst_name', 'Posts Categories Name', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');
		
		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/posts/postscategories/postscategories_form_edit', $data);
		} else {
			$this->postscategories_m->update_postscategories();
			redirect('list-postscategories');
		}
	}

	public function view($slug = NULL){
		$data['postscategories'] = $this->postscategories_m->get_postscategoriesview($slug);
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View postscategories';

		$this->temp_backend->load('temp_backend', 'backend/posts/postscategories/postscategories_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$this->postscategories_m->delete_postscategories($id);
		redirect('list-postscategories');
	}

}
