<div class="container">
  <div class="row">
    <!------------------coluna 1-->
    <div class="col-md-3 col-modal-3">
      <?php

      $ModalApp1 = [
        [
          "img" => "canva.webp",
          "app" => "Canva Design",
          "dev" => "canva",
          "rev" => "fas fa-star"
        ],  [
          "img" => "facebook.webp",
          "app" => "facebook",
          "dev" => "meta",
          "rev" => "fas fa-star"
        ],  [
          "img" => "hbo.webp",
          "app" => "HBO Max",
          "dev" => "warner media",
          "rev" => "fas fa-star"
        ],  [
          "img" => "inter.webp",
          "app" => "inter",
          "dev" => "banco inter s.a",
          "rev" => "fas fa-star"
        ]
      ];
      $count = 1;

      foreach ($ModalApp1 as $ModalAppList1) {
      ?>

        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/apps/<?php echo $ModalAppList1['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalAppList1['app'] ?></h1>
            <h2><?php echo  $ModalAppList1['dev'] ?></h2>
            <p><i class="<?php echo  $ModalAppList1['rev'] ?>"></i><i class="<?php echo  $ModalAppList1['rev'] ?>"></i><i class="<?php echo  $ModalAppList1['rev'] ?>"></i><i class="<?php echo  $ModalAppList1['rev'] ?>"></i><i class="<?php echo  $ModalAppList1['rev'] ?>"></i></p>
          </div>
        </a>
        <!--fim item 1-->

      <?php
        $count++;
      }
      ?>

    </div>
    <!--------------fim coluna 1-->
    <!---------------coluna 2-->
    <div class="col-md-3 col-modal-3">
      <?php

      $ModalApp2 = [
        [
          "img" => "mercado-livre.webp",
          "app" => "mercado livre",
          "dev" => "mercado libre",
          "rev" => "fas fa-star"
        ],  [
          "img" => "netflix.webp",
          "app" => "netflix",
          "dev" => "netflix, inc.",
          "rev" => "fas fa-star"
        ],  [
          "img" => "olx.webp",
          "app" => "OLX",
          "dev" => "OLX brasil",
          "rev" => "fas fa-star"
        ],  [
          "img" => "prime-video.webp",
          "app" => "Prime Video",
          "dev" => "Amazon",
          "rev" => "fas fa-star"
        ]
      ];
      $count = 1;

      foreach ($ModalApp2 as $ModalAppList2) {
      ?>

        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/apps/<?php echo $ModalAppList2['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalAppList2['app'] ?></h1>
            <h2><?php echo  $ModalAppList2['dev'] ?></h2>
            <p><i class="<?php echo  $ModalAppList2['rev'] ?>"></i><i class="<?php echo  $ModalAppList2['rev'] ?>"></i><i class="<?php echo  $ModalAppList2['rev'] ?>"></i><i class="<?php echo  $ModalAppList2['rev'] ?>"></i><i class="<?php echo  $ModalAppList2['rev'] ?>"></i></p>
          </div>
        </a>
        <!--fim item 1-->
      <?php
        $count++;
      }
      ?>

    </div>
    <!--fim coluna 2-->

    <!---------------coluna 3-->
    <div class="col-md-3 col-modal-3">
      <?php

      $ModalApp3 = [
        [
          "img" => "spotify.webp",
          "app" => "spotify Music",
          "dev" => "spotify AB",
          "rev" => "fas fa-star"
        ], [
          "img" => "tiktok.webp",
          "app" => "tik tok",
          "dev" => "tikTok ltda.",
          "rev" => "fas fa-star"
        ],
        [
          "img" => "wpp.webp",
          "app" => "whatsApp",
          "dev" => "meta",
          "rev" => "fas fa-star"
        ],
        [
          "img" => "youtube.webp",
          "app" => "youtube",
          "dev" => "google llc",
          "rev" => "fas fa-star"
        ]

      ];
      $count = 1;

      foreach ($ModalApp3 as $ModalAppList3) {
      ?>

        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/apps/<?php echo $ModalAppList3['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalAppList3['app'] ?></h1>
            <h2><?php echo  $ModalAppList3['dev'] ?></h2>
            <p><i class="<?php echo  $ModalAppList3['rev'] ?>"></i><i class="<?php echo  $ModalAppList3['rev'] ?>"></i><i class="<?php echo  $ModalAppList3['rev'] ?>"></i><i class="<?php echo  $ModalAppList3['rev'] ?>"></i><i class="<?php echo  $ModalAppList3['rev'] ?>"></i></p>
          </div>
        </a>
        <!--fim item 1-->
      <?php
        $count++;
      }
      ?>

    </div>
    <!--fim coluna 3-->

    <!---------------coluna 4-->
    <div class="col-md-3 col-modal-3">
      <?php

      $ModalApp4 = [
        [
          "img" => "waze.webp",
          "app" => "Waze",
          "dev" => "Waze",
          "rev" => "fas fa-star"
        ],  [
          "img" => "pinterest.webp",
          "app" => "pinterest",
          "dev" => "pinterest",
          "rev" => "fas fa-star"
        ],  [
          "img" => "instagram.webp",
          "app" => "instagram",
          "dev" => "meta",
          "rev" => "fas fa-star"
        ],  [
          "img" => "ifood.webp",
          "app" => "ifood delivery",
          "dev" => "ifood",
          "rev" => "fas fa-star"
        ]

      ];
      $count = 1;

      foreach ($ModalApp4 as $ModalAppList4) {
      ?>

        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/apps/<?php echo $ModalAppList4['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalAppList4['app'] ?></h1>
            <h2><?php echo  $ModalAppList4['dev'] ?></h2>
            <p><i class="<?php echo  $ModalAppList4['rev'] ?>"></i><i class="<?php echo  $ModalAppList4['rev'] ?>"></i><i class="<?php echo  $ModalAppList4['rev'] ?>"></i><i class="<?php echo  $ModalAppList4['rev'] ?>"></i><i class="<?php echo  $ModalAppList4['rev'] ?>"></i></p>
          </div>
        </a>
        <!--fim item 1-->
      <?php
        $count++;
      }
      ?>

    </div>
    <!--fim coluna 4-->
  </div>
</div>