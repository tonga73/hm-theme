<?php
/**
 * Template Name: Página de Inicio
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container-full" id="content">

		<div class="row no-gutters">
      <a href="" class="col-sm-12 col-md-6" type="button">
        <img src="http://devhm.com/wp-content/uploads/2018/03/lanzamiento-1250x590.png" alt="">
      </a>
      <a href="" class="col-sm-12 col-md-6" type="button">
        <img src="http://devhm.com/wp-content/uploads/2018/03/leer-1250x590.png" alt="">
      </a>

      <div class="col-sm-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://devhm.com/wp-content/uploads/2018/03/crispin-2500x590.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://devhm.com/wp-content/uploads/2018/03/crispin-2500x590.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://devhm.com/wp-content/uploads/2018/03/crispin-2500x590.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>        
      </div>


		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
