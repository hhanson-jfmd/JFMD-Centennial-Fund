<?php
/**
 * Template Name: Video Story (Single Post)
 * Template Post Type: post, page
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="video entry-header">
        <h1 class="entry-title">Centennial Stories</h1>
        <div style="padding:56.25% 0 0 0;position:relative; max-width:600px;"><iframe src="https://player.vimeo.com/video/<?php the_field ('vimeo_embed'); ?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="75 Years of Women&amp;#039;s Philanthropy"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        <?php the_content(); ?>
		
	</header><!-- .entry-header -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
<?php	

endwhile; // End of the loop.
?>

<div class="alignwide related-articles--heading">
        <h3>You may also like...</h3>
    </div>
	<section class="related-articles alignwide">
	    <?php
            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags($post->ID);
           
            if ($tags) {
                $tag_ids = array();
                foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                $args=array(
                    'tag__in' => $tag_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>3, // Number of related posts to display.
                    'caller_get_posts'=>1
                );
           
            $my_query = new wp_query( $args );
         
            while( $my_query->have_posts() ) {
                $my_query->the_post();
        ?>
        <div class="related-articles--item">
            
            <a href="<?php the_permalink()?>" class="related-articles--item--img"><?php the_post_thumbnail(); ?></a>
            <div class="related-articles--item--content">
                <a href="<?php the_permalink()?>"><h3 class="related-articles--item--title"><?php the_title(); ?></h3></a>
                <!-- <?php the_excerpt( '<p class="entry-excerpt">', '</p>' ); ?> -->
                <a href="<?php the_permalink()?>" class="related-articles--item--link">Read More</a>
            </div>
        </div>
        <?php }
          }
            $post = $orig_post;
            wp_reset_query();
        ?>
    </section>


	<?php get_footer();