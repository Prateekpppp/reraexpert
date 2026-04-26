<?php

$imageData = [
    'agent-registration.png',
    'agreement-drafting.png',
    'consultation.png',
    'project-registration.png',
    'quartery-updates.png',
    ];
    
?>
<div class="row">
    <div class="col-5 p-2">
        <div id="scrollDiv" class="row overflow-hidden max-vh-75 scrollDiv">
            <?php
                foreach($imageData as $k=>$img){
                    if($k<3){
            ?>
            <div class="p-2">
                <img src="assets/img/hero/<?= $img ?>" alt="<?= $img ?>" class="w-100">
            </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="col-7 p-2">
        <div class="row overflow-hidden max-vh-75 scrollDiv">
            <?php
                foreach($imageData as $k=>$img){
                    if($k>2){
            ?>
            <div class="p-2">
                <img src="assets/img/hero/<?= $img ?>" alt="<?= $img ?>" class="w-100">
            </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>