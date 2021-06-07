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
$id = 'sticky-nav' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'sticky-nav';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$fpip = get_field('block_sticky_nav');
?>
<!--Markup for Expand/Collapse-->
<?php
	// check if the flexible content field has rows of data
	if( have_rows('block_sticky_nav') ):		
		 // loop through the rows of data
?>
	<section class="sticky-nav limit-900 fade <?php echo $className ?>">		
		<ul data-tabs class="sticky-nav--nav">
			<?php
				$a = 0;
				while ( have_rows('block_sticky_nav') ) : the_row();
				$link = get_sub_field('link');
				$title = get_sub_field('title');
				$a++;

			?>	
			<!--ACF tab--title -->
			<?php if ($a == 1) : ?>
				<li><a href="#<?php echo $link; ?>" aria-selected="true"><?php the_sub_field('title');?></a></li>
			<?php else : ?>
				<li><a href="#<?php echo $link; ?>"><?php the_sub_field('title');?></a></li>
			<?php endif; ?>
			<?php
			endwhile;
			?>
		</ul>
		<div class="sticky-nav--content">
		<?php
			$b = 0;
			while ( have_rows('block_sticky_nav') ) : the_row();
			$header = get_sub_field('header');
			$body = get_sub_field('body'); 
			$link = get_sub_field('link');
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$b++;
		?>
			<?php if ($b == 1) : ?>
				<div id="<?php echo $link; ?>" class="sticky-nav--item" data-selected="true">
			<?php else : ?>
				<div id="<?php echo $link; ?>" class="sticky-nav--item">
			<?php endif; ?>
			<?php if ($header) : ?>
			    <h3><?php echo $header; ?></h3>						
			<?php else : ?>
			    <h3><?php echo $title; ?></h3>
			<?php endif; ?>
				<!--ACF START tab-copy -->
				<?php if ($image) : ?>
					<img src="<?php echo $image; ?>">		
				<?php endif; ?>	
				<?php the_sub_field('body');?>	
				<!--ACF END tab-copy -->
			</div>
<?php endwhile; ?>
        </div>
		</section>
<?php else : ?>
<!--	// no layouts found -->
<?php endif; ?>				
