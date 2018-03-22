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

	<div class="container-fluid" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">
				<div class="row">
					<div class="container-fluid">
					    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
					        <div class="carousel-inner row w-100 mx-auto" role="listbox">
					        	<!-- Modal 1 START -->
					            <div class="carousel-item col-md-3  active">
					               <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 1" class="thumb" type="button" data-toggle="modal" data-target="#myModal">
					                      <img class="img-fluid mx-auto d-block" src="https://http2.mlstatic.com/S_11676-MLA20046730929_022014-O.jpg" alt="slide 1">
					                    </a>
					                  </div>
					                </div>
					            </div>
					            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								        <div class="modal-body text-center">
								            <img src="https://http2.mlstatic.com/S_11676-MLA20046730929_022014-O.jpg" class="img-responsive">
								        </div>
							            <div class="modal-footer">
									        <button type="button" class="btn btn-block btn-large btn-warning" data-dismiss="modal"><i class="fas fa-times"></i>
											</button>
									    </div>
								    </div>
								  </div>
								</div>
								<!-- Modal 1 END -->
					            <div class="carousel-item col-md-3 ">
					               <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 3" class="thumb">
					                     <img class="img-fluid mx-auto d-block" src="https://http2.mlstatic.com/cuentos-de-terror-para-franco-vi-hugo-mitoire-D_NQ_NP_226705-MLA25072695757_092016-F.webp" alt="slide 2">
					                    </a>
					                  </div>
					                </div>
					            </div>
					            <div class="carousel-item col-md-3 ">
					               <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 4" class="thumb">
					                     <img class="img-fluid mx-auto d-block" src="https://http2.mlstatic.com/cuentos-de-terror-para-franco-2-hugo-mitoire-D_NQ_NP_11593-MLA20046717762_022014-O.jpg" alt="slide 3">
					                    </a>
					                  </div>
					                </div>
					            </div>
					            <div class="carousel-item col-md-3 ">
					                <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 5" class="thumb">
					                     <img class="img-fluid mx-auto d-block" src="https://d1f8z8146hqfif.cloudfront.net/content/getcover.ashx?ISBN=9789871671045&size=3&coverNumber=1&id_com=717" alt="slide 4">
					                    </a>
					                  </div>
					                </div>
					            </div>
					            <div class="carousel-item col-md-3 ">
					              <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 6" class="thumb">
					                      <img class="img-fluid mx-auto d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-wFF6ETIaBF8qEosluCbdsKSGoY5Hke4LwQCuHffpY1qj8p2E" alt="slide 5">
					                    </a>
					                  </div>
					                </div>
					            </div>
					            <div class="carousel-item col-md-3 ">
					               <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 7" class="thumb">
					                      <img class="img-fluid mx-auto d-block" src="https://d1f8z8146hqfif.cloudfront.net/content/getcover.ashx?ISBN=9789871671038&size=3&coverNumber=1&id_com=717" alt="slide 6">
					                    </a>
					                  </div>
					                </div>
					            </div>
					            <div class="carousel-item col-md-3 ">
					               <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 8" class="thumb">
					                      <img class="img-fluid mx-auto d-block" src="http://content.cuspide.com/getcover.ashx?ISBN=9789876274425&size=3&coverNumber=1&id_com=1113" alt="slide 7">
					                    </a>
					                  </div>
					                </div>
					            </div>
					             <div class="carousel-item col-md-3  ">
					                <div class="panel panel-default">
					                  <div class="panel-thumbnail">
					                    <a href="#" title="image 2" class="thumb">
					                     <img class="img-fluid mx-auto d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4uv1IwAueg1by4vwz2FcBnccFk5JND6Wh95gXnjx1ndN_wnY0" alt="slide 8">
					                    </a>
					                  </div>
					                  
					                </div>
					            </div>
					        </div>
					        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
					            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					            <span class="sr-only">Anterior</span>
					        </a>
					        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
					            <span class="carousel-control-next-icon" aria-hidden="true"></span>
					            <span class="sr-only">Siguiente</span>
					        </a>
					    </div>
					</div>					
				</div>


			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
