<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Argent Enfant
 */
?>

	<!-- </div>#content -->

	<footer role="contentinfo"><!-- création d'un contenair flexbox footer -->

	<div class="colonne1">

		<img class="img-MRL" src="<?php echo get_stylesheet_directory_uri() . "/Images/MRL_image.png" ?>" alt="logo MRL">

				<h3>CONTACTS</h3>

					<div class="reseaux">
						<a href="https://www.facebook.com/maurice.radio.libre/" class="facebook"></a>
						<a href="https://twitter.com/Maurice_Radio" class="twitter"></a>
						<a href="https://www.instagram.com/maurice_radio_libre/?hl=fr" class=" instagram"></a>
						<a href="https://www.youtube.com/user/mauriceradiolibrecaa" class="youtube"></a>
						<a href="https://soundcloud.com/maurice-radio-libre" class=" soundcloud"></a>
					</div>

				<h3>NEWSLETTER</h3>

					<p>Enquiers-toi de l'actu de Maurice Radio Libre par mail et gratos en plus! Inscris ton email ici!</p>

					<div class = "newsletter-box">

						<form method="post"	action="">
							<input type="email" placeholder="Votre Adresse E-mail" />
							<input type="submit" value="S'abonner" id="submitNewsletterBtn"/>
						</form>

					</div>

	</div>
	<div class="colonne2">
        <?php include 'wp-content/plugins/MRL-Accueil/templates/partenaires-front.php';?>
	</div>

	<div class="colonne3">

		<h3>INFORMATIONS</h3>

		<p class="liens_informations">
			<a href="">À PROPOS DE MRL</a><br>
			<a href="">À PROPOS DU CAA</a><br>
			<a href="">MENTIONS LÉGALES - COOKIE</a><br>
			<a href="">CRÉDIT</a><br>
		</p>
	</div>

		<p class="copyright">Copyright © <?=date('Y')?> - Maurice Radio Libre. Tous les droits réservés. Toutes reproductions interdites.</p>

	</footer><!-- #colophon -->

<!-- </div>#page -->

<?php wp_footer(); ?>

</body>
</html>