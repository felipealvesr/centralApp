<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="MegaPlay">
  <title>MegaPlay</title>

  <!-- MDB icon -->
  <link rel="icon" href="img/brands/favicon.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!--Slick-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
  <!-- MDB -->
  <link rel="stylesheet" href="css-custom/mdb.min.css" />
  <link rel="stylesheet" href="css-md5/mdb.min.css" />
  <!-- PRISM -->
  <link rel="stylesheet" href="dev/css/new-prism.css" />
  <link rel="stylesheet" href="dev/js/new-prism.js" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css-custom/style.css" />
  <style>
    @media (min-width: 1400px) {

      main,
      header,
      #main-navbar {
        padding-left: 240px;
      }
    }
  </style>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- ****** inicio Sidenav left ******* -->
    <div id="sidenav-left-2" class="sidenav bg-sidenav width-sidenav" role="navigation" data-hidden="false" data-accordion="true">
      <a class="ripple d-flex justify-content-center py-4" href="#!" data-ripple-color="danger">
        <img id="MDB-logo" src="img/brands/logo.png" alt="MDB Logo" draggable="false" style="width: 70%;" />
      </a>

      <ul class="sidenav-menu">
        <!--item 0-->
        <!--<li class="sidenav-item">
          <a class="sidenav-link"><i class="fab fa-buffer icon-sidenav"></i><span class="item-sidenav">Entreterimento</span></a>
          <ul class="sidenav-collapse">
            <li class="sidenav-item">
              <a class="sidenav-link item-sidenav sidenav-module">Apps&Jogos</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link item-sidenav sidenav-module">Filmes</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link item-sidenav sidenav-module">Música</a>
            </li>
          </ul>
        </li>-->
        <!-- fim item 0-->
        <li class="sidenav-item">
          <!--item 1-->
          <a class="sidenav-link link-active" href="index.php">
            <i class="fas fa-home icon-sidenav "></i><span class="item-sidenav">INÍCIO</span></a>
        </li>
        <!--fim item 1 -->
        <li class="sidenav-item">
          <!--item 2-->
          <a class="sidenav-link" href="apps.php">
            <i class="fas fa-mobile-alt icon-sidenav "></i><span class="item-sidenav">APPS</span></a>
        </li>
        <!--fim item 2 -->
        <li class="sidenav-item">
          <!--item 3-->
          <a class="sidenav-link" href="apps.php">
            <i class="fas fa-music icon-sidenav "></i><span class="item-sidenav">MÚSICA</span></a>
        </li>
        <!--fim item 3 -->
        <li class="sidenav-item">
          <!--item 4-->
          <a class="sidenav-link" href="games.php">
            <i class="far fa-play-circle icon-sidenav"></i><span class="item-sidenav">FILMES</span></a>
        </li>
        <!--fim item 4-->

      </ul>
    </div>
    <!-- ******* fim Sidenav left ******* -->

    <!-- ******* inicio Navbar top ***** -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-sidenav fixed-top height-sidenav">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggler -->
        <button data-toggle="sidenav" data-target="#sidenav-left-2" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none" aria-controls="#sidenav-left-2" aria-haspopup="true">
          <i class="fas fa-bars fa-lg"></i>
        </button>

        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto form-source-control">
          <input autocomplete="off" type="search" class="form-control form-source-control rounded src-color" placeholder='Pesquise por música, álbum ou artista' style="min-width: 350px" />
          <button class="input-group-text border-0 btn-submit"><i class="fas fa-search"></i></button>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ml-auto d-flex flex-row">
          <li class="nav-item">
            <a class="nav-link mr-3 mr-lg-0" href="#">
              <span>Entrar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3 mr-lg-0" href="#"  data-mdb-toggle="modal" data-mdb-target="#ModalLogin">
              <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark">
                INSCREVER-SE
              </button>
            </a>
          </li>

          <!--***** Avatar ******-->
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="square-photo" height="35" alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>-->
          <!--*****fim avatar****-->
          <!-- *****Icon***** -->
          <!--li class="nav-item">
            <a class="nav-link mr-3 mr-lg-0" href="#">
              <span>suzana vieira</span>
            </a>
          </li>-->
          <!-- ****Icon**** -->
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- ******** fim Navbar top ********* -->
  </header>
   <!--Modal login -->
   <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="ModalLoginLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title title-modal" id="ModalLoginLabel"></h5>
                    <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                  </div>
                  <div class="modal-body">
                    <?php include_once("login.php") ?>
                  </div>
                  <div class="modal-footer">

                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
              </div>
            </div>
            <!--Fim Modal login-->
  <!-- ------------------- fm Main Navigation--------------------- -->

  <!--Main layout-->
  <!--********************Artist banner************-->
  <div class="slider-banner">
    <?php

    $BGSlide = [
      [
        "img" => "img01.jpg",
        "title" => "Filme 1",
        "text" => "lorem ispum dolor sit amet"
      ],  [
        "img" => "img01.jpg",
        "title" => "filme 2",
        "text" => "lorem ispum dolor sit amet"
      ],  [
        "img" => "img01.jpg",
        "title" => "filme 3",
        "text" => "lorem ispum dolor sit amet"
      ]

    ];
    $count = 1;

    foreach ($BGSlide as $BGList) {
    ?>




      <div class="banner-geral" style="background-image: url('img/<?php echo $BGList['img'] ?>');">
        <div class="artist-banner-gradient">
          <div class="artist-banner-container container-fluid">
            <!----------photo-->
            <div class="artist-banner-photo">

            </div>
            <!---------fim photo-->
            <!---------box-->
            <div class="banner-box container-fluid">
              <h1><?php echo $BGList['title'] ?></h1>
              <br>
              <div class="artist-banner-controls">
                <button type="button" class="btn btn-danger btn-floating btn-artist"><i class="fas fa-play"></i></button>
                <button type="button" class="btn btn-danger btn-floating btn-artist"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <!--------fim box-->
          </div>
        </div>
      </div>

    <?php
      $count++;
    }
    ?>
  </div>


  <!--****************fim Artist banner****************-->
  <section class="body-main">
    <section class="section-1">

      <!-- *********slide mini 3**********-->
      <div class="text-single">
        <h1>Apps recomendados</h1>
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalAppBox">
          VER TODOS
        </button>
         <!-- Modal app-->
         <div class="modal fade" id="ModalAppBox" tabindex="-1" aria-labelledby="ModalAppLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalAppLabel"></h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">
                <?php include_once("modals/modal-appbox.php") ?>
              </div>
            </div>
          </div>
        </div>
        <!-- fim Modal app-->
      </div>


      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-film container-fluid">
        <?php

        $SlideThreeTitle = [
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
          ],  [
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
          ]

        ];
        $count = 1;

        foreach ($SlideThreeTitle as $ThreeTitleList) {
        ?>
          <!--item 1-->
          <a href="" class="section-1-box ripple">
            <div class="section-1-box-photo">
              <!--conteudo-->
              <img src="img/brands/apps/<?php echo $ThreeTitleList['img'] ?>" alt="">
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text-app">
              <h1><?php echo $ThreeTitleList['app'] ?></h1>
              <h2><?php echo $ThreeTitleList['dev'] ?></h2>
              <p><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i></p>
            </div>
          </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 3********** -->
        <!-- *********slide mini 3**********-->
        <div class="text-single">
        <h1>Apps recomendadados</h1>
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalAppBox">
          VER TODOS
        </button>
      </div>


      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-film container-fluid">
        <?php

        $SlideThreeTitle = [
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
          ],  [
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
          ]

        ];
        $count = 1;

        foreach ($SlideThreeTitle as $ThreeTitleList) {
        ?>
          <!--item 1-->
          <a href="" class="section-1-box ripple">
            <div class="section-1-box-photo">
              <!--conteudo-->
              <img src="img/brands/apps/<?php echo $ThreeTitleList['img'] ?>" alt="">
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text-app">
              <h1><?php echo $ThreeTitleList['app'] ?></h1>
              <h2><?php echo $ThreeTitleList['dev'] ?></h2>
              <p><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i><i class="<?php echo $ThreeTitleList['rev'] ?>"></i></p>
            </div>
          </a>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 3********** -->


      <!-- *********slide mini 4**********-->
      <!-- *********slide**********-->
      <div class="text-single">
        <h1>Músicas mais recomendadas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalMusicBox">
          VER TODOS
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="ModalMusicBox" tabindex="-1" aria-labelledby="ModalMusicBoxLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title title-modal" id="ModalMusicBoxLabel">Mais Recomendadas</h5>
              <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body"><?php include_once("modals/modal-musicbox.php"); ?></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-close2" data-mdb-dismiss="modal">
                Reproduzir Todas
              </button>
              <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-1 container-fluid">

        <!--slide php -->
        <?php

        $SlideMusic1 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideMusic1 as $MusicList1) {
        ?>

          <!--item 1-->
          <div class="section-1-box2">
            <div class="section-1-box-photo22" style="background-image: url('img/brands/music/<?php echo $MusicList1['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content22">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <h1><?php echo $MusicList1['music'] ?></h1>
              <p><?php echo $MusicList1['artist'] ?></p>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- ********fim slide****** -->

      <!-- **********fim slide mini 4********** -->

      </div>
      <!--fim container artist 2 -->
      <!-- *********slide mini 5**********-->
      <!-- *********slide**********-->
      <div class="text-single">
        <h1>músicas mais populares</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalMusicBox">
          VER TODOS
        </button>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-2 container-fluid">

        <!--slide php -->
        <?php

        $SlideMusic2 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($SlideMusic2 as $MusicList2) {
        ?>

          <!--item 1-->
          <div class="section-1-box2">
            <div class="section-1-box-photo22" style="background-image: url('img/brands/music/<?php echo $MusicList2['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content22">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <h1><?php echo $MusicList2['music'] ?></h1>
              <p><?php echo $MusicList2['artist'] ?></p>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- ********fim slide****** -->
      <!-- **********fim slide mini 5********** -->




      <!-- *********slide mini 6**********-->
      <!-- *********slide**********-->
      <div class="text-single">
        <h1>músicas selecionadas para você</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalMusicBox">
          VER TODOS
        </button>
      </div>
      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-3 container-fluid">

        <!--slide php -->
        <?php

        $MusicList3 = [
          [
            "img" => "avenged.png",
            "music" => "so far away",
            "artist" => "avenged sevenfold"
          ],  [
            "img" => "nirvana.jpg",
            "music" => "come as you are",
            "artist" => "nirvana"
          ],  [
            "img" => "oasis.png",
            "music" => "wonderwall",
            "artist" => "oasis"
          ],  [
            "img" => "alice.jpg",
            "music" => "man in the box",
            "artist" => "alice in chains"
          ],  [
            "img" => "metallica.jpg",
            "music" => "fade to black",
            "artist" => "metallica"
          ],  [
            "img" => "rock.jpg",
            "music" => "melhores do rock",
            "artist" => ""
          ],  [
            "img" => "red.jpg",
            "music" => "californication",
            "artist" => "red hot chili pepers"
          ]

        ];
        $count = 1;

        foreach ($MusicList3 as $MusicList3) {
        ?>

          <!--item 1-->
          <div class="section-1-box2">
            <div class="section-1-box-photo22" style="background-image: url('img/brands/music/<?php echo $MusicList3['img'] ?>');">
              <!--conteudo-->
              <div class="box-photo-content22">
                <!--btn play/options-->
                <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play show-or-hide"><i class="fas fa-play"></i></button>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle btn-options" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item btn-options-item" type="button">Action</button></li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Another action</button>
                    </li>
                    <li>
                      <button class="dropdown-item btn-options-item" type="button">Something else here</button>
                    </li>
                  </ul>
                </div>
                <!--fm btn play/options-->
              </div>
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text">
              <h1><?php echo $MusicList3['music'] ?></h1>
              <p><?php echo $MusicList3['artist'] ?></p>
            </div>
          </div>
          <!--fim item 1-->

        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 6********** -->


      <!-- *********slide mini 1**********-->
      <div class="text-single2">
        <h1>filmes mais recomendadosss</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm1 = [
          [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ],  [
            "img" => "lobo.webp"
          ],  [
            "img" => "resgate.webp"
          ],  [
            "img" => "tintin.webp"
          ],  [
            "img" => "venom.webp"
          ], [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm1 as $FilmList1) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light" style="padding: 0;">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList1['img'] ?>" alt="">
            </div>
          </a>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 1********** -->

      <!-- *********slide mini 1**********-->
      <div class="text-single2">
        <h1>filmes mais recomendados</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm1 = [
          [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ],  [
            "img" => "lobo.webp"
          ],  [
            "img" => "resgate.webp"
          ],  [
            "img" => "tintin.webp"
          ],  [
            "img" => "venom.webp"
          ], [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm1 as $FilmList1) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light" style="padding: 0;">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList1['img'] ?>" alt="">
            </div>
          </a>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 1********** -->


      <!-- *********slide mini 1**********-->
      <div class="text-single2">
        <h1>filmes mais recomendados</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm1 = [
          [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ],  [
            "img" => "lobo.webp"
          ],  [
            "img" => "resgate.webp"
          ],  [
            "img" => "tintin.webp"
          ],  [
            "img" => "venom.webp"
          ], [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm1 as $FilmList1) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light" style="padding: 0;">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList1['img'] ?>" alt="">
            </div>
          </a>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 1********** -->

      <!-- *********slide mini 1**********-->
      <div class="text-single2">
        <h1>filmes mais recomendados</h1>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>
      <!--slide php -->
      <div class="slider-2 container-fluid">
        <?php

        $SlideFilm1 = [
          [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ],  [
            "img" => "lobo.webp"
          ],  [
            "img" => "resgate.webp"
          ],  [
            "img" => "tintin.webp"
          ],  [
            "img" => "venom.webp"
          ], [
            "img" => "ate.webp"
          ],  [
            "img" => "creed.webp"
          ],  [
            "img" => "john.webp"
          ]

        ];
        $count = 1;

        foreach ($SlideFilm1 as $FilmList1) {
        ?>
          <!--item 1-->
          <a href="pages/film.php" class="section-1-box ripple" data-mdb-ripple-color="light" style="padding: 0;">
            <div class="section-1-box-film">
              <img src="img/brands/films/<?php echo $FilmList1['img'] ?>" alt="">
            </div>
          </a>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

      </div>
      <!--slide php -->
      <!-- **********fim slide mini 1********** -->



      <!-- *********slide mini 5**********-->
      <div class="text-single">
        <h1>Jogos populares</h1>
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalGamesBox">
          VER TODOS
        </button>
        <!-- Modal Games-->
        <div class="modal fade" id="ModalGamesBox" tabindex="-1" aria-labelledby="ModalGamesLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title title-modal" id="ModalGamesLabel"></h5>
                <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">
                <?php include_once("modals/modal-gamebox.php") ?>
              </div>
            </div>
          </div>
        </div>
        <!-- fim Modal Games-->
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-film container-fluid ">

        <!--slide php -->
        <?php

        $SlideGames1 = [
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
          ],  [
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
            "img" => "mortalkombat.webp",
            "app" => "mortal kombat",
            "dev" => "warner bross",
            "rev" => "fas fa-star"
          ]

        ];
        $count = 1;

        foreach ($SlideGames1 as $GamesList1) {
        ?>

          <!--item 1-->
          <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-photo">
              <!--conteudo-->
              <img src="img/brands/games/<?php echo $GamesList1['img'] ?>" alt="">
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text-app">
              <h1><?php echo $GamesList1['app'] ?></h1>
              <h2><?php echo $GamesList1['dev'] ?></h2>
              <p><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i></p>
            </div>
          </a>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 5********** -->
      <!-- *********slide mini 5**********-->
      <div class="text-single">
        <h1>Jogos em destaque</h1>
        <button type="button" class="btn btn-outline-danger btn-rounded view-all" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalGamesBox">
          VER TODOS
        </button>
      </div>

      <!--fim title carousel top-->
      <div class="hr"></div>

      <div class="slider-film container-fluid ">

        <!--slide php -->
        <?php

        $SlideGames1 = [
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
          ],  [
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
            "img" => "mortalkombat.webp",
            "app" => "mortal kombat",
            "dev" => "warner bross",
            "rev" => "fas fa-star"
          ]

        ];
        $count = 1;

        foreach ($SlideGames1 as $GamesList1) {
        ?>

          <!--item 1-->
          <a href="pages/app.php" class="section-1-box ripple" data-mdb-ripple-color="light">
            <div class="section-1-box-photo">
              <!--conteudo-->
              <img src="img/brands/games/<?php echo $GamesList1['img'] ?>" alt="">
              <!--fim conteudo-->
            </div>
            <div class="section-1-box-text-app">
              <h1><?php echo $GamesList1['app'] ?></h1>
              <h2><?php echo $GamesList1['dev'] ?></h2>
              <p><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i><i class="<?php echo $GamesList1['rev'] ?>"></i></p>
            </div>
          </a>
          <!--fim item 1-->
        <?php
          $count++;
        }
        ?>

        <!--slide php -->
      </div>
      <!-- **********fim slide mini 5********** -->

    </section>
    <!--Footer-->
    <div class="container-fluid player-z" style="display: none;">

      <div class="media-player2">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="player-music">
          <div class="player-music-artist">
            <div class="player-music-artist-photo"></div>
            <div class="player-music-artist-text">
              <h1>musica</h1>
              <p>artista<span>album</span></p>
            </div>
          </div>
          <div class="player-music-controls">
            <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-sync-alt"></i></button>
            <button class="btn btn-primary btn-control btn-mobile2"><i class="fas fa-step-backward"></i></button>
            <button type="button" class="btn btn-primary btn-lg btn-floating btn-player btn-mobile4" tabindex="0"><i class="fas fa-cloud-download-alt"></i></button>
            <button class="btn btn-primary btn-control btn-mobile4"><i class="fas fa-step-forward"></i></button>
            <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-random"></i></button>

          </div>
          <div class="player-music-options">
            <p class="btn-mobile1">4:20</p>
            <button class="btn btn-primary btn-control btn-mobile1"><i class="fas fa-bars"></i></button>
            <!--MOBILE -->
            <button class="btn btn-primary btn-control btn-mobile3"><i class="fas fa-bars"></i></button>
            <button type="button" class="btn btn-primary btn-lg btn-floating btn-player btn-mobile5" tabindex="0"><i class="fas fa-cloud-download-alt"></i></button>
            <button class="btn btn-primary btn-control btn-mobile5"><i class="fas fa-step-forward"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->
  </section>
  <!--Main layout-->




  <!--<script src="js/player.js"></script>-->
  <!-- ---------------------SCRIPTS----------------------- -->
  <!-- PRISM -->
  <script type="text/javascript" src="dev/js/new-prism.js"></script>
  <!-- MDB SNIPPET -->
  <script type="text/javascript" src="dev/js/dist/mdbsnippet.min.js"></script>
  <!-- jsMDB -->
  <script type="text/javascript" src="js/mdb2.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>


  <!--Slick JS-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
  <script type="text/javascript">
    $('.slider-1').slick({
      dots: false,
      infinite: true,
      speed: 300,
      autoplay: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },

        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
 
  <script type="text/javascript">
    $('.slider-2').slick({
      dots: false,
      infinite: true,
      speed: 500,
      autoplay: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },

        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  <script type="text/javascript">
    $('.slider-3').slick({
      dots: false,
      infinite: true,
      speed: 300,
      autoplay: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },

        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  
  <script type="text/javascript">
    $('.slider-banner').slick({
      dots: false,
      infinite: true,
      arrows: false,
      fade: true,
      speed: 200,
      cssEase: 'linear',
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>

  <script type="text/javascript">
    $('.slider-film').slick({
      dots: false,
      infinite: true,
      speed: 300,
      autoplay: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1700,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,

          }
        },
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,

          }
        },

        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,

          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>


  <!-- Custom scripts -->
  <script type="text/javascript">
    const sidenavleft = document.getElementById("sidenav-left-2");
    const instance = mdb.Sidenav.getInstance(sidenavleft);

    let innerWidth = null;

    const setMode = (e) => {
      // Check necessary for Android devices
      if (window.innerWidth === innerWidth) {
        return;
      }

      innerWidth = window.innerWidth;

      if (window.innerWidth < 1400) {
        instance.changeMode("over");
        instance.hide();
      } else {
        instance.changeMode("side");
        instance.show();
      }
    };

    setMode();

    // Event listeners
    window.addEventListener("resize", setMode);
  </script>
</body>

</html>