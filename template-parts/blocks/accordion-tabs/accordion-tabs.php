<?php
/**
 * Accordion Tabs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'accordion-tabs-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'accordion-tabs';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$fpip = get_field('block_accordion_tabs');
?>
<!--Markup for Expand/Collapse-->
<?php
	// check if the flexible content field has rows of data
	if( have_rows('block_accordion_tabs') ):		
		 // loop through the rows of data
?>
<?php $have_image = get_field('have_image'); ?>
<?php if ($have_image) : ?>
	<div class="fade">
<?php else : ?>
	<div class="narrow fade">		
<?php endif;?>
	<h1 class="limit-1200 accordion-tabs--headline blue mt1 mb1 <?php echo $className ?>"><?php the_field('accordion_header',$post_id); ?></h1>
	<section class="accordion-tabs limit-1200 fade <?php echo $className ?>">		
		<ul data-tabs class="accordion-tabs--nav">
			<?php
				$a = 0;
				while ( have_rows('block_accordion_tabs') ) : the_row();
				$header = get_sub_field('header');
				$byline = get_sub_field('byline'); 
				$body = get_sub_field('body'); 
				$link = get_sub_field('link');
				$title = get_sub_field('title');
				$a++;

			?>	
			
			<!--ACF  tab--title -->
			<?php if ($a == 1) : ?>
				<li><a data-tabby-default href="#<?php echo $title; ?>" aria-selected="true"><?php the_sub_field('header');?></a></li>
			<?php else : ?>
				<li><a href="#<?php echo $title; ?>"><?php the_sub_field('header');?></a></li>
			<?php endif; ?>
			<?php
			endwhile;
			?>
		</ul>
		
		<?php
			$b = 0;
			while ( have_rows('block_accordion_tabs') ) : the_row();
			$header = get_sub_field('header');
			$byline = get_sub_field('byline'); 
			$body = get_sub_field('body'); 
			$link = get_sub_field('link');
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$b++;
		?>
		<div class="accordion-tab--content">
			<?php if ($b == 1) : ?>
					<div id="<?php echo $title; ?>" class="accordion-tabs--item" data-selected="true">
				<?php else : ?>
					<div id="<?php echo $title; ?>" class="accordion-tabs--item">
				<?php endif; ?>
			
				<h3><?php the_sub_field('header');?></h3>							
				<!--ACF START tab-copy -->
				<?php the_sub_field('body');?>	
				<?php if ($image) : ?>
					<img src="<?php echo $image; ?>">		
				<?php endif; ?>	
				<!--ACF END tab-copy -->
			</div>
		</div>
	
<?php endwhile; ?>
		</section>
<?php else : ?>
<!--	// no layouts found -->
<?php endif; ?>				
