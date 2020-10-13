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


<?php wp_head(); 
    if(get_post()->ID ===95):?>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("formulaire").submit();
            }
        </script>
    <?php endif; ?>

    
<script type="text/javascript">
   <?php $tab = array_map('stripslashes',get_option('bandeaunews'));?>
    var bandeaunews = <?=json_encode($tab);?>;
    
</script>    
<script type="text/javascript" src="/wp-content/themes/ArgentEnfant/js/newsticker.js"></script>
<script type="text/javascript" src="/wp-content/themes/ArgentEnfant/js/newsletter.js"></script>

</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>
	<header id="masthead">
		<p class="reseaux">
			<a href="https://soundcloud.com/maurice-radio-libre" class="soundcloud">page Soundcloud</a>
			<a href="http://www.mauriceradiolibre.com/_popups/chat.asp" class=" tchat">acceder au tchat</a>
			<a href="" class="skype">lancer un appel Skype</a>
			<a href="https://twitter.com/Maurice_Radio" class="twitter">page Twitter</a>
			<a href="https://www.facebook.com/maurice.radio.libre/" class="facebook">page Facebook</a>
			<a href="https://www.youtube.com/user/mauriceradiolibrecaa" class="youtube">chaine Youtube</a>
			<a href="https://www.instagram.com/maurice_radio_libre/?hl=fr" class="instagram">page Instagram</a>
		</p>
        <a href="/" ><img src="<?php echo get_stylesheet_directory_uri() . "/Images/banniere.jpg" ?>" alt="bannière Maurice Radio Libre" /></a>
		<p class="slogan"> LA RADIO CARRÉMENT ROCK, LA RADIO CARRÉMENT LIBRE</p>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'argent' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<img class="img-moto" src="<?php echo get_stylesheet_directory_uri() . "/Images/typewriter-icon.png" ?>" alt="" />
		<div class="newsticker"><p id="notepad"></p></div>
	</header><!-- #masthead -->
