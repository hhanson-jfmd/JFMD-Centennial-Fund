<?php
/**
 * JFMD ACF Custom Block functionality
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0.0
 */

/**
 * Prevent switching to Twenty Nineteen on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Nineteen 1.0.0
 */

function register_acf_block_types() {
   // register a testimonial block.
	acf_register_block_type(array(
      'name'              => 'expand-collapse',
      'title'             => __('Expand/Collapse'),
      'description'       => __('A custom expand/collapse block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/expand-collapse/expand-collapse.php',
      'category'          => 'common',
      'icon'              => 'heart',
	  'mode'			  => 'edit',
      'keywords'          => array( 'expand', 'collapse' )
   ));
	acf_register_block_type(array(
      'name'              => 'front-page-intro-panel',
      'title'             => __('Front Page Intro Panel'),
      'description'       => __('A front page panel block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/front-page-intro-panel/front-page-intro-panel.php',
      'category'          => 'common',
      'icon'              => 'admin-comments',
	  'mode'			  => 'edit',
      'keywords'          => array( 'intro', 'panel', 'front' )
   ));
	acf_register_block_type(array(
      'name'              => 'info-content',
      'title'             => __('Information Content Block'),
      'description'       => __('A content block with a heading and WYSIWYG Editor.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/info-content-block/info-content-block.php',
      'category'          => 'common',
      'icon'              => 'admin-comments',
	  'mode'			  => 'edit',
      'keywords'          => array( 'emergency', 'content', 'info' )
   ));
	acf_register_block_type(array(
      'name'              => 'content-slider',
      'title'             => __('Content Slider'),
      'description'       => __('A content slider block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/content-slider/content-slider.php',
      'category'          => 'common',
      'icon'              => 'admin-comments',
	  'mode'			  => 'edit',
      'keywords'          => array( 'content', 'slider' )
   ));
	acf_register_block_type(array(
      'name'              => 'simple-content-block',
      'title'             => __('Simple Content Block'),
      'description'       => __('A simple content block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/simple-content-block/simple-content-block.php',
      'category'          => 'common',
      'icon'              => 'admin-comments',
	  'mode'			  => 'edit',
      'keywords'          => array( 'content', 'simple' )
   ));	
	acf_register_block_type(array(
      'name'              => 'accordion-tabs',
      'title'             => __('Accordion Tabs'),
      'description'       => __('An accordion tab block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/accordion-tabs/accordion-tabs.php',
      'category'          => 'common',
      'icon'              => 'portfolio',
	  'mode'			  => 'edit',
      'keywords'          => array( 'accordion', 'tabs' )
   ));	
   acf_register_block_type(array(
      'name'              => 'sticky-nav',
      'title'             => __('Sticky Nav'),
      'description'       => __('A Sticky Nav'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/sticky-nav/sticky-nav.php',
      'category'          => 'common',
      'icon'              => 'portfolio',
	  'mode'			  => 'edit',
      'keywords'          => array( 'sticky', 'tabs' )
   ));	
   acf_register_block_type(array(
      'name'              => 'single-grant',
      'title'             => __('Single Grant'),
      'description'       => __('A block for single grant entries'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/single-grant/single-grant.php',
      'category'          => 'common',
      'icon'              => 'admin-comments',
      'mode'			  => 'edit',
      'keywords'          => array( 'grant', 'single' ),
  ));
   acf_register_block_type(array(
      'name'              => 'multi-grant',
      'title'             => __('Multi Grant'),
      'description'       => __('A block for multi grant entries'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/multi-grant/multi-grant.php',
      'category'          => 'common',
      'icon'              => 'admin-comments',
      'mode'			  => 'edit',
      'keywords'          => array( 'grant', 'single' ),
   ));
	acf_register_block_type(array(
      'name'              => 'donation-block',
      'title'             => __('Donation Block'),
      'description'       => __('A mini-donation block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/donation-block/donation-block.php',
      'category'          => 'common',
      'icon'              => 'heart',
	  'mode'			  => 'edit',
      'keywords'          => array( 'donation', 'donate' )
   ));
	acf_register_block_type(array(
      'name'              => 'internal-block',
      'title'             => __('Internal Content Block'),
      'description'       => __('An internal content block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/internal-block/internal-block.php',
      'category'          => 'common',
      'icon'              => 'media-text',
	  'mode'			  => 'edit',
      'keywords'          => array( 'internal', 'content' )
   ));	
	acf_register_block_type(array(
      'name'              => 'staff',
      'title'             => __('Staff'),
      'description'       => __('A custom staff block.'),
      'render_template'   => 'template-parts/blocks/staff/staff.php',
      'category'          => 'common',
      'icon'              => 'admin-users',
	  'mode'			  => 'edit',
      'keywords'          => array( 'staff', 'staff' )
   ));
	acf_register_block_type(array(
      'name'              => 'event-chairs',
      'title'             => __('Event Chairs'),
      'description'       => __('An event chair block for events.'),
      'render_template'   => 'template-parts/blocks/event-chairs/event-chairs.php',
      'category'          => 'common',
      'icon'              => 'admin-users',
	  'mode'			  => 'edit',
	  'align' 			  => array( 'left', 'right', 'full' ),
      'keywords'          => array( 'chairs', 'events' )
   ));
	acf_register_block_type(array(
      'name'              => 'image-slider',
      'title'             => __('Image Slider'),
      'description'       => __('An image slider block.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/image-slider/image-slider.php',
      'category'          => 'common',
      'icon'              => 'heart',
	  'mode'			  => 'edit',
      'keywords'          => array( 'image', 'slider' )
   ));
	acf_register_block_type(array(
      'name'              => 'section-open',
      'title'             => __('Section Open'),
      'description'       => __('A block to open a section.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/section-open/section-open.php',
      'category'          => 'common',
      'icon'              => 'heart',
	  'mode'			  => 'edit',
      'keywords'          => array( 'section', 'open' )
   ));
	acf_register_block_type(array(
      'name'              => 'section-close',
      'title'             => __('Section Close'),
      'description'       => __('A block to close a section.'),
      'render_template'   => get_template_directory() . '/template-parts/blocks/section-close/section-close.php',
      'category'          => 'common',
      'icon'              => 'heart',
	  'mode'			  => 'edit',
      'keywords'          => array( 'section', 'close' )
   ));
	
	acf_register_block_type( array(
		'name'			=> 'team-member',
		'title'			=> __('Team Member'),
		'render_template'	=> get_template_directory() . '/template-parts/blocks/block-team-member/block-team-member.php',
		'category'		=> 'common',
		'icon'			=> 'admin-users',
		'mode'			=> 'edit',
		'keywords'		=> array( 'profile', 'user', 'author' )
   ));

}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
   add_action('acf/init', 'register_acf_block_types');
}

?>