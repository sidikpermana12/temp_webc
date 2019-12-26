<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_not_login();
	}

	public function index(){
		$data['posts'] = $this->posts_m->get_posts();
		$data['postscategories'] = $this->posts_m->get_postscategories();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Posts';

		$this->temp_backend->load('temp_backend', 'backend/posts/posts/posts_list', $data);
	}

	public function add(){
		$data['postscategories'] = $this->posts_m->get_postscategories();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Posts';

		$this->form_validation->set_rules('pst_name', 'Posts Name', 'required');
		$this->form_validation->set_rules('pst_tags', 'Posts Tags', 'required');
		$this->form_validation->set_rules('pst_images', 'Images posts', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/posts/posts/posts_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/img/posts';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->helper('file');
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('pst_images')){
				$errors = array('error' => $this->upload->display_errors());
				$imagesposts = 'noimagesheader.jpg';
			} else {
				$dataimagesposts = $this->upload->data();
				$imagesposts = $dataimagesposts['file_name'];
			}

			$this->posts_m->add_posts($imagesposts);
			redirect('list-posts');
		}		
	}

	public function edit($id){
		$id = decrypt_url($id);
		
		$data['posts'] = $this->posts_m->get_posts($id);
		$data['postscategories'] = $this->posts_m->get_postscategories();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Posts';

		$this->form_validation->set_rules('pst_name', 'posts Name', 'required');
		$this->form_validation->set_rules('pst_tags', 'Posts Tags', 'required');
		$this->form_validation->set_rules('pst_images', 'Images posts', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/posts/posts/posts_form_edit', $data);
		} else {
			$id = $this->input->post('pst_id');
			$config['upload_path'] = './assets/backend/img/posts';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('pst_images')){
				$errors = array('error' => $this->upload->display_errors());
				$imagesposts = $this->input->post('imagesposts');
			} else {
				$data = $this->posts_m->ambil_id_gambar($id);
				$path = './assets/backend/img/posts/';
				$nama = $path.$data->pst_images;

				if(file_exists($nama) && unlink($nama)){
					$dataimagesposts = $this->upload->data();
					$imagesposts = $dataimagesposts['file_name'];
				}
					$dataimagesposts = $this->upload->data();
					$imagesposts = $dataimagesposts['file_name'];
			}
			$this->posts_m->update_posts($imagesposts);
			redirect('list-posts');
		}
	}

	public function validate_image() {
    $check = TRUE;
    if (isset($_FILES['pst_images']) && $_FILES['pst_images']['size'] != 0) {
        $allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["pst_images"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['pst_images']['tmp_name']);
        $type = $_FILES['pst_images']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['pst_images']['tmp_name']) > 3000000) {
            $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 3MB!');
            $check = FALSE;
        }
        if(!in_array($extension, $allowedExts)) {
            $this->form_validation->set_message('validate_image', "Invalid file extension {$extension}, Only .jpeg | .jpg | .png format is allowed");
            $check = FALSE;
        }
    }
    return $check;
	}

	public function view($slug = NULL){
		$data['posts'] = $this->posts_m->get_postsview($slug);
		$data['postscategories'] = $this->posts_m->get_postscategories();
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Posts';

		$this->temp_backend->load('temp_backend', 'backend/posts/posts/posts_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$data = $this->posts_m->ambil_id_gambar($id);//ambil id gambar	  
		$path = './assets/backend/img/posts/';// lokasi gambar berada
		unlink($path.$data->pst_images);// hapus data di folder dimana data tersimpan
		$this->posts_m->delete_posts($id);
		redirect('list-posts');
	}
}
