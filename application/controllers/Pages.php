<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_not_login();
	}

	public function index(){
		$data['pages'] = $this->pages_m->get_pages();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Pages';

		$this->temp_backend->load('temp_backend', 'backend/pages/pages/pages_list', $data);
	}

	public function add(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Pages';

		$this->form_validation->set_rules('pgs_name', 'Pages Name', 'required');
		$this->form_validation->set_rules('pgs_images', 'Images Pages', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/pages/pages/pages_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/img/pages';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->helper('file');
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('pgs_images')){
				$errors = array('error' => $this->upload->display_errors());
				$imagespages = 'noimagesheader.jpg';
			} else {
				$dataimagespagess = $this->upload->data();
				$imagespages = $dataimagespagess['file_name'];
			}

			$this->pages_m->add_pages($imagespages);
			redirect('list-pages');
		}		
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['pages'] = $this->pages_m->get_pages($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Pages';

		$this->form_validation->set_rules('pgs_name', 'Pages Name', 'required');
		$this->form_validation->set_rules('pgs_images', 'Images Pages', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/pages/pages/pages_form_edit', $data);
		} else {
			$id = $this->input->post('pgs_id');
			$config['upload_path'] = './assets/backend/img/pages';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('pgs_images')){
				$errors = array('error' => $this->upload->display_errors());
				$imagespages = $this->input->post('imagespages');
			} else {
				$data = $this->pages_m->ambil_id_gambar($id);
				$path = './assets/backend/img/pages/';
				$nama = $path.$data->pgs_images;

				if(file_exists($nama) && unlink($nama)){
					$dataimagespagess = $this->upload->data();
					$imagespages = $dataimagespagess['file_name'];
				}
					$dataimagespagess = $this->upload->data();
					$imagespages = $dataimagespagess['file_name'];
			}
			$this->pages_m->update_pages($imagespages);
			redirect('list-pages');
		}
	}

	public function validate_image() {
    $check = TRUE;
    if (isset($_FILES['pgs_images']) && $_FILES['pgs_images']['size'] != 0) {
        $allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["pgs_images"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['pgs_images']['tmp_name']);
        $type = $_FILES['pgs_images']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['pgs_images']['tmp_name']) > 3000000) {
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
		$data['pages'] = $this->pages_m->get_pagesview($slug);
		$data['users'] = $this->global_m->get_users();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Pages';

		$this->temp_backend->load('temp_backend', 'backend/pages/pages/pages_view', $data);
	}

	public function delete($id){
		$id = decrypt_url($id);
		$data = $this->pages_m->ambil_id_gambar($id);//ambil id gambar	  
		$path = './assets/backend/img/pages/';// lokasi gambar berada
		unlink($path.$data->pgs_images);// hapus data di folder dimana data tersimpan
		$this->pages_m->delete_pages($id);
		redirect('list-pages');
	}
}
