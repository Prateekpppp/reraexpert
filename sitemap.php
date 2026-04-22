<?php
$website = "https://sumanindustry.com/";
header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<url>
    <loc><?= $website ?></loc>
    <priority>1.0</priority>
</url>

<?php

$pages = [
    "index.php",
    "products.php",
    "contact.php",
    "aboutus.php",
    "certificate.php",
];

foreach ($pages as $page) {
    echo "<url>
            <loc>$website$page</loc>
            <priority>0.8</priority>
          </url>";
}
?>

</urlset>