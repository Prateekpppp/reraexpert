<?php
$title = "CARPET AREA and SUPER BUILTUP Area";
include_once('../includes/head.php');
include_once('../includes/headerPart.php');

?>
<div class="container my-5 blog">

    <h1 class="my-3 fs-1 theme_color_secondary">
        <?= $title ?>
    </h1>

    <p class="mb-2">As per section 2(k) of the RERA Act,2016 Carpet Area is the usable floor area in the apartment. It includes internal walls but not the external walls. it also does not includes balcony area given in an apartment.</p>

    <div class="mx-auto w-75 my-3">
        <img src="<?= $website ?>assets/img/blogs/section-2k.png" alt="" class="w-100">
    </div>

    <p class="mt-4">
        The difference between Covered area (Built-up area) is the area taken by external walls and balcony area. The Super Built up area is a markup over this Covered Area. It is usually 25 to 50%.
    </p>
    <p class="mt-4">
        These definitions are under the RERA act and one should make sure that the project they choose to invest in is a RERA approved project to avoid any complications while obtaining mutation or CC.
    </p>

</div>

<?php
include_once('../includes/footer.php');
include_once('../includes/foot.php');
?>