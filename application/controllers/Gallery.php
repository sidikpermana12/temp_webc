<?php

class Gallery extends CI_Controller {

   public function __construct() { 
      parent::__construct(); 
      check_not_login();
   }

   public function index() {
    $data['galleries'] = $this->gallery_m->get_gallery();
    $data['iconbar'] = $this->global_m->get_iconbar();
    $data['titlebar'] = 'Upload Images';
    $data['selected'] = 'class="navigation__active"';

      $this->temp_backend->load('temp_backend', 'backend/gallery/gallery_list', $data);
   }

   public function deletegallery(){
    $data['galleries'] = $this->gallery_m->get_gallery();
    $data['iconbar'] = $this->global_m->get_iconbar();
    $data['titlebar'] = 'Upload Images';

      $this->temp_backend->load('temp_backend', 'backend/gallery/gallery_list_delete', $data);
   }

  //  public function add() {
  //   $data['iconbar'] = $this->global_m->get_iconbar();
  //   $data['titlebar'] = 'Add Images';

  //     $this->temp_backend->load('temp_backend', 'backend/gallery/gallery_form_add', $data);
  //  }

  //  public function addimages() {
  //   $data['iconbar'] = $this->global_m->get_iconbar();

  //     $data = [];

  //     $count = count($_FILES['files']['name']);

  //     for($i=0;$i<$count;$i++){

  //       if(!empty($_FILES['files']['name'][$i])){

  //         $_FILES['file']['name'] = $_FILES['files']['name'][$i];
  //         $_FILES['file']['type'] = $_FILES['files']['type'][$i];
  //         $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
  //         $_FILES['file']['error'] = $_FILES['files']['error'][$i];
  //         $_FILES['file']['size'] = $_FILES['files']['size'][$i];

  //         $config['upload_path'] = './assets/backend/img/gallery'; 
  //         $config['allowed_types'] = 'jpg|jpeg|png|gif';
  //         $config['max_size'] = '5000'; // max_size in kb
  //         $config['file_name'] = $_FILES['files']['name'][$i];

  //         $this->load->library('upload',$config); 

  //         if($this->upload->do_upload('file')){
  //           $uploadData = $this->upload->data();
  //           $images = $uploadData['file_name'];

  //           $data['totalFiles'][] = $images;
  //         }
  //       $this->gallery_m->add_gallery($images);
  //       }
  //     }
  //     redirect('list-gallery');
  // }



  public function addimages() {
    $data['iconbar'] = $this->global_m->get_iconbar();
    $data['titlebar'] = 'Upload Images';

    $this->form_validation->set_rules('files[]', 'Images', 'callback_validate_image');
    // $this->form_validation->set_message('required', '%s Empty, Please Input..');

    if($this->form_validation->run() === FALSE){
      $this->temp_backend->load('temp_backend', 'backend/gallery/gallery_form_add', $data);
    } else {

      $data = [];

      $count = count($_FILES['files']['name']);

      for($i=0;$i<$count;$i++){

        if(!empty($_FILES['files']['name'][$i])){

          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          $config['upload_path'] = './assets/backend/img/gallery'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $_FILES['files']['name'][$i];

          $this->load->library('upload',$config); 

          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $images = $uploadData['file_name'];

            $data['totalFiles'][] = $images;
          }
        $this->gallery_m->add_gallery($images);
        }
      }
      redirect('list-gallery');
    }
  }

  public function validate_image() {
    $check = TRUE;
    if (isset($_FILES['usr_images']) && $_FILES['usr_images']['size'] != 0) {
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["usr_images"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['usr_images']['tmp_name']);
        $type = $_FILES['usr_images']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['usr_images']['tmp_name']) > 3000000) {
            $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 3MB!');
            $check = FALSE;
        }
        if(!in_array($extension, $allowedExts)) {
            $this->form_validation->set_message('validate_image', "Invalid file extension {$extension}, Only .gif | .jpeg | .jpg | .png format is allowed");
            $check = FALSE;
        }
    }
    return $check;
  }

  public function delete($id){    
    check_bukan_group_staff();
    $id = decrypt_url($id);
    $data = $this->gallery_m->get_images_id($id);//ambil id gambar    
    $path = './assets/backend/img/gallery/';// lokasi gambar berada
    unlink($path.$data->glr_imagesname);// hapus data di folder dimana data tersimpan
    $this->gallery_m->delete_gallery($id);
    redirect('list-gallery/delete-gallery');
  }

}