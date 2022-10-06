<div class="container">
  <div class="row">
    <!------------------coluna 1-->
    <div class="col-md-3 col-modal-3">
      <?php

      $ModalGame1 = [
        [
          "img" => "batman.webp",
          "app" => "batman",
          "dev" => "ação e aventura",
          "rev" => "fas fa-star"
        ],  [
          "img" => "clash.webp",
          "app" => "clash of clans",
          "dev" => "supercell",
          "rev" => "fas fa-star"
        ],  [
          "img" => "cod.webp",
          "app" => "call of duty",
          "dev" => "actvision",
          "rev" => "fas fa-star"
        ],  [
          "img" => "fifa.webp",
          "app" => "fifa",
          "dev" => "eletronic arts",
          "rev" => "fas fa-star"
        ]
      ];
      $count = 1;

      foreach ($ModalGame1 as $ModalGameList1) {
      ?>

        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/games/<?php echo $ModalGameList1['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalGameList1['app'] ?></h1>
            <h2><?php echo $ModalGameList1['dev'] ?></h2>
            <p><i class="<?php echo $ModalGameList1['rev'] ?>"></i><i class="<?php echo $ModalGameList1['rev'] ?>"></i><i class="<?php echo $ModalGameList1['rev'] ?>"></i><i class="<?php echo $ModalGameList1['rev'] ?>"></i><i class="<?php echo $ModalGameList1['rev'] ?>"></i></p>
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

      $ModalGame2 = [
        [
          "img" => "gta-sa.webp",
          "app" => "GTA:san andreas",
          "dev" => "rockstar",
          "rev" => "fas fa-star"
        ],  [
          "img" => "mir4.webp",
          "app" => "Mir4",
          "dev" => "wemade co.",
          "rev" => "fas fa-star"
        ],  [
          "img" => "minecraft.webp",
          "app" => "mortal kombat",
          "dev" => "warner bross",
          "rev" => "fas fa-star"
        ],  [
          "img" => "pubg.webp",
          "app" => "PUBG",
          "dev" => "pubg corp.",
          "rev" => "fas fa-star"
        ]
      ];
      $count = 1;

      foreach ($ModalGame2 as $ModalGameList2) {
      ?>

        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/games/<?php echo $ModalGameList2['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalGameList2['app'] ?></h1>
            <h2><?php echo $ModalGameList2['dev'] ?></h2>
            <p><i class="<?php echo $ModalGameList2['rev'] ?>"></i><i class="<?php echo $ModalGameList2['rev'] ?>"></i><i class="<?php echo $ModalGameList2['rev'] ?>"></i><i class="<?php echo $ModalGameList2['rev'] ?>"></i><i class="<?php echo $ModalGameList2['rev'] ?>"></i></p>
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

      $ModalGame3 = [
        [
          "img" => "mib.webp",
          "app" => "MIB",
          "dev" => "sony",
          "rev" => "fas fa-star"
        ],  [
          "img" => "max.webp",
          "app" => "max payne",
          "dev" => "rockstar",
          "rev" => "fas fa-star"
        ],  [
          "img" => "minecraft.webp",
          "app" => "mortal kombat",
          "dev" => "warner bross",
          "rev" => "fas fa-star"
        ],  [
          "img" => "pubg.webp",
          "app" => "PUBG",
          "dev" => "pubg corp.",
          "rev" => "fas fa-star"
        ]

      ];
      $count = 1;

      foreach ($ModalGame3 as $ModalGameList3) {
      ?>

        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/games/<?php echo $ModalGameList3['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalGameList3['app'] ?></h1>
            <h2><?php echo $ModalGameList3['dev'] ?></h2>
            <p><i class="<?php echo $ModalGameList3['rev'] ?>"></i><i class="<?php echo $ModalGameList3['rev'] ?>"></i><i class="<?php echo $ModalGameList3['rev'] ?>"></i><i class="<?php echo $ModalGameList3['rev'] ?>"></i><i class="<?php echo $ModalGameList3['rev'] ?>"></i></p>
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

      $ModalGame4 = [
        [
          "img" => "mib.webp",
          "app" => "MIB",
          "dev" => "sony",
          "rev" => "fas fa-star"
        ],  [
          "img" => "max.webp",
          "app" => "max payne",
          "dev" => "rockstar",
          "rev" => "fas fa-star"
        ],  [
          "img" => "minecraft.webp",
          "app" => "mortal kombat",
          "dev" => "warner bross",
          "rev" => "fas fa-star"
        ],  [
          "img" => "pubg.webp",
          "app" => "PUBG",
          "dev" => "pubg corp.",
          "rev" => "fas fa-star"
        ]
      ];
      $count = 1;

      foreach ($ModalGame4 as $ModalGameList4) {
      ?>
        <!--item 1-->
        <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
          <div class="section-1-box-photo">
            <!--conteudo-->
            <img src="img/brands/games/<?php echo $ModalGameList4['img'] ?>" alt="">
            <!--fim conteudo-->
          </div>
          <div class="section-1-box-text-app">
            <h1><?php echo $ModalGameList4['app'] ?></h1>
            <h2><?php echo $ModalGameList4['dev'] ?></h2>
            <p><i class="<?php echo $ModalGameList4['rev'] ?>"></i><i class="<?php echo $ModalGameList4['rev'] ?>"></i><i class="<?php echo $ModalGameList4['rev'] ?>"></i><i class="<?php echo $ModalGameList4['rev'] ?>"></i><i class="<?php echo $ModalGameList4['rev'] ?>"></i></p>
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