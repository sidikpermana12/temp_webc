<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('users')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Users</a>

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
            <?php if($users['usr_images'] == '1510nophoto.png') {?>
                <img src="<?=base_url(); ?>assets/backend/img/nophoto/1510nophoto.png" alt="">
            <?php }else{?>
                <img src="<?=base_url(); ?>assets/backend/1508photos/<?=$users['usr_images']; ?>" alt="">
            <?php }?>

            <a href="#" class="zmdi zmdi-camera profile__img__edit"></a>
        </div>

        <div class="profile__info">
            <p>
                <ul class="icon-list">
                    <li><i class="zmdi zmdi-pin"></i> <?=$users['usr_address']?></li>
                </ul>
            </p>

            <ul class="icon-list">
                <li><i class="zmdi zmdi-phone"></i> <?=$users['usr_phone']?></li>
                <li><i class="zmdi zmdi-email"></i> <?=$users['usr_email']?></li>
                <li><i class="zmdi zmdi-twitter"></i> @mallinda-hollaway</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-body__title mb-4">About <?=$users['usr_fullname']?></h4>

            <p>
                <?php foreach($groups as $grp) : ?>
                    <?php if($grp['grp_id'] == $users['usr_group_id']) {?>
                        Group : <?=$grp['grp_name']?>
                    <?php }?>
                <?php endforeach ?>
            </p>
            <p>
                <?php foreach($levels as $lvl) : ?>
                    <?php if($lvl['lvl_id'] == $users['usr_group_id']) {?>
                        Level : <?=$lvl['lvl_name']?>
                    <?php }?>
                <?php endforeach ?>
            </p>

            <p>
                Email / Username : <?=$users['usr_email']?>
            </p>
            <br>

            <h4 class="card-body__title mb-4">More Info :</h4>

            <ul class="icon-list">
                <li><i class="zmdi zmdi-info"></i> <?=$users['usr_created_at']?> | Created At</li>
                <li><i class="zmdi zmdi-info"></i> <?=$users['usr_created_by']?> | Created By</li>
                <li><i class="zmdi zmdi-info"></i> <?=$users['usr_edited_at']?> | Edited At</li>
                <li><i class="zmdi zmdi-info"></i> <?=$users['usr_edited_by']?> | Edited Bt</li>
            </ul>
        </div>
    </div>
</div>