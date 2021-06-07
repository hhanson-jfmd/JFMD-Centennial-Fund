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
$id = 'staff-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'staff';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$fpip = get_field('block_staff');
$standalone = get_field('standalone_page'); 
?>
<!--Markup for Expand/Collapse-->
<?php if( in_array('yes', $standalone) ) : ?>
	<?php
		// check if the flexible content field has rows of data
		if( have_rows('block_staff') ):		
			 // loop through the rows of data
	?>
				<?php
					while ( have_rows('block_staff') ) : the_row();
					$picture = get_sub_field('picture');
					$staff_name = get_sub_field('staff_name');
					$title = get_sub_field('title');
				?>	
				<div class="board">
					<!-- Featured Image -->
					
					<ul class="board--member">
						<!-- Picture -->
						<li><img class="board--member--img" src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; ?>" /></li>
						<!-- Name -->	
						<li class="board--member--name"><h4><?php echo $staff_name; ?></h4></li>
						<!-- Title -->	
						<li class="board--member--title"><h3 class="dark-gray"><?php echo $title ?></h3></li>						
					</ul>
						</div>
				<?php endwhile;	?>
	<?php endif; ?>	
<?php else : ?>	
	<?php
		// check if the flexible content field has rows of data
		if( have_rows('block_staff') ):		
			 // loop through the rows of data
	?>
	<section id="staff" class="board limit-900">
			<div class="staff-grid">
			<?php
					while ( have_rows('block_staff') ) : the_row();
					$picture = get_sub_field('picture');
					$staff_name = get_sub_field('staff_name');
					$title = get_sub_field('title');
				?>
					<!-- Individual Member -->
					<ul class="board--member">
						<!-- Picture -->
						<li><img class="board--member--img" src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; ?>" /></li>
						<!-- Name -->	
						<li class="board--member--name"><h4><?php echo $staff_name; ?></h4></li>
						<!-- Title -->	
						<li class="board--member--title"><p class="dark-gray italic"><?php echo $title ?></p></li>						
					</ul>
		
				<?php endwhile;	?>
			</div>
	</section>

	<?php endif; ?>	
<?php endif; ?>