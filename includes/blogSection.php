<?php

$data = [
    [
        'title'=>'RERA Registration requirements and exemptions to registration',
        'img'=>'rera-registration-requirements-and-exemptions-to-registration.png',
        'link'=>'rera-registration-requirements-and-exemptions-to-registration.php',
    ],
    [
        'title'=>'Documents for RERA Registration',
        'img'=>'rera-registration-requirements-and-exemptions-to-registration.png',
        'link'=>'documents-for-rera-registration.php',
    ],
];

?>

<div class="my-5 py-2 container">
    <div class="row">
        <?php
            foreach($data as $arr){
        ?>
        <div class="col-md-6 p-3 mb-3">
            <div class="card" style="min-height: 300px;">
                <img src="<?= $website ?>assets/img/blogs/<?= $arr['img'] ?>" width="100%" alt="" srcset="">
                <h3><a href="<?= $website ?>blogs/<?= $arr['link'] ?>"><?= $arr['title'] ?></a></h3>
            </div>
        </div>
        <?php } ?>
    </div>
</div>