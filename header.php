<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Argent Enfant
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

	<header id="masthead" class="head-container" role="banner">

	<div id="super_banner">

           <img class="img-header" src="<?php echo get_stylesheet_directory_uri() . "/Images/banniere.jpg" ?>" alt="">
                   
				<p class="reseaux">
					<a href="https://soundcloud.com/maurice-radio-libre" class="icones_social soundcloud" alt="soundcloud">soundcloud</a>
					<a href="http://www.mauriceradiolibre.com/_popups/chat.asp?nick=&Submit=dialoguer+%21" class="icones_social tchat" alt="tchat">tchat</a>
					<a href="" class="icones_social skype" alt="skype" >skype</a>
					<a href="https://twitter.com/Maurice_Radio" class="icones_social twitter" alt="twitter" >twitter</a>
					<a href="https://www.facebook.com/maurice.radio.libre/" class="icones_social facebook" alt="facebook" >facebook</a>
					<a href="https://www.youtube.com/user/mauriceradiolibrecaa" class="icones_social youtube" alt="youtube">youtube</a>
					<a href="https://www.instagram.com/maurice_radio_libre/?hl=fr" class="icones_social instagram" alt="instagram">instagram</a>
				</p>
		

	</div>
		
		<div class="bandeau_slogan">

			<p id="slogan">LA RADIO CARRÉMENT ROCK, LA RADIO CARRÉMENT LIBRE</p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'argent' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div id="newsticker">
			<img class="img-moto" src="<?php echo get_stylesheet_directory_uri() . "/Images/typewriter-icon.png" ?>" alt="">
			<p id="newsticker-wrapper"><span id="notepad"></span></p>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

</div>


</html>