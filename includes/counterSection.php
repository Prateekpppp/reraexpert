<?php

$counterData = [
    [
    'img'=>'about1.png',
    'count'=>'50',
    'head'=>'developers helped'
    ],
    [
    'img'=>'about2.png',
    'count'=>'150',
    'head'=>'Consultation done'
    ],
    [
    'img'=>'about3.png',
    'count'=>'500',
    'head'=>'agreement drafted'
    ],
    [
    'img'=>'about4.png',
    'count'=>'50',
    'head'=>'registration'
    ],
];
    
?>

<section class="feature-section text-uppercase text-center mb-5">
    <div class="container">
        <div class="row align-items-baseline">
            <?php
                foreach($counterData as $arr){
            ?>
            <div class="col-md-3">
                <div class="d-flex flex-column">
                    <img class="w-50 mx-auto mb-3" src="assets/img/about/<?= $arr['img'] ?>">
                    <span class="fs-4 theme_color_secondary"><?= $arr['count'] ?>+</span>
                    <h4 class="fs-4 theme_color_secondary"><?= $arr['head'] ?></h4>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>