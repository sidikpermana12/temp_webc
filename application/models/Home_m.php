<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function get_pages($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pgs_id', 'ASC');
			$query = $this->db->get('pages');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages', array('pgs_id' => $id));
		return $query->row_array();
	}

	public function get_pagesview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('pgs_id', 'ASC');
			$query = $this->db->get('pages');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages', array('pgs_slug' => $slug));
		return $query->row_array();
	}

	public function get_subpages($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('sub_pgs_slug', 'ASC');
			$query = $this->db->get('pages_sub');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages_sub', array('sub_pgs_slug' => $slug));
		return $query->row_array();
	}

	public function get_pages_about($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pgs_id', 'ASC');
			$this->db->where('pgs_id', '1');
			$query = $this->db->get('pages');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages', array('pgs_id' => $id));
		return $query->row_array();
	}

	public function get_subpages_services($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('sub_pgs_id', 'ASC');
			$this->db->where('sub_pgs_pages_id', '1');
			$query = $this->db->get('pages_sub');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages_sub', array('sub_pgs_id' => $id));
		return $query->row_array();
	}

	public function get_subpages_aboutus($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('sub_pgs_id', 'ASC');
			$this->db->where('sub_pgs_pages_id', '2');
			$query = $this->db->get('pages_sub');
			return $query->result_array();
		}
		$query = $this->db->get_where('pages_sub', array('sub_pgs_id' => $id));
		return $query->row_array();
	}

	public function get_posts($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'DESC');
			$this->db->where('pst_categoriespost_id != 5');
			// $this->db->join('posts_categories', 'posts_categories.cat_pst_id = posts.pst_id');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_all_posts($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'DESC');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_postsview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('pst_id', 'ASC');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_slug' => $slug));
		return $query->row_array();
	}

	public function get_posts_health($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'ASC');
			$this->db->where('pst_categoriespost_id', '1');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_posts_sports($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'ASC');
			$this->db->where('pst_categoriespost_id', '2');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_posts_ekonomi($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'ASC');
			$this->db->where('pst_categoriespost_id', '3');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_posts_culture($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'ASC');
			$this->db->where('pst_categoriespost_id', '4');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_posts_video($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('pst_id', 'ASC');
			$this->db->where('pst_categoriespost_id', '5');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('pst_id' => $id));
		return $query->row_array();
	}

	public function get_categoriesposts($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('cat_pst_id', 'ASC');
			$query = $this->db->get('posts_categories');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts_categories', array('cat_pst_id' => $id));
		return $query->row_array();
	}

	public function get_categories($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('cat_pst_slug', 'ASC');
			$query = $this->db->get('posts_categories');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts_categories', array('cat_pst_slug' => $slug));
		return $query->row_array();
	}

	public function get_gallery($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('glr_id', 'ASC');
			$query = $this->db->get('gallery');
			return $query->result_array();
		}
		$query = $this->db->get_where('gallery', array('glr_id' => $id));
		return $query->row_array();
	}

}