<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('list-gallery')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Gallery</a>

        <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Refresh</a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="card">

        <div class="toolbar">
            <div class="toolbar__label">
                <span class="hidden-xs-down">
                    Gallery
                </span>
            </div>
        </div>

        <div class="card-body">

            <div class="contacts row">
                <?php foreach($galleries as $gallery) : ?>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                        <div class="contacts__item">
                            <div class="">
                                <img width="130" src="<?=base_url(); ?>assets/backend/img/gallery/<?=$gallery['glr_imagesname']?>" alt="">
                            </div>

                            <a href="<?=site_url('/gallery/delete/'.encrypt_url($gallery['glr_id']))?>" onclick="return confirm('Are you sure you want to delete this image?');" class="zmdi zmdi-close-circle-o profile__img__edit"></a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>

    </div>

</div>