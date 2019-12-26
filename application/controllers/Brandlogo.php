<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brandlogo extends CI_Controller {

	function __construct(){
		parent::__construct();		
		check_not_login();
		check_bukan_group_staff();
	}

	public function index(){
		$data['brandlogo'] = $this->brandlogo_m->get_brandlogo();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'List Brand Logo';

		$this->temp_backend->load('temp_backend', 'backend/controlpanel/brandlogo/brandlogo_list', $data);
	}

	public function add(){
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Add Brand Logo';

		$this->form_validation->set_rules('lbl_name', 'Brand Name', 'required');
		$this->form_validation->set_rules('lbl_images', 'Brand Logo', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/controlpanel/brandlogo/brandlogo_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/img/controlpanel/brandlogo';
			$config['allowed_types'] = 'png';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('lbl_images')){
				$errors = array('error' => $this->upload->display_errors());
				$brandlogo = 'bar.png';
			} else {
				$databrandlogo = $this->upload->data();
				$brandlogo = $databrandlogo['file_name'];
			}

			$this->brandlogo_m->add_brandlogo($brandlogo);
			redirect('brand-logo');
		}
	}

	public function edit($id){
		$id = decrypt_url($id);
		$data['brandlogo'] = $this->brandlogo_m->get_brandlogo($id);
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Edit Brand Logo';

		$this->form_validation->set_rules('lbl_name', 'Brand Name', 'required');
		$this->form_validation->set_rules('lbl_images', 'Brand Logo', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('temp_backend', 'backend/controlpanel/brandlogo/brandlogo_form_edit', $data);
		} else {
			$id = $this->input->post('lbl_id');
			$config['upload_path'] = './assets/backend/img/controlpanel/brandlogo';
			$config['allowed_types'] = 'png';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('lbl_images')){
				$errors = array('error' => $this->upload->display_errors());
				$brandlogo = $this->input->post('photos');
			} else {
				$data = $this->brandlogo_m->ambil_id_gambar($id);
				$path = './assets/backend/img/controlpanel/brandlogo/';
				$nama = $path.$data->lbl_images;

				if(file_exists($nama) && unlink($nama)){
					$databrandlogo = $this->upload->data();
					$brandlogo = $databrandlogo['file_name'];
				}
					$databrandlogo = $this->upload->data();
					$brandlogo = $databrandlogo['file_name'];
			}
			$this->brandlogo_m->update_brandlogo($brandlogo);
			redirect('brand-logo');
		}
	}

	public function validate_image() {
    $check = TRUE;
    if (isset($_FILES['lbl_images']) && $_FILES['lbl_images']['size'] != 0) {
        $allowedExts = array("png", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["lbl_images"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['lbl_images']['tmp_name']);
        $type = $_FILES['lbl_images']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['lbl_images']['tmp_name']) > 3000000) {
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
		$data = $this->brandlogo_m->ambil_id_gambar($id);//ambil id gambar	  
		$path = './assets/backend/img/controlpanel/brandlogo/';// lokasi gambar berada
		unlink($path.$data->lbl_images);// hapus data di folder dimana data tersimpan
		$this->brandlogo_m->delete_brandlogo($id);
		redirect('brand-logo');
	}

}
