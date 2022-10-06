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
  
    <link rel="stylesheet" href="css-custom/mdb.min.css" />
    <link rel="stylesheet" href="css-md5/mdb.min.css" />
    <!-- PRISM -->
    <link rel="stylesheet" href="dev/css/new-prism.css" />
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
    <header>
         <!-- ****** inicio Sidenav left ******* -->
         <div id="sidenav-1" class="sidenav bg-sidenav width-sidenav" role="navigation" data-hidden="false" data-accordion="true">
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
                     <a class="sidenav-link ripple" href="index.php">
                         <i class="fas fa-home icon-sidenav "></i><span class="item-sidenav">INÍCIO</span></a>
                 </li>
                 <!--fim item 1 -->
                 <li class="sidenav-item">
                     <!--item 2-->
                     <a class="sidenav-link ripple" href="music.php">
                         <i class="fas fa-music  icon-sidenav"></i><span class="item-sidenav">MÚSICAS</span></a>
                 </li>
                 <!--fim item 2 -->
                 <li class="sidenav-item">
                     <!--item 4-->
                     <a class="sidenav-link ripple" href="artists.php">
                         <i class="fas fa-user  icon-sidenav"></i><span class="item-sidenav">ARTISTAS</span></a>
                 </li>
                 <!--fim item 4-->
                 <li class="sidenav-item">
                     <!--item 5-->
                     <a class="sidenav-link ripple" href="playlists.php">
                         <!--pr-3-->
                         <i class="fas fa-headphones  icon-sidenav"></i><span class="item-sidenav">PLAYLISTS</span>
                     </a>
                 </li>
                 <!--fim item 5-->

             </ul>
         </div>
         <!-- ******* fim Sidenav left ******* -->

         <!-- ******* inicio Navbar top ***** -->
         <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-sidenav fixed-top height-sidenav">
             <!-- Container wrapper -->
             <div class="container-fluid">
                 <!-- Toggler -->
                 <button data-toggle="sidenav" data-target="#sidenav-1" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none" aria-controls="#sidenav-1" aria-haspopup="true">
                     <i class="fas fa-bars fa-lg"></i>
                 </button>

                 <!-- Search form -->
                 <form class="d-none d-md-flex input-group w-auto my-auto form-source-control">
                     <input autocomplete="off" type="search" class="form-control form-source-control rounded " placeholder='Pesquise por música, álbum ou artista' style="min-width: 350px" />
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
                             <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                             <li><a class="dropdown-item" href="#">Settings</a></li>
                             <li><a class="dropdown-item" href="#">Logout</a></li>
                         </ul>
                     </li>
                     <!--fim avatar-->
                     <!-- Icon -->
                     <li class="nav-item">
                         <a class="nav-link mr-3 mr-lg-0" href="#">
                             <span>Suzana Vieira</span>
                         </a>
                     </li>
                     <!-- Icon -->
                 </ul>
             </div>
             <!-- Container wrapper -->
         </nav>
         <!-- ******** fim Navbar top ********* -->
     
    </header>

    <section class="container" style="margin-top: 100px">
        <div class="container" style="text-align: center; margin-bottom: 45px;">
            <img src="img/brands/logo.png" alt="" style="width: 30%; margin:0 auto; "/>
        </div>
        
        <div class="container-sm">
             <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Inscreva-se</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form>
                    <div class="text-center mb-3">
                        <p>Entrar Com:</p>
                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center">ou:</p>

                    <!-- Email input -->
                    <p>E-mail ou usuário:</p>
                    <div class="form-outline mb-4">
                        <input type="email" id="loginName" class="form-control" />
                    </div>
                    <p>Senha:</p>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control" />
                      
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                <label class="form-check-label" for="loginCheck">Mantenha-me Conectado</label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a class="a" href="#!">Esqueceu a senha?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary-login btn-block mb-4">Entrar</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Não é membro? <a class="a" href="#!">Registrar-se</a></p>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form>
                    <div class="text-center mb-3">
                        <p>Inscreva-se com:</p>
                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-primary-login btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center">ou:</p>

                    <!-- Name input -->
                    <p>Nome:</p>
                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" class="form-control" />
                       <!-- <label class="form-label" for="registerName">Name</label>-->
                    </div>
                    
                    <!-- Username input -->
                    <p>Username:</p>
                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" class="form-control" />
                    </div>

                    <!-- Email input -->
                    <p>E-mail:</p>
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <p>Senha:</p>
                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control" />
                    </div>

                    <!-- Repeat Password input -->
                    <p>Repetir senha:</p>
                    <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                        Eu li e concordo com os termos
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary-login btn-block mb-3">Registrar</button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
        </div>
       


    </section>


    <!--Footer-->
    <footer></footer>
    <!--Footer-->




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
        $('.carousel').slick({
            dots: false,
            infinite: false,
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
            slidesToShow: 4,
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
                    breakpoint: 600,
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
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 2,
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
                    breakpoint: 600,
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
        $('.carousel-artists').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 6,
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
                    breakpoint: 600,
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
        $('.slider-3').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
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
                    breakpoint: 600,
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
         const sidenav = document.getElementById("sidenav-1");
         const instance = mdb.Sidenav.getInstance(sidenav);

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