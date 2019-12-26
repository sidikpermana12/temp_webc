<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_not_login();
	}

	public function index(){
		$data['video'] = $this->video_m->get_video();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List video';

		$this->temp_backend->load('temp_backend', 'backend/video/video/video_list', $data);
	}

	public function add(){
		$data['videocategories'] = $this->video_m->get_videocategories();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Video';

		$this->form_validation->set_rules('vid_link', 'Video Link', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/video/video/video_form_add', $data);
		} else {
			$this->video_m->add_video();
			redirect('list-video');
		}		
	}

	public function edit($id){
		$id = decrypt_url($id);
		
		$data['video'] = $this->video_m->get_video($id);
		$data['videocategories'] = $this->video_m->get_videocategories();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit video';

		$this->form_validation->set_rules('vid_link', 'Video Link', 'required');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/video/video/video_form_edit', $data);
		} else {			
			$this->video_m->update_video();
			redirect('list-video');
		}
	}

	public function view($slug = NULL){
		$data['video'] = $this->video_m->get_videoview($slug);
		$data['videocategories'] = $this->video_m->get_videocategories();
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Video';

		$this->temp_backend->load('temp_backend', 'backend/video/video/video_view', $data);
	}
	
}
