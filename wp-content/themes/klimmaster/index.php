<?php get_header(); ?>
    <!--Portfolio Page-->
    <div id="portfolio_page">    
        <div class= "container">
            <div class="row">
                <div class="row col-lg-12 wow fadeInDown">
                    <h2>Кондиціонери</h2>
                    <p>Кондиціонери з якими ми працюємо</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <!-- Portfolio-->        
        <div id="filters-container" class="cbp-l-filters-alignCenter">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
            Всі <div class="cbp-filter-counter"></div>
        </div> /
        <div data-filter=".saturn" class="cbp-filter-item">
            Saturn <div class="cbp-filter-counter"></div>
        </div> /
        <div data-filter=".lg" class="cbp-filter-item">
            LG <div class="cbp-filter-counter"></div>
        </div> /
        <div data-filter=".panasonic" class="cbp-filter-item">
            Panasonic <div class="cbp-filter-counter"></div>
        </div> /
        <div data-filter=".toshiba" class="cbp-filter-item">
            Toshiba <div class="cbp-filter-counter"></div>
        </div> /
        <div data-filter=".mh" class="cbp-filter-item">
            Mitsubishi-Heavy <div class="cbp-filter-counter"></div>
        </div>
        </div>

        <div id="grid-container" class="cbp">
            <?php                   $args = array(
                                    'post_type' => 'cond_page',
                                    'cond_type' => 'multisplit'
                                );
                            //query_posts($args); ?>
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <div class="cbp-item mh">
                    <a href="#" class="cbp-caption cbp-lightbox" data-title="Mitsubishi Heavy SRK25ZM-S<br>Кондиционер настенного типа Mitsubishi Heavy SRK25ZM-S/SRC25ZM-S. Инверторный.<br>Ціна: 17 550 грн.">
                    <div class="cbp-caption-defaultWrap">
                        <img src="<?php echo get_field('cond_photo')['url']; ?>" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><?php echo get_field('cond_name'); ?></div>
                                <div class="cbp-l-caption-desc"><?php echo get_field('cond_desc'); ?> </div>
                                <div class="cbp-l-caption-desc price"><?php echo get_field('cond_price'); ?></div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            <? endwhile; endif; ?>
        </div>
    </div><!-- End Portfolio Page-->
<?php get_footer(); ?>