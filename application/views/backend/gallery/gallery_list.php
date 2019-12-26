<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('gallery/addimages')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-collection-plus"></i> Add Images</a>

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
            <div class="actions">
                <a href="<?=site_url('/list-gallery/delete-gallery')?>" class="actions__item zmdi zmdi-delete"></a>
            </div>
        </div>

        <div class="card-body">

            <div class="row lightbox photos">
                <?php foreach($galleries as $gallery) : ?>
                    <a href="<?=base_url()?>assets/backend/img/gallery/<?=$gallery['glr_imagesname']?>" class="col-md-2 col-4">
                        <div class="lightbox__item photos__item">
                            <img src="<?=base_url()?>assets/backend/img/gallery/<?=$gallery['glr_imagesname']?>" alt="" />
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>

    </div>

</div>