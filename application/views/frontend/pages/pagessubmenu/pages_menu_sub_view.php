<!-- ********** Hero Area Start ********** -->
<div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?=base_url()?>assets/backend/img/pages/subpages/<?=$pagessubview['sub_pgs_images']?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="single-blog-title text-center">
                    <h3><?=$pagessubview['sub_pgs_name']?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ********** Hero Area End ********** -->

<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- ============= Post Content Area ============= -->
            <div class="col-12 col-lg-8">
                <div class="single-blog-content mb-100">
                    <!-- Post Content -->
                    <div class="post-content">
                        <h6><?=$pagessubview['sub_pgs_body']?></h6>
                        <!-- Post Meta Keywords-->
                        <meta name="keywords" content="<?=$pagessubview['sub_pgs_name']?>">
                    </div>
                </div>
            </div>

            <!-- ========== Sidebar Area ========== -->
            <div class="col-12 col-md-8 col-lg-4">
                <div class="post-sidebar-area mb-100">
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">News</h5>
                        <div class="widget-content">
                            <!-- Single Blog Post -->
                           <?php foreach(array_slice($postsview, 0, 5) as $pstview) :?>
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <?php foreach($categoriesposts as $catpst) : ?>
                                        <?php if($pstview['pst_categoriespost_id'] == $catpst['cat_pst_id']) { ?>
                                        <div class="post-thumbnail">
                                            <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstview['pst_slug']); ?>"><img width="320px" <?php if($pstview['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstview['pst_images']?>" <?php }?> alt=""></a>
                                        </div>
                                        <!-- Post Content -->                                    
                                        <div class="post-content">
                                            <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstview['pst_slug']); ?>" class="headline">
                                                <h5 class="mb-0"><?=$pstview['pst_name']?></h5>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php endforeach ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Video</h5>
                        <div class="widget-content">
                            <!-- Single Blog Post -->
                            <?php foreach(array_slice($postsvideo,0 ,2) as $pstvideo) : ?>
                            <?php foreach($categoriesposts as $catpst) : ?>
                                <?php if($pstvideo['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstvideo['pst_slug']); ?>">
                                            <img width="320px" <?php if($pstvideo['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstvideo['pst_images']?>" <?php }?> alt="">
                                        </a>
                                        <!-- Catagory -->
                                        <div class="post-cta"><a href="<?=site_url('/category/'.$catpst['cat_pst_slug'])?>"><?=$catpst['cat_pst_name']?></a></div>
                                        <!-- Video Button -->
                                        <a href="<?=$pstvideo['pst_link']?>" class="video-btn"><i class="fa fa-play"></i></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstvideo['pst_slug']); ?>" class="headline">
                                            <h5><?=$pstvideo['pst_name']?></h5>
                                        </a>
                                        <!-- Post Meta -->
                                        <?php foreach($users as $usr) : ?>
                                            <?php if($pstvideo['pst_created_by'] == $usr['usr_id']) {?>
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pstvideo['pst_created_at']?></a></p>
                                                </div>
                                            <?php }?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <?php }?>
                            <?php endforeach ?>
                            <?php endforeach ?>
                        </div>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Stay Connected</h5>
                        <div class="widget-content">
                            <div class="social-area d-flex justify-content-between">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</div>