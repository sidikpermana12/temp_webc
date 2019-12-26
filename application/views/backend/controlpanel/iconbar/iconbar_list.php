<div class="content__inner">
    <header class="content__title">

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
        <div class="card-body">
            <h4 class="card-title">Icon Bar</h4>

            <div class="profile__img">
                <?php foreach($iconbar as $iconb) : ?>
                    <img src="<?=base_url(); ?>assets/backend/img/controlpanel/iconbar/<?=$iconb['lib_images']?>" alt="">

                    <a href="<?=site_url('/iconbar/edit/'.encrypt_url($iconb['lib_id']))?>" class="zmdi zmdi-camera profile__img__edit"></a>
                    <!-- <a style="margin-left: 40px" href="<?=site_url('/iconbar/delete/'.encrypt_url($iconb['lib_id']))?>" class="zmdi zmdi-close-circle-o profile__img__edit"></a> -->
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>