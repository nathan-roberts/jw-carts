<header>
    <h2> <?= __('Info') ?></h2>
</header>
<?php if($_SESSION['is_admin']): ?>
    <nav id="nav-sub">
        <a href="./info-add.php" class="button active">
            <i class="fa fa-cloud-upload"></i>  <?= __('Upload File') ?>
        </a>
    </nav>
<?php endif ?>
<div>
    <ul id="info-list">
    <?php foreach ($placeholder['file_list'] as $file) : ?>
        <li>
            <a target="_blank" href="./info-file.php?id_info= <?= $file['id_info'];?>">
                <?php if($file['mime_type'] == 'application/pdf'): ?>
                    <i class="fa fa-file-pdf-o"></i>
                <?php else: ?>
                    <i class="fa fa-file-image-o"></i>
                <?php endif;?>
                <h4> <?= $file['label'] ?></h4>
                <?php if ($_SESSION['is_admin']) : ?>
                    <a href="./info-edit.php?id_info= <?= $file['id_info'] ?>" class="button" target="_blank"> <?= __('Edit') ?></a>
                <?php endif ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
</div>