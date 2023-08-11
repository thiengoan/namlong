<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
wp_body_open(); 

$slug = $post->post_name;

?>

<div id="wrapper">
	<header id="header" class="header <?php flatsome_header_classes(); ?>">
		<div class="header-wrapper">
        <div id="masthead" class="header-main <?php header_inner_class('main'); ?>">
            <div class="header-inner flex-row container <?php flatsome_logo_position(); ?>" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <img width="150" height="150" src="<?php echo ASSET_PATH . '/logo/'.$slug.'.png'; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="logo" loading="lazy">
                </div>
                
                <!-- Menu Mobile Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                        <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                        <i class="icon-menu"></i>
                        </a>
                        </li>            
                    </ul>
                </div>

                <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
                    <div class="sidebar-menu no-scrollbar">
                        <?php
                            $defaults = array(
                                'container' => 'ul',
                                'theme_location' => 'header-menu', 
                                'menu_class' => 'nav nav-sidebar nav-vertical nav-uppercase', 
                            );
                            wp_nav_menu($defaults); 
                        ?> 
                    </div>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                <?php
                    $defaults = array(
                        'theme_location' => 'header-menu', 
                        'menu_class' => 'nav navbar-nav menu__list', 
                    );
                    wp_nav_menu($defaults); 
                ?> 
                </div>
            </div>
            <?php if(get_theme_mod('header_divider', 1)) { ?>
            <div class="container"><div class="top-divider full-width"></div></div>
            <?php }?>
		</div>
	</header>
    
	<main id="main" class="<?php flatsome_main_classes(); ?>">
