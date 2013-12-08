
				</div><!-- #main -->
			</div>
				<div class="col-sm-3">
					<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

					<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>
				</div>
		</div>

		<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template. ?>


	</div><!-- #container -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>
				</div>
			</div>
    	<div class="row">
			<div class="col-sm-12">
				<div class="menu-secondary">
					<?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template. ?>
				</div>
			</div>
		</div>
    	<div class="row">
    		<div class="col-sm-12">
					<div class="footer-content">
						<?php echo apply_atomic_shortcode( 'footer_content', '<p class="credit">' . __( '[the-year] [site-link]. ') . '</p>' ); ?>
					</div><!-- .footer-content -->
	      </div>
	    </div>
		</div>
	</footer><!-- #footer -->

	<?php wp_footer(); // wp_footer ?>

</body>
</html>