<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brok Butcher</title>
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,800i">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <?php wp_head(); ?>

</head>

<body <?php body_class();?>>
    <div data-bs-parallax-bg="true" class="header-container" style="background-position:center;background-size:cover; background-color: green">
       
        <div class="header-dark text-center" style="background-image:url(&quot;none&quot;);background-color:inherit;overflow:auto;">
           
            <div class="container hero text-center"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" style="padding-top:50px;">
            <a class="hidden-xs hidden-sm hero-number" href="#" style="font-family:'Open Sans';padding-top:80px;font-size:26px;font-weight:lighter;">310.710.6387 </a>
            </div>
            
            <nav class="navbar navbar-default navigation-clean-search text-center"
            style="margin:auto;display:inline-block;">
                <div class="container-fluid" style="margin:auto;">
                    <div class="navbar-header text-center">
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                   

                    <div class="collapse navbar-collapse" id="navcol-1" style="padding:0px 100px;">
                        
                    <?php

                    $defaults = array('container' => 'ul', 
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'navbar navbar-default navigation-clean-search text-center'


                     );

                            wp_nav_menu( $defaults );


                    ?>


                        <form class="navbar-form navbar-right search-form" target="_self">
                            <div class="form-group">
                                <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search" style="color:#fff;"></i></label>
                                <input class="form-control search-field" type="search" name="search" placeholder="SEARCH HOMES" id="search-field" style="transition:all 0.4s;">
                            </div>
                            <div id="searchmenu" class="text-left" style="min-height:0px;float:left;min-width:300px;position:absolute;background:rgba(255,255,255,0.8);padding:0px;border-radius:4px;color:#000;z-index:1;max-height:300px;overflow:auto;">
                                <div class="location-container">
                                    <div class="loc-img" style="background-image:url(assets/img/images.jpg);"></div>
                                    <div class="loc-text">
                                        <h4 class="title">Rancho Palos Verdes </h4>
                                        <p class="desc">Rancho Palos Verdes is a city in Los Angeles County, California atop the Palos Verdes Hills and bluffs of the Palos Verdes Peninsula. </p>
                                    </div>
                                </div>
                                <div class="location-container">
                                    <div class="loc-img" style="background-image:url(assets/img/PV15037898_0.jpg);"></div>
                                    <div class="loc-text">
                                        <h4 class="title">Rolling Hills</h4>
                                        <p class="desc">Rancho Palos Verdes is a city in Los Angeles County, California atop the Palos Verdes Hills and bluffs of the Palos Verdes Peninsula. </p>
                                    </div>
                                </div>
                                <div class="location-container">
                                    <div class="loc-img" style="background-image:url(assets/img/images.jpg);"></div>
                                    <div class="loc-text">
                                        <h4 class="title">Manhattan Beach </h4>
                                        <p class="desc">Rancho Palos Verdes is a city in Los Angeles County, California atop the Palos Verdes Hills and bluffs of the Palos Verdes Peninsula. </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
           


            <div class="text-center">
                <div id="plac" class="placard">
                    <h1 style="font-weight:100;">BROK BUTCHER</h1>
                    <div><em style="font-size:18px;">Southbay's Leading Realtor</em></div>
                </div>
            </div>
        </div>
        <div class="covervid-wrapper">
            <video width="560" height="315" autoplay="" preload="metadata" loop="" id="bgvid" class="covervid-video">
                <source src="//luxuryp.s3.amazonaws.com/a4cd182c5961be01eae57064ca1bcc6a.m4v" type="video/mp4">
            </video>
        </div>
    </div>