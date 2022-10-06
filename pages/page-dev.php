<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MegaPlay | Music Dashboard</title>

    <!-- MDB icon -->
    <link rel="icon" href="img/brands/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!--Slick-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css2/mdb.min.css" />
    <!-- PRISM -->
    <link rel="stylesheet" href="dev/css/new-prism.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
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
                <li class="sidenav-item">
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
                </li>
                <!-- fim item 0-->
                <li class="sidenav-item">
                    <!--item 1-->
                    <a class="sidenav-link" href="index.php">
                        <i class="fas fa-home icon-sidenav "></i><span class="item-sidenav">INÍCIO</span></a>
                </li>
                <!--fim item 1 -->
                <li class="sidenav-item">
                    <!--item 2-->
                    <a class="sidenav-link" href="apps.php">
                        <i class="fas fa-mobile-alt icon-sidenav"></i><span class="item-sidenav">APPS</span></a>
                </li>
                <!--fim item 2 -->
                <li class="sidenav-item">
                    <!--item 4-->
                    <a class="sidenav-link" href="games.php">
                        <i class="fas fa-gamepad icon-sidenav"></i><span class="item-sidenav">Jogos</span></a>
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
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="square-photo" height="35" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                    <!--fim avatar-->
                    <!-- Icon -->
                    <li class="nav-item">
                        <a class="nav-link mr-3 mr-lg-0" href="#">
                            <span>Cleiton Rasta</span>
                        </a>
                    </li>
                    <!-- Icon -->
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- ******** fim Navbar top ********* -->
    </header>
    <!-- ------------------- fm Main Navigation--------------------- -->

    <!--Main layout-->
    <section class="body-main">

        <!-- *********slide mini 1**********-->
        <div class="text-single">
            <h1>Whats Inc</h1>
            <!-- Button trigger modal -->

        </div>

        <!--fim title carousel top-->
        <div class="hr"></div>
        <div class="slider-1 container">

            <!--slide php -->
            <?php

            $SlideApps1 = [
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

            foreach ($SlideApps1 as $AppList1) {
            ?>

                <!--item 1-->
                <div class="section-1-box">
                    <div class="section-1-box-photo2" style="background-image: url('img/brands/apps/<?php echo $AppList1['img'] ?>');">
                        <!--conteudo-->
                        <div class="box-photo-content2">
                            <!--btn play/options-->
                            <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalApp"><i class="fas fa-cloud-download-alt"></i></button>
                            <!--fm btn play/options-->
                        </div>
                        <!--fim conteudo-->
                    </div>
                    <div class="section-1-box-text">
                        <h1><?php echo $AppList1['app'] ?></h1>
                        <a href="page-dev.php"><?php echo $AppList1['dev'] ?></a>
                        <p><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i></p>
                    </div>
                </div>
                <!--fim item 1-->

            <?php
                $count++;
            }
            ?>

        </div>
        <!--slide php -->
        <!-- *********fim slide mini 1**********-->

        <!-- *********slide mini 2**********-->
        <!-- **text single modal*** -->
        <div class="text-single">
            <!-- Modal App-->
            <div class="modal fade" id="ModalApp" tabindex="-1" aria-labelledby="ModalAppLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title title-modal" id="ModalAppLabel"></h5>
                            <button type="button" class="btn-closeX" data-mdb-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <?php include_once("modals/modal-app.php") ?>
                        </div>
                        <div class="modal-footer">

                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- fim Modal App-->
        </div>
        <!--fim title carousel top-->
        <div class="hr"></div>

        <div class="slider-1 container">

            <!--slide php -->
            <?php

            $SlideApps1 = [
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

            foreach ($SlideApps1 as $AppList1) {
            ?>

                <!--item 1-->
                <div class="section-1-box">
                    <div class="section-1-box-photo2" style="background-image: url('img/brands/apps/<?php echo $AppList1['img'] ?>');">
                        <!--conteudo-->
                        <div class="box-photo-content2">
                            <!--btn play/options-->
                            <button type="button" id="" class="btn btn-primary btn-lg btn-floating btn-play" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#ModalApp"><i class="fas fa-cloud-download-alt"></i></button>
                            <!--fm btn play/options-->
                        </div>
                        <!--fim conteudo-->
                    </div>
                    <div class="section-1-box-text">
                        <h1><?php echo $AppList1['app'] ?></h1>
                        <a href="page-dev.php"><?php echo $AppList1['dev'] ?></a>
                        <p><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i><i class="<?php echo $AppList1['rev'] ?>"></i></p>
                    </div>
                </div>
                <!--fim item 1-->

            <?php
                $count++;
            }
            ?>

            <!--slide php -->
        </div>
        <!-- **********fim slide mini 1********** -->





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
    <script type="text/javascript" src="js2/mdb2.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>


    <!--Slick JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script type="text/javascript">
        $('.carousel').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    </script>
    <script type="text/javascript">
        $('.carousel-artist').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 1250,
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
                    breakpoint: 500,
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
        $('.carousel-artist2').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 1250,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
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
        $('.slider-1').slick({
            dots: false,
            infinite: false,
            speed: 300,
            autoplay: false,
            slidesToShow: 4,
            slidesToScroll: 2,
            responsive: [{
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
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
        $('.slider-initial').slick({
            dots: false,
            infinite: false,
            fade: true,
            speed: 300,
            cssEase: 'linear',
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
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
        $('.slider-2').slick({
            dots: false,
            infinite: false,
            speed: 300,
            autoplay: false,
            slidesToShow: 5,
            slidesToScroll: 2,
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
        $('.slider-modal').slick({
            dots: false,
            infinite: true,
            speed: 200,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
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