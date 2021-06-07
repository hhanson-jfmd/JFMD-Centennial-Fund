<?php
/**
 * Front Page Intro Panel.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'front-page-intro--panel-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'front-page-intro--panel';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$fpip = get_field('block_front_page_intro_panel');
?>
<!--Markup for Expand/Collapse-->
<?php
	// check if the flexible content field has rows of data
	if( have_rows('block_front_page_intro_panel') ):
		$a = 1;
		$b = 1;
		$c = 1;
?>	
	
					
			
	<!-- front-page-intro #begin -->
	<?php // loop through the rows of data
		while ( have_rows('block_front_page_intro_panel') ) : the_row();
		$intro_img_url = get_sub_field('image');
		$intro_img_order = get_sub_field('image_order'); 
		$intro_panel_id= get_sub_field('panel_id'); 
		$subhead = get_sub_field('subhead'); 
		$heading = get_sub_field('heading'); 
		$copy = get_sub_field('copy'); 
		$link_text = get_sub_field('link_text'); 
		$link = get_sub_field('link'); 
	?>
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<section id="front-page-intro" class="front-page-intro" id="<?php the_sub_field('panel_id');?>">
				<figure class="front-page-intro--img-<?php echo $a++ ?>">
				</figure>		
				<figure class="front-page-intro--panel-<?php echo $b++ ?>">
				<div class="front-page-intro--panel-<?php echo $c++ ?>--text">
					<p class="mb0 bold subhead"><?php the_sub_field('subhead');?></p>
					<h1 class="m0 book heading"><?php the_sub_field('heading');?></h1>
					<p class="mt0 copy"><?php the_sub_field('copy');?></p>
					<a href="<?php the_sub_field('link');?>" class="link right" tabindex="0"><?php the_sub_field('link_text');?></a>
				</div>
			</figure>
			</section>
		<?php else : ?>
			<section class="<?php the_sub_field('section_css');?>" id="<?php the_sub_field('panel_id');?>" ">
			<img src="<?php echo $intro_img_url?>" class="<?php the_sub_field('image_css');?>">
			<?php if ( get_sub_field('panel_css')) :  ?>
				<div class="<?php the_sub_field('panel_css');?> ">
			<?php else : ?>		
				<div class="feature-panel--copy">
			<?php endif; ?>			
			<h2 class=" <?php the_sub_field('heading_css');?>"><?php the_sub_field('heading');?></h2>
			<h3 class=" <?php the_sub_field('subhead_css');?>"><?php the_sub_field('subhead');?></h3>
			<p class="<?php the_sub_field('copy_css');?>"><?php the_sub_field('copy');?></p>
			<?php if ($link) : ?>
				<a href="<?php the_sub_field('link');?>" class="link right"><?php the_sub_field('link_text');?></a>
			<?php endif; ?>
			</div>
			</section>	
		<?php endif; ?>				
	<?php
		endwhile;
		?>
	<?php if ( is_home() && ! is_front_page() ) : ?>			
		</section>
	
				
	<?php endif; ?>
	<!-- front-page-intro #end -->
	<?php
		else :
			// no layouts found
		endif;
?>
	