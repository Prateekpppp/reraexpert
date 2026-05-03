<?php

$data = [
    [
        'title'=>'RERA Registration requirements and exemptions to registration',
        'img'=>'rera-registration-requirements-and-exemptions-to-registration.png',
        'link'=>'rera-registration-requirements-and-exemptions-to-registration.php',
    ],
    [
        'title'=>'Documents for RERA Registration',
        'img'=>'registration-documents.jpg',
        'link'=>'documents-for-rera-registration.php',
    ],
    [
        'title'=>'Fees for RERA Project / Plot Registration',
        'img'=>'kolkata-gazette-extraordinary.png',
        'link'=>'fees-for-rera-project-plot-registration.php',
    ],
    [
        'title'=>'Fees for Agent / Consultant registration under RERA,2016',
        'img'=>'fees-for-agent-consultant-registration.jpg',
        'link'=>'fees-for-agent-consultant-registration-under-rera.php',
    ],
    [
        'title'=>'CARPET AREA and SUPER BUILTUP Area',
        'img'=>'section-2k.png',
        'link'=>'carpet-area-and-super-builtup-area.php',
    ],
    [
        'title'=>'Filling Complaint in WBRERA against promoter',
        'img'=>'lodge-complaint.png',
        'link'=>'filling-complaint-in-wbrera.php',
    ],
    // [
    //     'title'=>'Agreement Format Under the RERA Act 2016',
    //     'img'=>'agreement-format-under-rera-act.jpg',
    //     'link'=>'agreement-format-under-rera-act-2016.php',
    // ],
];

?>

<div class="my-5 py-2 container">
    <div class="row">
        <?php
            foreach($data as $arr){
        ?>
        <div class="col-md-6 p-3 mb-3">
            <div class="card blogs" style="min-height:320px">
                <img src="<?= $website ?>assets/img/blogs/<?= $arr['img'] ?>" width="100%" alt="" srcset="">
                <a class="" href="<?= $website ?>blogs/<?= $arr['link'] ?>"><h3 class="fs-4"><?= $arr['title'] ?></h3></a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>