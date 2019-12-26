<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//pagespostsview
$route['posts/health/(:any)'] = 'home/pages_posts_view/$1';
$route['posts/sports/(:any)'] = 'home/pages_posts_view/$1';
$route['posts/ekonomi/(:any)'] = 'home/pages_posts_view/$1';
$route['posts/culture/(:any)'] = 'home/pages_posts_view/$1';
$route['posts/video/(:any)'] = 'home/pages_posts_view/$1';

// $route['gallery'] = 'gallery/add';
$route['gallery'] = 'gallery/index';
$route['list-gallery'] = 'gallery/index';
$route['list-gallery/delete-gallery'] = 'gallery/deletegallery';

// $route['multiple'] = 'multiple';
$route['multiple/uploadimage']['post'] = "multiple/uploadimage";

//posts
$route['posts'] = 'posts/index';
$route['list-posts'] = 'posts/index';
$route['posts/add'] = 'posts/add';
$route['posts/(:any)'] = 'posts/view/$1';

//categories posts
$route['postscategories'] = 'postscategories/index';
$route['list-postscategories'] = 'postscategories/index';
$route['postscategories/add'] = 'postscategories/add';
$route['postscategories/(:any)'] = 'postscategories/view/$1';

//subpages
$route['subpages'] = 'subpages/index';
$route['list-subpages'] = 'subpages/index';
$route['subpages/add'] = 'subpages/add';
$route['subpages/(:any)'] = 'subpages/view/$1';

//pages
$route['pages'] = 'pages/index';
$route['list-pages'] = 'pages/index';
$route['pages/add'] = 'pages/add';
$route['pages/(:any)'] = 'pages/view/$1';

//icontab
$route['iconbar'] = 'iconbar/index';
$route['icon-bar'] = 'iconbar/index';

//icontab
$route['brandlogo'] = 'brandlogo/index';
$route['brand-logo'] = 'brandlogo/index';

//icontab
$route['slidehomepage'] = 'slidehomepage/index';
$route['slide-home-page'] = 'slidehomepage/index';

//levels
$route['users'] = 'users/index';
$route['list-users'] = 'users/index';
$route['users/add'] = 'users/add';
$route['users/(:any)'] = 'users/view/$1';

//levels
$route['levels'] = 'levels/index';
$route['list-levels'] = 'levels/index';
$route['levels/add'] = 'levels/add';
$route['levels/(:any)'] = 'levels/view/$1';

//groups
$route['groups'] = 'groups/index';
$route['list-groups'] = 'groups/index';
$route['groups/add'] = 'groups/add';
$route['groups/(:any)'] = 'groups/view/$1';
//homedashboard
$route['dashboard'] = 'backend/index';

//pagescategoriesview
$route['category/(:any)'] = 'home/pages_categories_view/$1';

//pagesmenusview
$route['about-us/(:any)'] = 'home/pages_menu_sub_view/$1';
$route['services/(:any)'] = 'home/pages_menu_sub_view/$1';
$route['(:any)'] = 'home/pages_menu_view/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
