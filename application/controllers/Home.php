<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['pages'] = $this->home_m->get_pages();
		$data['pagesabout'] = $this->home_m->get_pages_about();
		$data['subpagesservices'] = $this->home_m->get_subpages_services();
		$data['subpagesaboutus'] = $this->home_m->get_subpages_aboutus();
		$data['categoriesposts'] = $this->home_m->get_categoriesposts();
		$data['users'] = $this->global_m->get_users();
		$data['posts'] = $this->home_m->get_posts();
		$data['postshealth'] = $this->home_m->get_posts_health();
		$data['postssports'] = $this->home_m->get_posts_sports();
		$data['postsekonomi'] = $this->home_m->get_posts_ekonomi();
		$data['postsculture'] = $this->home_m->get_posts_culture();
		$data['postsvideo'] = $this->home_m->get_posts_video();
		$data['galleries'] = $this->home_m->get_gallery();
		$data['slidehomepage'] = $this->global_m->get_slidehomepage();
		$data['brandlogo'] = $this->global_m->get_brandlogo();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'Home';
		
		$this->temp_frontend->load('temp_frontend', 'frontend/home/home', $data);
	}

	public function pages_posts_view($slug = NULL){
		$data['posts'] = $this->home_m->get_postsview($slug);
		$data['postsview'] = $this->home_m->get_posts();
		$data['pages'] = $this->home_m->get_pages();
		$data['subpagesservices'] = $this->home_m->get_subpages_services();
		$data['subpagesaboutus'] = $this->home_m->get_subpages_aboutus();
		$data['categoriesposts'] = $this->home_m->get_categoriesposts();
		$data['postsvideo'] = $this->home_m->get_posts_video();
		$data['users'] = $this->global_m->get_users();
		$data['brandlogo'] = $this->brandlogo_m->get_brandlogo();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Posts';

		$this->temp_frontend->load('temp_frontend', 'frontend/pages/pagesposts/pages_posts_view', $data);
	}


	public function pages_menu_view($slug = NULL){
		$data['pagesview'] = $this->home_m->get_pagesview($slug);
		// $data['posts'] = $this->home_m->get_postsview($slug);
		$data['postsview'] = $this->home_m->get_posts();
		$data['pages'] = $this->home_m->get_pages();
		$data['subpages'] = $this->home_m->get_subpages();
		$data['subpagesservices'] = $this->home_m->get_subpages_services();
		$data['subpagesaboutus'] = $this->home_m->get_subpages_aboutus();
		$data['categoriesposts'] = $this->home_m->get_categoriesposts();
		$data['postsvideo'] = $this->home_m->get_posts_video();
		$data['users'] = $this->global_m->get_users();
		$data['brandlogo'] = $this->brandlogo_m->get_brandlogo();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Pages';

		$this->temp_frontend->load('temp_frontend', 'frontend/pages/pagesmenu/pages_menu_view', $data);
	}

	public function pages_menu_sub_view($slug = NULL){
		$data['pagessubview'] = $this->home_m->get_subpages($slug);
		$data['pages'] = $this->home_m->get_pages();
		$data['postsview'] = $this->home_m->get_posts();
		$data['subpagesservices'] = $this->home_m->get_subpages_services();
		$data['subpagesaboutus'] = $this->home_m->get_subpages_aboutus();
		$data['categoriesposts'] = $this->home_m->get_categoriesposts();
		$data['postsvideo'] = $this->home_m->get_posts_video();
		$data['users'] = $this->global_m->get_users();
		$data['brandlogo'] = $this->brandlogo_m->get_brandlogo();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Pages';

		$this->temp_frontend->load('temp_frontend', 'frontend/pages/pagessubmenu/pages_menu_sub_view', $data);
	}

	public function pages_categories_view($slug = NULL){
		$data['categoriespostsview'] = $this->home_m->get_categories($slug);
		$data['categoriesposts'] = $this->home_m->get_categoriesposts();
		// $data['pagessubview'] = $this->home_m->get_subpages();
		$data['pages'] = $this->home_m->get_pages();
		$data['allpostsview'] = $this->home_m->get_all_posts();
		$data['postsview'] = $this->home_m->get_posts();
		$data['subpagesservices'] = $this->home_m->get_subpages_services();
		$data['subpagesaboutus'] = $this->home_m->get_subpages_aboutus();
		$data['postsvideo'] = $this->home_m->get_posts_video();
		$data['users'] = $this->global_m->get_users();
		$data['brandlogo'] = $this->brandlogo_m->get_brandlogo();
		$data['iconbar'] = $this->global_m->get_iconbar();
		$data['titlebar'] = 'View Pages';

		$this->temp_frontend->load('temp_frontend', 'frontend/pages/pagescategories/pages_categories_view', $data);
	}
}
