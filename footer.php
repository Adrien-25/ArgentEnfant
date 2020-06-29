<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Argent Enfant
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	 <div class="conteneur_footer">

		<div class="newsletter">
			<p>CONTACTS</p>

				<p class="reseaux_footer">
					<a href="https://www.facebook.com/maurice.radio.libre/" class="icones_social facebook_footer" alt="facebook" >facebook</a>
					<a href="https://twitter.com/Maurice_Radio" class="icones_social twitter_footer" alt="twitter" >twitter</a>
					<a href="https://www.instagram.com/maurice_radio_libre/?hl=fr" class="icones_social instagram_footer" alt="instagram">instagram</a>
					<a href="https://www.youtube.com/user/mauriceradiolibrecaa" class="icones_social youtube_footer" alt="youtube">youtube</a>
					<a href="https://soundcloud.com/maurice-radio-libre" class="icones_social soundcloud_footer" alt="soundcloud">soundcloud</a>
																	
				</p>
		

		<p>NEWSLETTER</p></div>
		<p>Enquiers-toi de l'actu de Maurice Radio Libre par mail et gratos en plus! Inscris ton email ici!</p>

		<div class="partenaires">NOS PARTENAIRES</div>
		<div class="informations">INFORMATIONS</div>
	</div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'argent' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'argent' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'argent' ), 'Argent', '<a href="https://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>