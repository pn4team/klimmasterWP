
    <!--Contact-->
    <div id="contact">
        <div class="container">
            <div class="row"> 
                <?php
                $args = array(
                    'post_type' => 'footer_form',
                    'name' => 'form_head'
                );
                query_posts($args); the_post(); ?>
                <div class="col-lg-12 row wow fadeInDown">
                    <!--Header-->
                    <h2><? echo get_field('form_head_main_text'); ?></h2>
                    <p><? echo get_field('form_head_text'); ?></p>
                    <div class="line"></div>
                </div>
                <? wp_reset_query(); ?>
            </div>   
        </div>        <!--Contact Detail-->
        <div class="container">
            <div class="row">
                <div class="contact-detail">    
                    <div class="row col-lg-3">
                        <!--Address-->
                        <div class="address wow fadeInLeft">                    
                            <?php $postcounter = 0;
                            $args = array(
                                'post_type' => 'footer_form',
                                'content_location_form' => 'form_side_mail'
                            );
                            query_posts($args);
                            if ( have_posts() ) : query_posts($args); echo "<h3 class=\"title\">E-mail</h3>";
                            while (have_posts()) : the_post(); $postcounter++; ?> 
                            <p><? echo get_field('form_side_mail'); ?></p> 
                            <? endwhile; endif; wp_reset_query(); ?>  
                        </div>
                        <!--Telephone-->
                        <div class="telephone wow fadeInLeft">                 
                            <?php $postcounter = 0;
                            $args = array(
                                'post_type' => 'footer_form',
                                'content_location_form' => 'form_side_num'
                            );
                            query_posts($args);
                            if ( have_posts() ) : query_posts($args); echo "<h3 class=\"title\">Телефон</h3>";
                            while (have_posts()) : the_post(); $postcounter++; ?> 
                            <p class="fax">Тел: <? echo get_field('form_side_num'); ?></p> 
                            <? endwhile; endif; wp_reset_query(); ?> 
                        </div>
                    </div>

                    <!--Form-->
                    <div class="row col-lg-9 wow fadeInRight">
                        <?php
                        $args = array(
                            'post_type' => 'footer_form',
                            'name' => 'form_head_min'
                        );
                        query_posts($args); the_post(); ?>
                        <div class="col-lg-12 row wow fadeInDown">
                            <!--Header-->
                            <h3><? echo get_field('form_head_min_main_text'); ?></h3>
                            <p><? echo get_field('form_head_min_text'); ?></p>
                            <div class="line"></div>
                        </div>
                        <? wp_reset_query(); ?> 
                        <!--Name-->
                        <?php echo do_shortcode( '[contact-form-7 id="107" title="Contact form 1"]' ); ?>
                        
                    </div><!--End Form-->
      
                </div><!--End Contact Detail-->
            </div><!--End Row-->
        </div><!--End Container-->
    </div>
    <!--End Contact-->

    <!--Footer-->
    <footer id="footers">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3><?php echo get_bloginfo(name) ?> - <?php echo date('Y'); ?></h3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs hidden-sm hidden-md hidden-lg">
                        <ul class="footer-menu">
                            <li><a href="<?php echo get_home_url(); ?>">Головна</a></li>
                            <li class="links dropdown">
                              <ul class="dropdown-menu sub-menu">
                                <li><a href="<?php echo get_home_url(); ?>/cond-split/">Спліт системи</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/cond-cassette/">Касетні</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/cond-multisplit/">Мультиспліт системи</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/cond-mobile/">Мобільні</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/cond-false-ceiling/">Напольно-стелові</a></li>
                              </ul>
                              <a href="cond1.html" data-toggle="dropdown" class="dropdown-toggle">Кондиціонери</a>
                          </li>
                          <li class="links dropdown">
                              <ul class="dropdown-menu sub-menu">
                                <li><a href="<?php echo get_home_url(); ?>/catalog-split/">Спліт системи</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/catalog-cassette/">Касетні</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/catalog-multisplit/">Мультиспліт системи</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/catalog-mobile/">Мобільні</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/catalog-false-ceiling/">Напольно-стелові</a></li>
                              </ul>
                              <a href="cond1.html" data-toggle="dropdown" class="dropdown-toggle">Каталог</a>
                          </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 hidden-xs hidden-sm hidden-md hidden-lg">
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
<?php wp_footer(); ?>
</body>

</html>