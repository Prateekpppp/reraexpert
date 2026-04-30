
<?php 
  
  $data = [
      [
          'title'=>'About',
          'link'=>'aboutus.php',
      ],
      [
          'title'=>'Contact',
          'link'=>'contact.php',
      ],
      [
          'title'=>'Rera Law',
          'link'=>'reralaw.php',
      ],
      [
          'title'=>'Wbrera Orders',
          'link'=>'wbrera_order.php',
      ],
      [
          'title'=>'Blogs',
          'link'=>'blogs.php',
      ],
];

?>
      <!-- ========================= header-2 start ========================= -->
      <header class="header header-2">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.php">
                    <img src="<?= $website ?>assets/img/logo/logo2.png" width="150px" alt="Logo" />
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent2">
                    <ul id="nav2" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="page-scroll <?= ($current_url == 'index.php' || $current_url == '')? 'active':'' ?>" href="<?= $website ?>">Home</a>
                      </li>
                      <?php
                          foreach($data as $arr){
                      ?>
                      <li class="nav-item">
                        <a class="page-scroll <?= $current_url == $arr['link']? 'active':'' ?>" href="<?= $website.$arr['link'] ?>"><?= $arr['title'] ?></a>
                      </li>
                      <?php } ?>
                      <li class="nav-item">
                        <a href="https://wa.me/<?= $contact_phone ?>" style="color:#29d349;">Whatsapp :<?= $contact_phone ?></a>
                      </li>
                    </ul>
                    <!-- <a href="tel:+91-6289163166" class="button button-sm radius-10 d-lg-flext">+91-6289163166</a> -->
                  </div>
                  <!-- navbar collapse -->
                </nav>
                <!-- navbar -->
              </div>
            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- navbar area -->
      </header>
      <!-- ========================= header-2 end ========================= -->
