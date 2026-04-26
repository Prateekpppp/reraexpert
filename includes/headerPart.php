
  <body>
<?php
  include_once('includes/preloader.php');
?>
    <!-- ========================= hero-section-wrapper-2 start ========================= -->
    <section id="home" class="hero-section-wrapper-2">

    <?php

      $pageHeroSection = [
        // 'aboutus.php',
      ];

      include_once('includes/header.php');
      if($current_url == 'index.php' || $current_url == ''){
          include_once('includes/bannerSection.php');
      } else if(in_array($current_url,$pageHeroSection)){
        include_once('includes/pageHeroSection.php');
      }
    ?>
    </section>
    <!-- ========================= hero-section-wrapper-2 end ========================= -->