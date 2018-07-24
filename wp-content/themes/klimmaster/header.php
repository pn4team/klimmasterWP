<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title><?php echo get_bloginfo(name) ?></title>
    <meta charset="utf-8">
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body>
<!-- Preloading -->
    <div id="preload">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!--End Preloading-->
    <!--Menu-->
    <nav class="navbar navbar-fixed-top navbar-custom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                <span class="sr-only">Открыть меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>               
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="nav">
                <ul class="nav navbar-nav uppercase">
                    <li class="links"><a class="scroll" href="<?php echo get_home_url(); ?>">Головна</a></li>
                    <li class="links dropdown">
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="<?php echo get_home_url(); ?>/cond-split/">Спліт системи</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/cond-cassette/">Касетні</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/cond-multisplit/">Мультиспліт системи</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/cond-mobile/">Мобільні</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/cond-false-ceiling/">Напольно-стелові</a></li>
                        </ul>
                        <a href="<?php echo get_home_url(); ?>/cond/" data-toggle="dropdown" class="dropdown-toggle">Кондиціонери</a>
                    </li>
                    <li class="links dropdown">
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="<?php echo get_home_url(); ?>/catalog-split/">Спліт системи</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/catalog-cassette/">Касетні</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/catalog-multisplit/">Мультиспліт системи</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/catalog-mobile/">Мобільні</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/catalog-false-ceiling/">Напольно-стелові</a></li>
                        </ul>
                        <a href="<?php echo get_home_url(); ?>/catalog/" data-toggle="dropdown" class="dropdown-toggle">Каталог</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--End Menu-->
    <? if( is_home() ){ ?>
       
    <? } else { ?>
    <style>
        .navbar-custom {
            background-color: #1D5499;
        }
    </style>    
    <? } ?>
    