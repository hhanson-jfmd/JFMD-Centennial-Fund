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
$id = 'multi-grant-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'multi-grant';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$fpip = get_field('block_multi_grant');
?>
<!--Markup for Expand/Collapse-->
<?php
	// check if the flexible content field has rows of data
	if( have_rows('block_multi_grant') ):		
		 // loop through the rows of data
?>
	<section class="grant-container">
		<div class="grant <?php echo $className ?>">	
		
			<!-- Variables -->
			<?php
				$a = 0;
				while ( have_rows('block_multi_grant') ) : the_row();
				$image = get_sub_field('image');
				$partner = get_sub_field('partner'); 
				$description = get_sub_field('description'); // Can remove
				$amount = get_sub_field('amount'); // Can remove
				$grantlist = get_sub_field('grant-list');
				$a++;

			?>	
			<?php echo wp_get_attachment_image( $image, 'large', array( "class" => "grant-image" ) );?>
			<div class="grant--info">
				<h3 class="grant--partner"><?php echo $partner; ?></h3>
				<ul data-tabs class="grant-list">
				<?php 
					if( have_rows('grant-list') ): // Check to see if there's any info 	
				?>
				<?php
					$g = 0;
					while ( have_rows('grant-list') ) : the_row();
					$amount_sub = get_sub_field('amount');
					$description_sub = get_sub_field('description');
					$g++;
				?>
					<li><p><span class="grant--amount"> <?php echo $amount_sub; ?></span><?php echo $description_sub; ?></p></li>
				<?php endwhile; ?>
				<?php endif; ?>
			
				
				
				
			
			
	<?php endwhile; ?>
				</ul>
			</div>
			</div>
		</section>
<?php else : ?>
<!--	// no layouts found -->
<?php endif; ?>				
