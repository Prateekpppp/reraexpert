<?php
$title = "Filling Complaint in WBRERA";
include_once('../includes/head.php');
include_once('../includes/headerPart.php');

?>
<div class="container my-5 blog">

    <h1 class="my-3 fs-1 theme_color_secondary">
        <?= $title ?>
    </h1>

    <p class="mb-2">U/s 31 Complaint against a RERA registered project in West Bengal can be filed on official site by WBRERA itself.  Click on Online registration and create an ID. Once ID is created one can file a complaint on payment of a fees.</p>

    <div class="mx-auto w-75 my-3">
        <img src="<?= $website ?>assets/img/blogs/wbrera.png" alt="" class="w-100">
    </div>

    <p class="mt-4">
        Once Login is done, look towards the left. You will find the option to lodge complaint.
    </p>
    
    <div class="mx-auto w-75 my-3">
        <img src="<?= $website ?>assets/img/blogs/lodge-complaint.png" alt="" class="w-100">
    </div>

    <p class="mt-4">
        It is a rare phenomena that a complaint is lodged as the promoter and the allottee (Buyer) usually matters are settled amicably. The most noted complaints are around delay in handing over the possession of the property from the date mentioned in Agreement for sale.
    </p>

</div>

<?php
include_once('../includes/footer.php');
include_once('../includes/foot.php');
?>