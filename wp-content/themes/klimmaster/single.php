<?php get_header();?>
<?php the_post();?>
<?php the_title(); ?>
<?php the_content();?>
<?php echo get_post_meta( $post->ID, 'video-link', true ); ?><!--*10-->
<?php get_footer(); ?>