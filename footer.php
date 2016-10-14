<?php
/**
 * The template for displaying the footer
 */

// Contact Details
$mobile = contact_detail( 'mobile', '', '', false );
$email = contact_detail( 'email', '', '', false );
$address = contact_detail( 'address', '', '', false );
?>



		<footer class="site-footer">

			<ul class="footer-part left">
				<li class="contact">
					<ul class="contact-list">
						<li class="phone">
							tél : <?php echo $mobile ; ?>
						</li>
						<li class="mail">
							mail : <?php echo $email ; ?>
						</li>
					</ul>
					<?php echo do_shortcode( '[pirate_forms]' ) ?>
				</li>
				<li class="partners">
					<p>
						Partenaires
					</p>
				</li>
			</ul>

			<ul class="footer-part right">
				<li class="map" id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7427.400770816599!2d2.583874010331186!3d48.839468185426135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e325b1016d5%3A0x7cba3f4d10e2d1fc!2sB%C3%A2timent+Copernic%2C+5+Boulevard+Descartes%2C+77420+Champs-sur-Marne!5e0!3m2!1sfr!2sfr!4v1476461571204" frameborder="0" style="border:0" allowfullscreen></iframe>
				</li>
				<li class="address">
					<?php echo $address ; ?>
				</li>
				<li class="legals">
					<!-- NAVIGATION -->
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</li>
			</ul>

		</footer><!-- .site-footer -->

<?php wp_footer(); ?>
</body>
</html>
