<?php get_header(); ?>
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
                    <li class="links"><a class="scroll" href="index.html">Головна</a></li>
                    <li class="links"><a class="scroll" href="projects.html">Проекти</a></li>
                    <li class="links dropdown">
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="cond1.html">Спліт системи</a></li>
                            <li><a href="cond2.html">Касетні</a></li>
                        </ul>
                        <a href="cond1.html" data-toggle="dropdown" class="dropdown-toggle">Кондиціонери</a>
                    </li>
                    <li class="links dropdown">
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="catalog1.html">Спліт системи</a></li>
                            <li><a href="catalog2.html">Касетні</a></li>
                        </ul>
                        <a href="cond1.html" data-toggle="dropdown" class="dropdown-toggle">Каталог</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--End Menu-->

    <!--Slider-->
    <div id="slides">
        <ul class="slides-container ">    

            <!--Slider 1-->
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
                <div class="container text-center">
                    <h2 class="slide-one wow fadeInDown">Ласкаво просимо</h2>
                    <p class="slide-one wow fadeInUp">Вас вітає фірма <span class="red-company"><span class="blue-company">Клім</span>Майстер</span></p>
                </div>
            </li>
            <!--End Slider 1-->
            
            <!--Slider 1-->
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="">
                <div class="container text-center">
                    <h2 class="slide-two wow fadeInDown">Ласкаво просимо</h2>
                    <p class="slide-two wow fadeInUp">Вас вітає фірма <span class="red-company"><span class="blue-company">Клім</span>Майстер</span></p>
                </div>
            </li>
            <!--End Slider 1-->
            
            <!--Slider 1-->
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="">
                <div class="container text-center">
                    <h2 class="slide-three wow fadeInDown">Ласкаво просимо</h2>
                    <p class="slide-three wow fadeInUp">Вас вітає фірма <span class="red-company"><span class="blue-company">Клім</span>Майстер</span></p>
                </div>
            </li>
            <!--End Slider 1-->
        </ul>

        <!--End Navgation-->
        <nav class="slides-navigation">
            <div class="container">
                <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
            </div>
        </nav>
    </div>
    <!--End Slider-->
   
    <!--Home-->
    <div id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!--Header-->
                    <h1 class="wow fadeInUp">Наші послуги</h1>
                </div>
                <!--Content-->
                <div class="col-lg-12 home-content text-center">
                    <div class="row">
                        <div class="col-lg-3 wow fadeInLeft">
                            <h3>Монтаж/демонтаж кондиціонерів</h3>
                            <p class="detail">Штробування стіни під магістраль</p>
                        </div>
                        <div class="col-lg-3 wow fadeInRight">
                            <h3>Діагностика та ремонт кондиціонерів</h3>
                            <p class="detail">Ремонт систем кондиціонування</p>
                        </div>
                        <div class="col-lg-3 wow fadeInRight">
                            <h3>Сервісне обслуговування</h3>
                            <p class="detail">Сезонна чистка, дозаправка фреону</p>
                        </div>
                        <div class="col-lg-3 wow fadeInRight">
                            <h3>Ремонт холодильників</h3>
                            <p class="detail">Ремонт холодильників та хододильних камер</p>
                        </div>
                        
                    </div>
                </div><!--End Content-->
            </div><!--End Row-->
        </div><!--Container-->        
    </div>
    <!--End Home-->

    <!--Content-->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 contents">
                    <div class="row">
                        <div class="col-sm-6 box">
                            <ul>
                                <li class="boxes wow fadeInLeft">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cond5.jpg" alt="" width="100">
                                    <div class="box">
                                        <h3>Спліт Системи</h3>
                                    </div>
                                </li>
                                <li class="boxes wow fadeInLeft">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cond1.jpg" alt="" width="100">
                                    <div class="box">
                                        <h3>Мульті спліт системи</h3>
                                    </div>
                                </li>
                                <li class="boxes wow fadeInLeft">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cond2.jpg" alt="" width="100">
                                    <div class="box">
                                        <h3>Касетні</h3>
                                    </div>
                                </li>
                                 <li class="boxes wow fadeInLeft">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cond3.jpg" alt="" width="100">
                                    <div class="box">
                                        <h3>Мобільні</h3>
                                    </div>
                                </li>
                                <li class="boxes wow fadeInLeft">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cond4.jpg" alt="" width="100">
                                    <div class="box">
                                        <h3>Напольно-стелові</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--Video-->
                        <div class="col-sm-6 col-xs-12">
                            <!--Video Content-->
                            <div class="video wow fadeInRight">
                                <iframe width="560" height="280" src="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/embed/UdbCF7uhxmM?start=153" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="boxes video wow fadeInRight col-xs-12 row ">
                                <div class="video-picture"><img src="<?php echo get_template_directory_uri(); ?>/img/video1.jpg" alt=""></div>
                                <div class="video-box">
                                   <h3><a class="popup-youtube buyButton red" href="">Замовляючи у нас</a></h3>
                                    <p>доставка безкоштовна</p>
                                </div>
                            </div>
                            <!--End Video Content-->
                        </div>
                    </div>
                </div><!--End Contents-->
            </div><!--End Row-->
        </div><!--End Container-->
    </div>
    <!--End Content-->
<?php get_footer(); ?>