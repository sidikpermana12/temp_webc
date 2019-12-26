<div class="content__inner">
    <header class="content__title">
        <h1><?=$this->fungsi->user_login()->usr_fullname ?></h1>


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

    <div class="card profile">
        <div class="profile__img">
            <?php if($this->fungsi->user_login()->usr_images == '1510nophoto.png') {?>
                <img src="<?=base_url(); ?>assets/backend/img/nophoto/1510nophoto.png" alt="">
            <?php }else{?>
                <img src="<?=base_url(); ?>assets/backend/1508photos/<?=$this->fungsi->user_login()->usr_images; ?>" alt="">
            <?php }?>

            <a href="#" class="zmdi zmdi-camera profile__img__edit"></a>
        </div>

        <div class="profile__info">
            <p>
                <ul class="icon-list">
                    <li><i class="zmdi zmdi-pin"></i> <?=$this->fungsi->user_login()->usr_address ?></li>
                </ul>
            </p>

            <ul class="icon-list">
                <li><i class="zmdi zmdi-phone"></i> <?=$this->fungsi->user_login()->usr_phone ?></li>
                <li><i class="zmdi zmdi-email"></i> <?=$this->fungsi->user_login()->usr_email ?></li>
                <li><i class="zmdi zmdi-twitter"></i> @mallinda-hollaway</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-body__title mb-4">About</h4>

            <p>
                <?php foreach($levels as $lvl) : ?>
                    <?php if($lvl['lvl_id'] == $this->fungsi->user_login()->usr_level_id ) {?>
                        Level : <?=$lvl['lvl_name']?>
                    <?php }?>
                <?php endforeach ?>
            </p>

            <p>
                Email / Username : <?=$this->fungsi->user_login()->usr_email ?>
            </p>
            <br>

            <h4 class="card-body__title mb-4">More Info :</h4>

            <a class="btn btn-light" href="<?=site_url('profile/edit/'.encrypt_url($this->fungsi->user_login()->usr_id ))?>" role="button">Edit Profile</a> <a class="btn btn-light" href="<?=site_url('profile/password/'.encrypt_url($this->fungsi->user_login()->usr_id ))?>" role="button">Change Password</a>

        </div>
    </div>
</div>