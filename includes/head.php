<?php

    error_reporting(0);
    if(!str_contains($_SERVER['HTTP_HOST'],'localhost')){
      $website = "https://thereraexpert.com/";
    } else{
      $website = "http://localhost/reraexpert/";
    }
    $contact_mail = "contact@thereraexpert.com";
    $contact_phone = "9147714689";
    $current_url = explode('/',$_SERVER['REQUEST_URI']);
    $current_url = $current_url[count($current_url) - 1];
    // die($current_url);
?>

<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= isset($title) ? $title : "WB RERA Consultants | WBRERA Advisors | Project Registration in West Bengal - The RERA Expert" ?></title>
    <meta name="description" content="<?= isset($description) ? $description : "Your WBRERA / RERA compliance, handled end to end. Whether you're a developer registering a new project, an agent getting registered, or managing project extensions and quarterly filings — we take care of it all, so you can focus on closing deals.." ?>" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= $website ?>assets/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="<?= $website ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= $website ?>assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="<?= $website ?>assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="<?= $website ?>assets/css/animate.css"/>
    <link rel="stylesheet" href="<?= $website ?>assets/css/lindy-uikit.css"/>
    <link rel="stylesheet" href="<?= $website ?>assets/css/style.css"/>

    <?php 
      if(str_contains($_SERVER['REQUEST_URI'],'/blogs')){
    ?>
    <style>
      

      .blog, .blogs {
        
        *,h1,h2,h3,h4,h5,h6,p {
          font-family: sans-serif;
          font-weight: 700;
          /* line-height: 0.9; */
        }
      }
      .blogs {
        font-family: sans-serif;
        padding: 7px;
      }
    </style>
    <?php } ?>

  </head>