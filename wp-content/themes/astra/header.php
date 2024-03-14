<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0006B3"/>





<!-- Script AdOpt -->
<meta name="adopt-website-id" content="ce27108c-b6e8-45be-b4fb-c32e9a51f782" />
<script src="//tag.goadopt.io/injector.js?website_code=ce27108c-b6e8-45be-b4fb-c32e9a51f782" class="adopt-injector"></script>
	
<meta name="adopt-website-id" content="ce27108c-b6e8-45be-b4fb-c32e9a51f782" />
<script src="//tag.goadopt.io/injector.js?website_code=ce27108c-b6e8-45be-b4fb-c32e9a51f782" class="adopt-injector"></script>

	
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div 
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>
	<?php 
	astra_header_before(); 

	astra_header(); 

	astra_header_after();

	astra_content_before(); 
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>

    <style type="text/css">
                    ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            -webkit-border-radius: 16px;
            }

            ::-webkit-scrollbar-track-piece {
            background-color:rgb(0, 0, 0) transparent;
            -webkit-border-radius: 3px;
            }

            ::-webkit-scrollbar-thumb:vertical {
            height: 5px;
            background-color: #0006B3;
            -webkit-border-radius: 3px;
            }

            ::-webkit-scrollbar-thumb:horizontal {
            width: 5px;
            background-color: rgb(0, 0, 0) transparent;
            -webkit-border-radius: 3px;
            }
    </style>

