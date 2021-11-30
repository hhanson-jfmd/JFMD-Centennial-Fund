<?php
/**
 * Template Name: Stories Collection
 */

get_header(); ?>
			
<h1 class="entry-title">Centennial Stories</h1>
<section class="">
	<?php
		$args = array(
			'post_type'  	=> 'videos', 
			'order'			=> 'ASC',
			'orderby'		=> 'rand',									
			'posts_per_page'=> 1,
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				
				<article>
					<!--<p class="purple">Our Most Recent Video</p>-->
					<!-- <a href="<?php the_permalink(); ?>" ><h2 class="yellow"><?php the_title(); ?></h2></a> -->
					<div class="">
						<!--<p class="purple"><?php the_field ('video_short_story'); ?></p>-->
						<!-- <?php if (get_field('video_short_story')) : ?>-->
						<!-- <a href="<?php the_permalink(); ?>" class="button btn-purple" style="margin-bottom:0;"><?php the_field ('video_short_story'); ?></a> -->
						<!-- <?php else: ?> -->
						<!-- <a href="<?php the_permalink(); ?>" class="button btn-purple" style="margin-bottom:0;">Watch More</a> -->
						<!-- <?php endif; ?> -->
						<h1 class="">Stories</h1>
						<div class="">
							<p class="">By telling our stories we can reduce the stigma associated with mental illness and make those who need it more comfortable asking for help. This page features the stories of courageous young people in the Detroit Jewish community talking about their own mental health struggles and communal professionals offering guidance for teens.</p>
						</div>
					</div>
                </article>

				<div class="">
                <iframe src="https://player.vimeo.com/video/<?php the_field ('vimeo_embed'); ?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
				</div>	

			<?php endwhile; ?>			
		<?php endif;  ?>
	<?php wp_reset_query();?>	
</section>

<div class="">
	<div class="cell">
	<p class="purple border-bottom pb-1" style="max-width:500px;">Hear local young people and parents share their mental health related challenges and the steps that they took to heal. </p>
	</div>
</div>
<!-- THE LØØP -->
<div class="">
	<?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
   			'post_type'  	=> 'posts', //videos
			'category_name'  => 'videos', //video
			'order'			=> 'DESC',
			'orderby'		=> 'date', 
			'posts_per_page'=> 21,
       		'paged' => $paged
		);		
		$main_posts = new WP_Query( $args );
		$count = 0;
		if( $main_posts->have_posts() ):
			while( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
				<div class="">
					<a href="<?php the_permalink(); ?>" class="video-thumb"><?php the_post_thumbnail('full'); ?></a>
					<div class="">
						<h4><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						
					</div>
				</div>
			<?php endwhile; ?>			
		<?php endif;  ?>
		<?php wp_reset_query();?>		
</div>
	
	<!-- <?php echo do_shortcode('[ajax_load_more id="Personal" container_type="div" css_classes="grid-x grid-padding-x grid-margin-x pl-2 pr-2" post_type="video" posts_per_page="3" category="personal" pause="true" scroll="false" transition_container="false" images_loaded="true" offset="3" button_label="Load More Videos"]') ?>-->

<!-- END LØØP -->
<div class="grid-x grid-padding-x grid-margin-x pt-2 pb-1 pl-2 pr-2 contained">
	<div class="cell">
		<h2 class="purple"><?php the_field('story_category_two')?></h2>
		<p class="purple border-bottom pb-1" style="max-width:500px;">Hear local experts share their insights into this epidemic and what we all should know about youth mental health. </p>
	</div>
</div>
</div>	
<?php get_footer(); ?>
