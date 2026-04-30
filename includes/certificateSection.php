<?php

$certificates = [
    [
        'name'=>'Extention Regulation',
        'link'=>'extention-regulation.pdf'
    ],
    [
        'name'=>'THE REAL ESTATE (REGULATION AND DEVELOPMENT) ACT, 2016',
        'link'=>'the-real-estate-(regulation-and-development)-act,2016.pdf'
    ],
    [
        'name'=>'West Bengal Real Estate Rules',
        'link'=>'west-bengal-real-estate-rules.pdf'
    ],
];

?>

<div class="my-5 py-2 container">
    <div class="row">
        <?php
            foreach($certificates as $arr){
        ?>
        <div class="col-md-6 p-3 mb-3">
            <div class="card">
                <object data="assets/reralaw/<?= $arr['link'] ?>" type="application/pdf" width="100%" height="600px">
                    <p>Link to <a href="assets/reralaw/<?= $arr['link'] ?>">the PDF</a>!</p>
                </object>
                <!-- <img src="assets/img/hero/page-hero.webp" width="100%" alt="" srcset=""> -->
                <h5><a href="assets/reralaw/<?= $arr['link'] ?>"><?= $arr['name'] ?></a></h5>
            </div>
        </div>
        <?php } ?>
    </div>
</div>