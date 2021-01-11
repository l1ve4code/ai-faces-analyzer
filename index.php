<?php

    session_start();

    require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
    require_once $_SERVER['DOCUMENT_ROOT']."/php/connection/connect.php";

    # imports the Google Cloud client library
    use Google\Cloud\Vision\VisionClient;

    $vision = new VisionClient(['keyFile' => json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT']."/key.json"), true)]);

?>

<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <title>Face Searcher</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:800%7CPoppins:300i,300,400,500,600,700,400i,500%7CPlayfair+Display:400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <link rel="stylesheet" href="assets/css/nile_icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/main.css">
    <link rel="stylesheet" href="assets/css/nile-slider.css">
    <link rel="stylesheet" href="assets/css/elegant_icon.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/css/settings.css">

</head>

<body>
    <!--  HEADER  -->
    <header>
        <?php
            if(!isset($_SESSION["user"])){
                echo '<div class="up-header background-main-color light d-none d-lg-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="up-menu">
                                        <li><a href="login">Авторизация</a></li>
                                        <li><a href="#">Регистрация</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
        ?>

        <div class="header-output">
            <div class="container header-in">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <a id="logo" href="index.html" class="d-inline-block flex-center"><img src="assets/icons/logoGreenColor.png" alt=""></a>
                            <a class="mobile-toggle padding-15px background-main-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="col-xl-7 col-lg-9 col-md-12 position-inherit">

                            <ul id="menu-main" class="nav-menu flex-center float-xl-right text-lg-center link-padding-tb-18px dropdown-light">
                                <li><a href="index.html">Главная страница</a></li>
                                <li><a href="#">Контакты</a></li>
                                <li><a href="#">О нас</a></li>
                            </ul>

                        </div>
                        <?php
                            if(isset($_SESSION["user"])){
                                echo '<div class="col-lg-2 col-md-12  d-none d-lg-block text-right">
                                        <div class="d-none padding-top-4px flex-center d-xl-block search-link pull-right sidebar-var-link">
                                            <a class="margin-right-0px text-dark opacity-hover-8" href="/php/auth/logout.php">
                                                <img src="assets/icons/exit-to-app-button_icon-icons.com_72765.png" width = "20" alt="">
                                            </a>
                                        </div>
                                        <div class="d-none padding-top-4px flex-center d-xl-block search-link pull-right sidebar-var-link">
                                            <a class="margin-right-0px text-dark opacity-hover-8" href="#">
                                                <img src="assets/icons/user_84308.png" width = "20" alt="">
                                            </a>
                                        </div>
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- // HEADER  -->



    <div id="rev_slider_30_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="fizo-slider-7" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_30_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-36" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/state-street-artificial-intelligence.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-36-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','-1']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-87','-87','-49']" data-fontsize="['100','100','100','44']" data-lineheight="['95','95','95','50']" data-letterspacing="['-2','-2','-2','3']" data-width="['615','615','615','357']" data-height="['304','304','304','none']" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":20,"speed":1160,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 615px; max-width: 615px; max-width: 304px; max-width: 304px; white-space: nowrap; font-size: 100px; line-height: 95px; font-weight: 700; color: #ffffff; letter-spacing: -2px;font-family: 'Russo One', sans-serif;text-transform:capitalize;">Анализ<br> изображений <br> ИИ</div>

                    <!-- LAYER NR. 2 -->
                    <a href = "form" class="tp-caption rev-btn " id="slide-36-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['615','488','488','423']" data-width="198" data-height="59" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":700,"speed":930,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[40,40,40,40]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[40,40,40,40]" style="z-index: 7; width: 300px; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: ;font-family:Poppins;background-color:rgb(106,75,156);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;font-family: 'Comfortaa', cursive;cursor:pointer;">Анализ фото</a>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->


    <section class="padding-top-120px padding-bottom-90px">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="fizo-icon-box layout-5">
                        <div class="icon"><img src="assets/icons/markting-1.svg" alt=""></div>
                        <h3><a href="#" style = "font-family: 'Comfortaa', cursive;">Нейронная сеть</a></h3>
                        <div class="dis" style = "font-family: 'PT Sans', sans-serif;">Ежедневно мы "тренируем" нашу нейронную сеть, чтобы добиться высоких результатов</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="fizo-icon-box layout-5">
                        <div class="icon"><img src="assets/icons/markting-2.svg" alt=""></div>
                        <h3><a href="#" style = "font-family: 'Comfortaa', cursive;">Защита</a></h3>
                        <div class="dis" style = "font-family: 'PT Sans', sans-serif;">Любая информация находящаяся на данном интернет-ресурсе находится под защитой</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="fizo-icon-box layout-5">
                        <div class="icon"><img src="assets/icons/markting-3.svg" alt=""></div>
                        <h3><a href="#" style = "font-family: 'Comfortaa', cursive;">Поддержка 24/7</a></h3>
                        <div class="dis" style = "font-family: 'PT Sans', sans-serif;">Служба поддержки нашего сайта всегда онлайн, вы можете задать любой вопрос.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-tb-120px section-ba-1">
        <?php

            $query = pg_query($connect, "SELECT * FROM grinatom.images");
            
            if(pg_num_rows($query) > 0){
                $fetch = pg_fetch_all($query);
                for($i = (count($fetch) - 1); $i > -1; $i--){
                    if($fetch[$i]["user_id"] == $_SESSION["user"]["id"]){
                        $familyPhotoResource = fopen($_SERVER['DOCUMENT_ROOT']."/php/files/".$fetch[$i]["img_src"].".jpg", "r");

                        $image = $vision->image($familyPhotoResource, ['FACE_DETECTION', "WEB_DETECTION"]);
                        $result = $vision->annotate($image);
    
                        $faces = $result->faces();
    
                        echo '<div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <div class="fizo-image layout-1">
                                    <img src="/php/functions/image.php/?token='.$fetch[$i]["img_src"].'" alt="">
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6 align-self-center">
                                <div class="about-slider owl-carousel owl-theme">';
                                    if ($faces){
                                        foreach ($faces as $key => $face){ 
                                    echo '<div class="about-item" style = "margin-bottom: 50px !important;margin-top: 50px !important;">
                                        <div class="margin-bottom-30px">
                                            <h2 class="title-large margin-bottom-0px">'.$fetch[$i]["data"].'</h2>
                                        </div>
                                        <div class="text-medium margin-bottom-30px">';
                                                $faceColorR = random_int(0, 200);
                                                $faceColorG = random_int(0, 200);
                                                $faceColorB = random_int(0, 200);
                                                $color = [$faceColorR, $faceColorG, $faceColorB];
                                                $_SESSION["faces"][$fetch[$i]["img_src"]][$key] = json_encode($face->info()["landmarks"]);
                                                $_SESSION["faces"]["colors"][$key] = $color;
                                                echo '<p style = "font-family: \'Russo One\', sans-serif;">Людей на фото: '.count($faces).'</p>';
                                                echo '<ul>
                                                        <li style = "font-family: \'Russo One\', sans-serif;"><strong>В каске: </strong>'.$face->info()["headwearLikelihood"].'</li>
                                                    </ul>';
                                                $people++;
                                        echo '</div>
                                    </div>';
                                        }
                                    }
                                echo '</div>
                            </div>
                        </div>
                    </div>';
                    }
                }  
            }
        ?>
    </section>

    <a class="go-top box-shadow background-second-color"><span class="arrow_carrot-up"></span></a>

    <footer class="layout-4">
        <div class="container">
            <div class="logo">
                <a class="#"><img src="assets/icons/logoGreenColor.png" alt=""></a>
            </div>
            <ul class="footer-list" style = "font-family: 'Jura', sans-serif;">
                <li><a href="#">Главная страница</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">О нас</a></li>
            </ul>
            <div class="copyright-text">
                © Проектная деятельность. Московский Политех.
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/nile-slider.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/masonry.min.js"></script>
    <script src="assets/js/nile-masonry.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
