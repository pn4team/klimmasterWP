<?php get_header(); ?>
    

    <!--Slider-->
    <div id="slides">
        <ul class="slides-container ">    
            <?php $postcounter = 0;
            $args = array(
                'post_type' => 'site_blocks',
                'content_location' => 'screen_1'
            );
            query_posts($args);
            if ( have_posts() ) : query_posts($args);
            while (have_posts()) : the_post(); $postcounter++; ?>
            
            <li>
                <img src="<?php echo get_field('bg')['url']; ?>" alt="">
                <div class="container text-center">
                    <h2 class="slide-one wow fadeInDown"><? echo get_field( "main_text" ); ?></h2>
                    <p class="slide-one wow fadeInUp"><? echo get_field( "additional_text" ); ?> <span class="red-company"><span class="blue-company"><? echo get_field( "blue" ); ?></span><? echo get_field( "red" ); ?></span></p>
                </div>
            </li>

            <? endwhile; endif; wp_reset_query(); ?>
            
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
                    <?php
                        $args = array(
                            'post_type' => 'site_blocks',
                            'name' => 'our_serv'
                        );
                        query_posts($args); the_post()  ?>
                        <h1 class="wow fadeInUp"><? echo get_field( "main_text" ); ?> 
                        </h1>
                    <? wp_reset_query(); ?>
                </div>
                <!--Content-->
                <div class="col-lg-12 home-content text-center">
                    <div class="row">
                        
                        <?php $postcounter = 0;
                        $args = array(
                            'post_type' => 'site_blocks',
                            'content_location' => 'services_list'
                        );
                        query_posts($args);
                        if ( have_posts() ) : query_posts($args);
                        while (have_posts()) : the_post(); $postcounter++; ?>

                        <div class="col-lg-3 wow fadeInLeft">
                            <h3><? echo get_field( "service_name" ); ?></h3>
                            <p class="detail"><? echo get_field( "services_description" ); ?></p>
                        </div>

                        <? endwhile; endif; wp_reset_query(); ?>
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
                            <ul><?php $postcounter = 0;
                                $args = array(
                                    'post_type' => 'site_blocks',
                                    'content_location' => 'air_conditioners'
                                );
                                query_posts($args);
                                if ( have_posts() ) : query_posts($args);
                                while (have_posts()) : the_post(); $postcounter++; ?>

                                <li class="boxes wow fadeInLeft">
                                    <img src="<?php echo get_field('cond_photo')['url']; ?>" alt="" width="100">
                                    <div class="box">
                                        <h3><?php echo get_field('cond_name')?></h3>
                                    </div>
                                </li>

                                <? endwhile; endif; wp_reset_query(); ?>
                                
                            </ul>
                        </div>

                        <!--Video-->
                        <div class="col-sm-6 col-xs-12">
                            
                            <?php $postcounter = 0;
                            $args = array(
                                    'post_type' => 'site_blocks',
                                    'content_location' => 'marketing'
                                );
                            query_posts($args);
                            if ( have_posts() ) : query_posts($args); the_post();?>
                                                           
                            <div class="video wow fadeInRight">
                                <iframe width="560" height="280" src="<?php echo get_field('video_link')?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            
                            <div class="boxes video wow fadeInRight col-xs-12 row ">
                                <div class="video-picture"><img src="<?php echo get_field('text_img')[url] ?>" alt=""></div>
                                <div class="video-box">
                                   <h3><a class="popup-youtube buyButton red" href=""><?php echo get_field('visible_text')?></a></h3>
                                    <p><?php echo get_field('text')?></p>
                                </div>
                            </div>

                            <?endif; wp_reset_query(); ?>

                           
                            
                            
                        </div>
                    </div>
                </div><!--End Contents-->
            </div><!--End Row-->
        </div><!--End Container-->
    </div>

    <!--End Content-->
<a href="archivea.php">asdasd</a>
<?$term_slug = 'multisplit'; //передавать нужно альтернативное имя (slug)
$term_link = get_term_link($term_slug, 'cond_type');
echo "<a href='". $term_link ."'>ссылка на раздел ". $term_slug ."</a>";?>
<?php get_footer(); ?>
222