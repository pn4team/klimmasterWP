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
          </div>
          <?php
          $terms = get_terms( 'catalog_firm' );

          if( $terms && ! is_wp_error($terms) ) {
              foreach( $terms as $term ) {?>
                /
                <div data-filter=".<?php echo $term->slug ?>" class="cbp-filter-item">
                  <?php echo $term->name ?> <div class="cbp-filter-counter"></div>
                </div>

          <?php }
          }
          ?>
        </div>

        <div id="grid-container" class="cbp">
            <?php                   $args = array(
                                    'post_type' => 'catalog_page',
                                    'catalog_type' => 'cassette'
                                );
            query_posts($args); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="cbp-item <?php 
                    $cur_terms = get_the_terms( $post->ID, 'catalog_firm' );
                    if($cur_terms) {
                      foreach( $cur_terms as $cur_term ){
                        echo " ".$cur_term->slug;
                      }
                      
                    }
                    
                  ?>" style="/*background-image: url(<?php echo get_field('cond_photo')['url']; ?>);*/">
                    <a href="<?php echo get_field('cond_photo')['url']; ?>" class="cbp-caption cbp-lightbox" data-title="<?php echo get_field('cond_name'); ?><br><?php echo get_field('cond_desc'); ?><br>Ціна: <?php echo get_field('cond_price'); ?> грн.">
                    <div class="cbp-caption-defaultWrap">
                        <img src="<?php echo get_field('cond_photo')['url']; ?>" alt="" style="opacity: 1;">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><?php echo get_field('cond_name'); ?></div>
                                <div class="cbp-l-caption-desc"><?php echo get_field('cond_desc'); ?> </div>
                                <div class="cbp-l-caption-desc price">Ціна: <?php echo get_field('cond_price'); ?> грн.</div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            <? endwhile; endif; wp_reset_query(); ?>
        </div>
    </div><!-- End Portfolio Page-->
<?php get_footer(); ?>