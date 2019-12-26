<!-- ********** Hero Area Start ********** -->
<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <?php foreach($slidehomepage as $slhomepage) : ?>
        <!-- <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?=base_url()?>assets/frontend/img/blog-img/bg2.jpg);"></div> -->
        <?php if($slhomepage['lsh_images'] == 'bar.png') {?>
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?=base_url()?>assets/backend/img/controlpanel/noimages/bar.png);"></div>
        <?php }else{?>
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?=base_url()?>assets/backend/img/controlpanel/slidehomepage/<?=$slhomepage['lsh_images']?>);"></div>
        <?php }?>
        <?php endforeach ?>
        <!-- Single Slide -->
        <!-- <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?=base_url()?>assets/frontend/img/blog-img/bg1.jpg);"></div> -->
    </div>

    <!-- Hero Post Slide -->
    <div class="hero-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-post-slide">
                        <!-- Single Slide -->
                        <?php foreach($posts as $pst) : ?>
                        <?php foreach($categoriesposts as $catpst) : ?>
                            <?php if($pst['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>"><?=$pst['pst_name']?></a>
                                </div>
                            </div>
                            <?php } ?>
                        <?php endforeach ?>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ********** Hero Area End ********** -->

<!-- ********** Content Area Start ********** -->
<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12 col-lg-8">
                <div class="post-content-area mb-50">
                    <!-- Catagory Area -->
                    <div class="world-catagory-area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="title">Don’t Miss</li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
                            </li>
                            <?php foreach($categoriesposts as $catpst) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#<?=$catpst['cat_pst_slug']?>" role="tab" aria-selected="false"><?=$catpst['cat_pst_name']?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                            <?php foreach($posts as $pst) : ?>
                                            <?php foreach($categoriesposts as $catpst) : ?>
                                                <?php if($pst['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>">
                                                            <img width="320px" <?php if($pst['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pst['pst_images']?>" <?php }?> alt="">
                                                        </a>
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="<?=site_url('/category/'.$catpst['cat_pst_slug'])?>"><?=$catpst['cat_pst_name']?></a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>" class="headline">
                                                            <h5><?=$pst['pst_name']?></h5>
                                                        </a>
                                                        <p><?=$pst['pst_name']?></p>
                                                        <!-- Post Meta -->
                                                        <?php foreach($users as $usr) : ?>
                                                            <?php if($pst['pst_created_by'] == $usr['usr_id']) {?>
                                                                <div class="post-meta">
                                                                    <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pst['pst_created_at']?></a></p>
                                                                </div>
                                                            <?php }?>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            <?php endforeach ?>
                                            <?php endforeach ?>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <?php foreach(array_slice($posts,0, 4) as $pst) : ?>
                                        <?php foreach($categoriesposts as $catpst) : ?>
                                                <?php if($pst['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pst['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pst['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>" class="headline">
                                                        <h5><?=$pst['pst_name']?></h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($pst['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pst['pst_created_at']?></a></p>
                                                            </div>
                                                        <?php }?>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        <?php endforeach ?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health">
                                <div class="row">
                                    <?php foreach(array_slice($postshealth ,0, 1) as $psthealth) : ?>
                                    <?php foreach($categoriesposts as $catpst) : ?>
                                        <?php if($psthealth['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$psthealth['pst_slug']); ?>">
                                                            <img width="320px" <?php if($psthealth['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$psthealth['pst_images']?>" <?php }?> alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$psthealth['pst_slug']); ?>" class="headline">
                                                        <h5><?=$psthealth['pst_name']?></h5>
                                                    </a>
                                                    <p><?=$psthealth['pst_name']?></p>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($psthealth['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$psthealth['pst_created_at']?></a></p>
                                                            </div>
                                                        <?php }?>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    <?php endforeach ?>
                                    <?php endforeach ?>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <?php foreach(array_slice($postshealth, 0, 4) as $psthealth) : ?>
                                        <?php foreach($categoriesposts as $catpst) : ?>
                                            <?php if($psthealth['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$psthealth['pst_slug']); ?>">
                                                        <img width="320px" <?php if($psthealth['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$psthealth['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$psthealth['pst_slug']); ?>" class="headline">
                                                        <h5><?=$psthealth['pst_name']?></h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($psthealth['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$psthealth['pst_created_at']?></a></p>
                                                            </div>
                                                        <?php }?>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        <?php endforeach ?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports">
                                <div class="row">
                                    <?php foreach(array_slice($postssports ,0, 1) as $pstsports) : ?>
                                    <?php foreach($categoriesposts as $catpst) : ?>
                                        <?php if($pstsports['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstsports['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pstsports['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstsports['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                <!-- Catagory -->
                                                    <div class="post-cta"><a href="#"><?=$catpst['cat_pst_name']?></a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstsports['pst_slug']); ?>" class="headline">
                                                        <h5><?=$pstsports['pst_name']?></h5>
                                                    </a>
                                                    <p><?=$pstsports['pst_name']?></p>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($pstsports['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pstsports['pst_created_at']?></a></p>
                                                            </div>
                                                        <?php }?>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    <?php endforeach ?>
                                    <?php endforeach ?>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <?php foreach(array_slice($postssports, 0, 4) as $pstsports) : ?>
                                        <?php foreach($categoriesposts as $catpst) : ?>
                                            <?php if($pstsports['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstsports['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pstsports['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstsports['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstsports['pst_slug']); ?>" class="headline">
                                                        <h5><?=$pstsports['pst_name']?></h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($pstsports['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pstsports['pst_created_at']?></a></p>
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
                            </div>

                            <div class="tab-pane fade" id="ekonomi" role="tabpanel" aria-labelledby="ekonomi">
                                <div class="row">
                                    <?php foreach(array_slice($postsekonomi ,0, 1) as $pstekonomi) : ?>
                                    <?php foreach($categoriesposts as $catpst) : ?>
                                        <?php if($pstekonomi['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstekonomi['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pstekonomi['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstekonomi['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                <!-- Catagory -->
                                                    <div class="post-cta"><a href="#"><?=$catpst['cat_pst_name']?></a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstekonomi['pst_slug']); ?>" class="headline">
                                                        <h5><?=$pstekonomi['pst_name']?></h5>
                                                    </a>
                                                    <p><?=$pstekonomi['pst_name']?></p>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($pstekonomi['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pstekonomi['pst_created_at']?></a></p>
                                                            </div>
                                                        <?php }?>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    <?php endforeach ?>
                                    <?php endforeach ?>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <?php foreach(array_slice($postsekonomi, 0, 4) as $pstekonomi) : ?>
                                        <?php foreach($categoriesposts as $catpst) : ?>
                                            <?php if($pstekonomi['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstekonomi['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pstekonomi['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstekonomi['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstekonomi['pst_slug']); ?>" class="headline">
                                                        <h5><?=$pstekonomi['pst_name']?></h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($pstekonomi['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pstekonomi['pst_created_at']?></a></p>
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
                            </div>

                            <div class="tab-pane fade" id="culture" role="tabpanel" aria-labelledby="culture">
                                <div class="row">
                                    <?php foreach(array_slice($postsculture ,0, 1) as $pstculture) : ?>
                                    <?php foreach($categoriesposts as $catpst) : ?>
                                        <?php if($pstculture['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstculture['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pstculture['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstculture['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?=$catpst['cat_pst_name']?></a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstculture['pst_slug']); ?>" class="headline">
                                                        <h5><?=$pstculture['pst_name']?></h5>
                                                    </a>
                                                    <p><?=$pstculture['pst_name']?></p>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($pstculture['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pstculture['pst_created_at']?></a></p>
                                                            </div>
                                                        <?php }?>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    <?php endforeach ?>
                                    <?php endforeach ?>

                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <?php foreach(array_slice($postsculture, 0, 4) as $pstculture) : ?>
                                        <?php foreach($categoriesposts as $catpst) : ?>
                                            <?php if($pstculture['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstculture['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pstculture['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstculture['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstculture['pst_slug']); ?>" class="headline">
                                                        <h5><?=$pstculture['pst_name']?></h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <?php foreach($users as $usr) : ?>
                                                        <?php if($pstculture['pst_created_by'] == $usr['usr_id']) {?>
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pstculture['pst_created_at']?></a></p>
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
                            </div>

                            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video">
                                <div class="row">
                                    <?php foreach($postsvideo as $pstvideo) : ?>
                                    <?php foreach($categoriesposts as $catpst) : ?>
                                        <?php if($pstvideo['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pstvideo['pst_slug']); ?>">
                                                        <img width="320px" <?php if($pstvideo['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pstvideo['pst_images']?>" <?php }?> alt="">
                                                    </a>
                                                    <!-- Catagory -->
                                                        <div class="post-cta"><a href="#"><?=$catpst['cat_pst_name']?></a></div>
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
                                        </div>
                                        <?php }?>
                                    <?php endforeach ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ========== Sidebar Area ========== -->
            <div class="col-12 col-md-8 col-lg-4">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <?php foreach($pagesabout as $pgsabout) : ?>
                            <h5 class="title"><?=$pgsabout['pgs_name']?></h5>
                            <div class="widget-content">
                                <p><?=substr($pgsabout['pgs_body'], 0, 250)?><a href="<?=site_url('/pages/menu/'.$pgsabout['pgs_slug']); ?>" style="color:blue;" >[More..]</a></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">News</h5>
                        <div class="widget-content">
                            <!-- Single Blog Post -->
                            <?php foreach(array_slice($posts, 0, 5) as $pst) :?>
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <?php foreach($categoriesposts as $catpst) : ?>
                                        <?php if($pst['pst_categoriespost_id'] == $catpst['cat_pst_id']) { ?>
                                        <div class="post-thumbnail">
                                            <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>">
                                                <img width="320px" <?php if($pst['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pst['pst_images']?>" <?php }?> alt="">
                                            </a>
                                        </div>
                                        <!-- Post Content -->                                    
                                        <div class="post-content">
                                            <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>" class="headline">
                                                <h5 class="mb-0"><?=$pst['pst_name']?></h5>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php endforeach ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="<?=base_url()?>assets/frontend/img/blog-img/b4.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="<?=base_url()?>assets/frontend/img/blog-img/b5.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="<?=base_url()?>assets/frontend/img/blog-img/b6.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="world-latest-articles">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="title">
                        <h5>Latest Articles</h5>
                    </div>

                    <!-- Single Blog Post -->
                    <?php foreach(array_slice($posts, 0, 5) as $pst) : ?>
                        <?php foreach($categoriesposts as $catpst) : ?>
                            <?php if($pst['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                            <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>">
                                        <img width="320px" <?php if($pst['pst_images'] == 'noimagesheader.jpg') { ?> src="<?=base_url()?>assets/frontend/img/thumbnail/thumbnail.jpg" <?php }else{?>src="<?=base_url()?>assets/backend/img/posts/<?=$pst['pst_images']?>" <?php }?> alt="">
                                    </a>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="<?=site_url('/posts/'.$catpst['cat_pst_slug'].'/'.$pst['pst_slug']); ?>" class="headline">
                                        <h5><?=$pst['pst_name'] ?></h5>
                                    </a>
                                    <p><?=substr($pst['pst_body'], 0, 140) ?>...</p>
                                    <!-- Post Meta -->
                                    <?php foreach($users as $usr) : ?>
                                        <?php if($pst['pst_created_by'] == $usr['usr_id']) {?>
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author"><?=$usr['usr_fullname']?></a> on <a href="#" class="post-date"><?=$pst['pst_created_at']?></a></p>
                                            </div>
                                        <?php }?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <?php } ?>
                        <?php endforeach ?>
                    <?php endforeach ?>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="title">
                        <h5>Most Popular Videos</h5>
                    </div>

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
                                <?php foreach($categoriesposts as $catpst) : ?>
                                    <?php if($pstvideo['pst_categoriespost_id'] == $catpst['cat_pst_id'])  {?>
                                        <div class="post-cta"><a href="<?=site_url('/category/'.$catpst['cat_pst_slug'])?>"><?=$catpst['cat_pst_name']?></a></div>
                                    <?php } ?>
                                <?php endforeach ?>
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
<!-- ********** Content Area End ********** -->