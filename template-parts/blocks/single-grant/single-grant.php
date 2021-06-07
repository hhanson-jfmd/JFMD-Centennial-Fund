<?php
/**
 * Single Grant Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'single-grant-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'single-grant';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$fpip = get_field('block_single_grant');
$standalone = get_field('standalone_page'); 
?>
<!--Markup for Expand/Collapse-->
	<?php
		// check if the flexible content field has rows of data
		if( have_rows('block_single_grant') ):		
			 // loop through the rows of data
	?>
		<?php
			while ( have_rows('block_single_grant') ) : the_row();
			$post_object = get_sub_field('grant_name');
			if( $post_object ):
			$post = $post_object;
            setup_postdata( $post );
			$name_of_organization = get_field('name_of_organization', $post->ID);
			$grant_title = get_field('grant_title', $post->ID);			
			$city_state_country = get_field('city_state_country', $post->ID);
			$grant_amount = get_field('grant_amount', $post->ID);
			$grant_description = get_field('grant_description', $post->ID);
			$year_grant_made = get_field('year_grant_made', $post->ID);
			$organization_logo = get_field('organization_logo', $post->ID);
		?>
		<h4 class="has-purple-color grant--recip"><?php echo $name_of_organization; ?></h4>
		<hr class="wp-block-separator">
		<p class="grant--title"><strong><?php echo $grant_title; ?></strong></p>
		<ul class="grant--info">
			<?php if ($city_state_country) : ?>
				<li><strong>City/State:</strong><br><?php echo $city_state_country; ?></li>
			<?php endif; ?>
			<?php if ($grant_amount) : ?>
				<li><strong>Amount:</strong><br><?php echo $grant_amount; ?></li>
			<?php endif; ?>
			<?php if ($year_grant_made) : ?>
				<li><strong>Year:</strong><br><?php echo $year_grant_made; ?></li>
			<?php endif; ?>
		</ul>
		<?php if ($grant_description) : ?>
			<p class="grant--desc"><?php echo $grant_description; ?></p>
		<?php endif; ?>
		<?php if ($organization_logo) : ?>
			<figure class="wp-block-image size-large grant--logo">
				<img loading="lazy" width="300" height="62" src="<?php echo $organization_logo['url']; ?>" alt="<?php echo $organization_logo['alt']; ?>" class="wp-image-1762">
			</figure>
		<?php endif; ?>
		<?php wp_reset_query(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
   
				<?php endwhile;	?>

	<?php endif; ?>	