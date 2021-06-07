<?php
/**
 * Section Open Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'section-open-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'section-open';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$container_type = get_field('container_type');
$section_css = get_field('section_css');
$section_id = get_field('section_id');
$section_order = get_field('section_order');
?>
<<?php echo the_field('container_type'); ?> id="<?php echo the_field('section_id'); ?>" class="<?php echo the_field('section_class'); ?>" style="order:<?php echo the_field('section_order'); ?>;">