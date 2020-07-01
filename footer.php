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

	<footer id="colophon" class="site-footer" role="contentinfo"><!-- création d'un contenair flexbox footer -->

	
		<div class="contenair_contact_newsletter">

			<div class="contact_bloc">

				<img class="img-MRL" src="<?php echo get_stylesheet_directory_uri() . "/Images/MRL_image.png" ?>" alt="logo MRL">

				<h1 id="titre_contacts">CONTACTS</h1>

					<p id="reseaux_footer">
						<a href="https://www.facebook.com/maurice.radio.libre/" class="icones_social facebook_footer" alt="facebook" >facebook</a>
						<a href="https://twitter.com/Maurice_Radio" class="icones_social twitter_footer" alt="twitter" >twitter</a>
						<a href="https://www.instagram.com/maurice_radio_libre/?hl=fr" class="icones_social instagram_footer" alt="instagram">instagram</a>
						<a href="https://www.youtube.com/user/mauriceradiolibrecaa" class="icones_social youtube_footer" alt="youtube">youtube</a>
						<a href="https://soundcloud.com/maurice-radio-libre" class="icones_social soundcloud_footer" alt="soundcloud">soundcloud</a>
																	
					</p>
			</div>
		

			<div class="newsletter_bloc">

				<h1 id="titre_newsletter">NEWSLETTER</h1>

					<p id="phrase_newsletter">Enquiers-toi de l'actu de Maurice Radio Libre par mail et gratos en plus! Inscris ton email ici!</p>

						<form method="post"	action="">
						<input type="email" class="email" placeholder="Votre Adresse E-mail" />
						<input type="submit" id="bouton" value="S'abonner" />
					</form>
			
			</div>

		
		</div>


		<div class="partenaires">

				<h1 id="titre_partenaires">NOS PARTENAIRES</h1>

				<p id="liens_partenaires">
						<a href="https://www.culture.gouv.fr/" class="icones_partenaires image1_footer" alt="République française" >République française</a>
						<a href="https://www.deezer.com/fr/" class="icones_partenaires image2_footer" alt="deezer" >deezer</a>
						<a href="https://www.6play.fr/m6music/programme-tv" class="icones_partenaires image3_footer" alt="M6 Music Hits">M6 Music Hits</a>
				</p>
							
		</div>

		<div class="informations">

				<h1 id="titre_informations">INFORMATIONS</h1>

				<p id="liens_site">
					<a href="" class="redirection MRL" alt="A propos de MRL" >À PROPOS DE MRL</a>
					<a href="" class="redirection CAA" alt="A propos du CAA" >À PROPOS DU CAA</a>
					<a href="" class="redirection Mentions" alt="Mentions légales - Cookie" >MENTIONS LÉGALES - COOKIE</a>
					<a href="" class="redirection Crédit" alt="Crédit" >CRÉDIT</a>
				</p>

		</div>
	
		<div class="copyright">

			<p id="texte_copyright">Copyright © 2020 - Maurice Radio Libre. Tous les droits réservés. Toutes reproductions interdites.</p>

		</div>

		
		
	</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>