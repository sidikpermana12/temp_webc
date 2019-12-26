<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slidehomepage extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
		check_bukan_group_staff();
	}

	public function index(){
		$data['slidehomepage'] = $this->slidehomepage_m->get_slidehomepage();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Slide Home Page';

		$this->temp_backend->load('temp_backend', 'backend/controlpanel/slidehomepage/slidehomepage_list', $data);
	}

	public function add(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Slide Home Page';

		$this->form_validation->set_rules('lsh_images', 'Slide Home Page', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/controlpanel/slidehomepage/slidehomepage_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/img/controlpanel/slidehomepage';
			$config['allowed_types'] = 'png|jpg|jpeg|gif';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('lsh_images')){
				$errors = array('error' => $this->upload->display_errors());
				$slidehomepage = 'bar.png';
			} else {
				$dataslidehomepage = $this->upload->data();
				$slidehomepage = $dataslidehomepage['file_name'];
			}

			$this->slidehomepage_m->add_slidehomepage($slidehomepage);
			redirect('slide-home-page');
		}
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['slidehomepage'] = $this->slidehomepage_m->get_slidehomepage($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Slide Home Page';

		$this->form_validation->set_rules('lsh_images', 'Slide Home Page', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/controlpanel/slidehomepage/slidehomepage_form_edit', $data);
		} else {
			$id = $this->input->post('lsh_id');
			$config['upload_path'] = './assets/backend/img/controlpanel/slidehomepage';
			$config['allowed_types'] = 'png|jpg|jpeg|gif';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('lsh_images')){
				$errors = array('error' => $this->upload->display_errors());
				$slidehomepage = $this->input->post('photos');
			} else {
				$data = $this->slidehomepage_m->ambil_id_gambar($id);
				$path = './assets/backend/img/controlpanel/slidehomepage/';
				$nama = $path.$data->lsh_images;

				if(file_exists($nama) && unlink($nama)){
					$dataslidehomepage = $this->upload->data();
					$slidehomepage = $dataslidehomepage['file_name'];
				}
					$dataslidehomepage = $this->upload->data();
					$slidehomepage = $dataslidehomepage['file_name'];
			}
			$this->slidehomepage_m->update_slidehomepage($slidehomepage);
			redirect('slide-home-page');
		}
	}

	public function validate_image() {
    $check = TRUE;
    if (isset($_FILES['lsh_images']) && $_FILES['lsh_images']['size'] != 0) {
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["lsh_images"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['lsh_images']['tmp_name']);
        $type = $_FILES['lsh_images']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['lsh_images']['tmp_name']) > 3000000) {
            $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 3MB!');
            $check = FALSE;
        }
        if(!in_array($extension, $allowedExts)) {
            $this->form_validation->set_message('validate_image', "Invalid file extension .{$extension}, Only .png format is allowed");
            $check = FALSE;
        }
    }
    return $check;
	}

	public function delete($id){
		$id = decrypt_url($id);
		$data = $this->slidehomepage_m->ambil_id_gambar($id);//ambil id gambar	  
		$path = './assets/backend/img/controlpanel/slidehomepage/';// lokasi gambar berada
		unlink($path.$data->lsh_images);// hapus data di folder dimana data tersimpan
		$this->slidehomepage_m->delete_slidehomepage($id);
		redirect('slide-home-page');
	}

}
