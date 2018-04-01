<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper bg-ccprimary" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row no-gutters">

			<div class="col-md-4 text-center">

				<span>Todos Los derechos reservados <h3 class="logo">Hugo Mitoire</h3></span>

			</div><!--col end -->
			<div class="col-md-4 text-center">

				<span>Todos Los derechos reservados <h3 class="logo"><a href="#">Hugo Mitoire</a></h3></span>

			</div><!--col end -->
			<div class="col-md-4 text-center">

				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fas fa-envelope"></i>
						</a>
					</li>
				</ul>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body>


</html>

