<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subpages extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_not_login();
	}

	public function index(){
		$data['pages'] = $this->subpages_m->get_pages();
		$data['subpages'] = $this->subpages_m->get_subpages();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Sub Pages';

		$this->temp_backend->load('temp_backend', 'backend/pages/subpages/subpages_list', $data);
	}

	public function add(){
		$data['pages'] = $this->subpages_m->get_pages();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Sub Pages';

		$this->form_validation->set_rules('sub_pgs_name', 'Sub Pages Name', 'required');
		$this->form_validation->set_rules('sub_pgs_images', 'Images Sub Pages', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/pages/subpages/subpages_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/img/pages/subpages';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->helper('file');
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('sub_pgs_images')){
				$errors = array('error' => $this->upload->display_errors());
				$imagessubpages = 'noimagesheader.jpg';
			} else {
				$dataimagessubpages = $this->upload->data();
				$imagessubpages = $dataimagessubpages['file_name'];
			}

			$this->subpages_m->add_subpages($imagessubpages);
			redirect('list-subpages');
		}		
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['pages'] = $this->subpages_m->get_pages();
		$data['subpages'] = $this->subpages_m->get_subpages($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Sub Pages';

		$this->form_validation->set_rules('sub_pgs_name', 'Sub Pages Name', 'required');
		$this->form_validation->set_rules('sub_pgs_images', 'Images Sub Pages', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/pages/subpages/subpages_form_edit', $data);
		} else {
			$id = $this->input->post('sub_pgs_id');
			$config['upload_path'] = './assets/backend/img/pages/subpages';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('sub_pgs_images')){
				$errors = array('error' => $this->upload->display_errors());
				$imagessubpages = $this->input->post('imagessubpages');
			} else {
				$data = $this->subpages_m->ambil_id_gambar($id);
				$path = './assets/backend/img/pages/subpages/';
				$nama = $path.$data->sub_pgs_images;

				if(file_exists($nama) && unlink($nama)){
					$dataimagessubpages = $this->upload->data();
					$imagessubpages = $dataimagessubpages['file_name'];
				}
					$dataimagessubpages = $this->upload->data();
					$imagessubpages = $dataimagessubpages['file_name'];
			}
			$this->subpages_m->update_subpages($imagessubpages);
			redirect('list-subpages');
		}
	}

	public function validate_image() {
    $check = TRUE;
    if (isset($_FILES['sub_pgs_images']) && $_FILES['sub_pgs_images']['size'] != 0) {
        $allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["sub_pgs_images"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['sub_pgs_images']['tmp_name']);
        $type = $_FILES['sub_pgs_images']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['sub_pgs_images']['tmp_name']) > 3000000) {
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
		$data['pages'] = $this->subpages_m->get_pages();
		$data['subpages'] = $this->subpages_m->get_subpagesview($slug);
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Sub Pages';

		$this->temp_backend->load('temp_backend', 'backend/pages/subpages/subpages_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$data = $this->subpages_m->ambil_id_gambar($id);//ambil id gambar	  
		$path = './assets/backend/img/pages/subpages/';// lokasi gambar berada
		unlink($path.$data->sub_pgs_images);// hapus data di folder dimana data tersimpan
		$this->subpages_m->delete_subpages($id);
		redirect('list-subpages');
	}
}
