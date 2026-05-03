<?php
$title = "Fees for RERA Project / Plot Registration";
include_once('../includes/head.php');
include_once('../includes/headerPart.php');

?>
<div class="container my-5 blog">

    <h1 class="my-3 fs-1 theme_color_secondary">
        <?=  $title ?>
    </h1>

    <p class="mb-2">Rule 3(3) says the registration fees structure for project and for plots shall be as follows:</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th><strong><h5 class="theme_color_secondary">Type</h5></strong></th>
                <th><strong><h5 class="theme_color_secondary">Rate</h5></strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Less than 1000 sqft - Residential Project (Land proposed to be developed)</td>
                <td>10 Rs/ Sq Mtr</td>
            </tr>
            <tr>
                <td>More than 1000 sqft - Residential Project (Land proposed to be developed)</td>
                <td>20 Rs/ Sq Mtr</td>
            </tr>
            <tr>
                <td>Less than 1000 sqft - Commercial Project (Land proposed to be developed)</td>
                <td>50 Rs/ Sq Mtr</td>
            </tr>
            <tr>
                <td>More than 1000 sqft - Commerciall Project (Land proposed to be developed)</td>
                <td>100 Rs/ Sq Mtr</td>
            </tr>
        </tbody>
    </table>

    <div class="mx-auto w-75 my-3">
        <img src="<?= $website ?>assets/img/blogs/kolkata-gazette-extraordinary.png" alt="" class="w-100">
    </div>

</div>

<?php
include_once('../includes/footer.php');
include_once('../includes/foot.php');
?>