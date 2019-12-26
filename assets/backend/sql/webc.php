create database webc;

create table users(
	usr_id int not null primary key auto_increment,
	usr_group_id int not null,
	usr_level_id int not null,
	usr_email varchar(50) not null,
	usr_password varchar(50) not null,
	usr_fullname varchar(50) not null,
	usr_slug varchar(50) not null,
	usr_phone varchar(20) not null,
	usr_address text not null,
	usr_images varchar(50) not null,
	usr_status int not null,
	usr_activity varchar(100) not null,
	usr_created_at timestamp not null,
	usr_created_by int not null,
	usr_edited_at timestamp not null,
	usr_edited_by int not null
);

create table groups(
	grp_id int not null primary key auto_increment,
	grp_name varchar(20) not null,
	grp_slug varchar(20) not null,
	grp_description varchar(50) not null,
	grp_created_at timestamp not null,
	grp_created_by int not null,
	grp_edited_at timestamp not null,
	grp_edited_by int not null
);

create table levels(
	lvl_id int not null primary key auto_increment,
	lvl_name varchar(20) not null,
	lvl_slug varchar(20) not null,
	lvl_description varchar(50) not null,
	lvl_created_at timestamp not null,
	lvl_created_by int not null,
	lvl_edited_at timestamp not null,
	lvl_edited_by int not null
);

create table logo_iconbar(
	lib_id int not null primary key auto_increment,
	lib_images varchar(255) not null,
	lib_created_at timestamp not null,
	lib_created_by int not null,
	lib_edited_at timestamp not null,
	lib_edited_by int not null
);

create table logo_brandlogo(
	lbl_id int not null primary key auto_increment,
	lbl_name varchar(50) not null,
	lbl_images varchar(255) not null,
	lbl_created_at timestamp not null,
	lbl_created_by int not null,
	lbl_edited_at timestamp not null,
	lbl_edited_by int not null
);

create table logo_slidehomepage(
	lsh_id int not null primary key auto_increment,
	lsh_images varchar(255) not null,
	lsh_created_at timestamp not null,
	lsh_created_by int not null,
	lsh_edited_at timestamp not null,
	lsh_edited_by int not null
);

create table pages(
	pgs_id int not null primary key auto_increment,
	pgs_name varchar(100) not null,
	pgs_slug varchar(100) not null,
	pgs_images varchar(50) not null,
	pgs_body text not null,
	pgs_created_at timestamp not null,
	pgs_created_by int not null,
	pgs_edited_at timestamp not null,
	pgs_edited_by int not null
);

create table pages_sub(
	sub_pgs_id int not null primary key auto_increment,
	sub_pgs_pages_id int not null,
	sub_pgs_name varchar(100) not null,
	sub_pgs_slug varchar(100) not null,
	sub_pgs_images varchar(50) not null,
	sub_pgs_body text not null,
	sub_pgs_created_at timestamp not null,
	sub_pgs_created_by int not null,
	sub_pgs_edited_at timestamp not null,
	sub_pgs_edited_by int not null
);

create table posts_categories(
	cat_pst_id int not null primary key auto_increment,
	cat_pst_name varchar(50) not null,
	cat_pst_slug varchar(50) not null,
	cat_pst_body text not null,
	cat_pst_created_at timestamp not null,
	cat_pst_created_by int not null,
	cat_pst_edited_at timestamp not null,
	cat_pst_edited_by int not null
);

create table posts(
	pst_id int not null primary key auto_increment,
	pst_name varchar(100) not null,
	pst_slug varchar(100) not null,
	pst_categoriespost_id int not null,
	pst_images varchar(100) not null,
	pst_link varchar(255) not null, ALTER TABLE posts ADD pst_link VARCHAR(255) NOT NULL AFTER pst_images;
	pst_body text not null,
	pst_tags varchar(100) not null, ALTER TABLE posts ADD pst_tags VARCHAR(100) NOT NULL AFTER pst_body;
	pst_created_at timestamp not null,
	pst_created_by int not null,
	pst_edited_at timestamp not null,
	pst_edited_by int not null
);

ALTER TABLE postsart5 CHANGE pst_created_at pst_created_at timestamp NOT NULL default CURRENT_TIMESTAMP;
ALTER TABLE nama_table CHANGE nama_field nama_field timestamp NOT NULL default CURRENT_TIMESTAMP;

create table multiple(
	mlt_id int not null primary key auto_increment,
	mlt_filename varchar(100) not null,
	mlt_created_at timestamp not null,
	mlt_created_by int not null,
	mlt_edited_at timestamp not null,
	mlt_edited_by int not null
);

create table gallery(
	glr_id int not null primary key auto_increment,
	glr_imagesname varchar(100) not null,
	glr_created_at timestamp not null,
	glr_created_by int not null,
	glr_edited_at timestamp not null,
	glr_edited_by int not null
);

create table videos_categories(
	cat_vid_id int not null primary key auto_increment,
	cat_vid_name varchar(50) not null,
	cat_vid_slug varchar(50) not null,
	cat_vid_body text not null,
	cat_vid_created_at timestamp not null,
	cat_vid_created_by int not null,
	cat_vid_edited_at timestamp not null,
	cat_vid_edited_by int not null
);

create table videos(
	vid_id int not null primary key auto_increment,
	vid_name varchar(100) not null,
	vid_slug varchar(100) not null,
	vid_categoriesvideo_id int not null,
	vid_link varchar(255) not null,
	vid_body text not null,
	vid_created_at timestamp not null,
	vid_created_by int not null,
	vid_edited_at timestamp not null,
	vid_edited_by int not null
);