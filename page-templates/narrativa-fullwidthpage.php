<?php
/**
 * Template Name: Narrativa
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="narrativa-wrapper">

	<div class="container-fluid" id="content">

		<div class="row">

			<!-- CUENTOS Y RELATOS -->
			<div class="col-sm-12 col-md-6">
				<h4 class="text-center">Cuentos y relatos</h4>
				<hr class="bg-light">
				<div id="accordion">
					<!-- Terror | CUENTOS -->
				  <div class="card">
				    <div class="card-header p-0" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Terror
				        </button>
				      </h5>
				    </div>
				    <!-- Terror Lista -->
				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body text-dark">
				      	<h5>Cuentos de terror para Franco</h5>

				      	<hr class="bg-secondary">

						<!-- Cuentos de terror para Franco I -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading1">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup1" aria-expanded="false" aria-controls="terrorListGroup1">
						          I
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading1">
							<h6 class="panel-title p-0 text-center text-muted">
								Lista de cuentos
							</h6>
						      <ul class="list-group">
						        <li class="list-group-item">De ánimas, aparecidos y otras yerbas</li>
						        <li class="list-group-item">Alma en pena</li>
						        <li class="list-group-item">El payaso maldito</li>
						        <li class="list-group-item">La luz mala</li>

								<!-- Button trigger modal -->
						        <li class="list-group-item">Llamados en la madrugada <small class="btn btn-sm btn-outline-main pull-right" data-toggle="modal" data-target="#exampleModalLong">Leer</small></li>
									<!-- Modal -->
									<div class="modal fade text-dark" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title p-2" id="exampleModalLongTitle">
												<?php echo get_the_title( 29 ); ?>
									        </h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
											<main class="site-main" id="main" role="main">

												<?php 
												$id=29; 
												$post = get_post($id); 
												$content = apply_filters('the_content', $post->post_content); 
												echo $content;  
												?>

											</main><!-- #main -->
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									      </div>
									    </div>
									  </div>
									</div>
									<!-- End Modal -->

						        <li class="list-group-item">El Pomberito</li>
						        <li class="list-group-item">Viento Norte</li>
						        <li class="list-group-item">Juegos peligrosos</li>
						      </ul>
						    </div>
						  </div>
						</div>
						<!-- Cuentos de terror para Franco II -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading2">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup2" aria-expanded="false" aria-controls="terrorListGroup2">
						          II
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading2">
							  <h6 class="panel-title p-0 text-center text-muted">
							 	Lista de cuentos
							  </h6>
						      <ul class="list-group">

								<!-- Button trigger modal -->
						        <li class="list-group-item">Llamados en la madrugada <small class="btn btn-sm btn-outline-main pull-right" data-toggle="modal" data-target="#exampleModalLong2">Leer</small></li>
									<!-- Modal -->
									<div class="modal fade text-dark" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title p-2" id="exampleModalLongTitle2">
												<?php echo get_the_title( 34 ); ?>
									        </h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
											<main class="site-main" id="main" role="main">

												<?php 
												$id=34; 
												$post = get_post($id); 
												$content = apply_filters('the_content', $post->post_content); 
												echo $content;  
												?>

											</main><!-- #main -->
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									      </div>
									    </div>
									  </div>
									</div>
									<!-- End Modal -->
									
						        <li class="list-group-item">Eduardo, el lobisón <span class="text-muted pull-right">(1ra parte)</span></li>
						        <li class="list-group-item">El fantasma de la panadería</li>
						        <li class="list-group-item">El espantapájaros</li>
						        <li class="list-group-item">La playa</li>
						        <li class="list-group-item">La Leyenda de Mate Cosido</li>
						      </ul>
						    </div>
						  </div>
						</div>
						<!-- Cuentos de terror para Franco III -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading3">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup3" aria-expanded="false" aria-controls="terrorListGroup3">
						          III
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading3">
							  <h6 class="panel-title p-0 text-center text-muted">
							    Lista de cuentos
						      </h6>
						      <ul class="list-group">
						        <li class="list-group-item">El extraño suceso de Elpidio Fleytas</li>
						        <li class="list-group-item">Memorias de un niño cruel <small class="btn btn-sm btn-outline-main pull-right">Leer</small></li>
						        <li class="list-group-item">Eduardo el lobisón <span class="text-muted pull-right">(2da parte)</span></li>
						        <li class="list-group-item">Luciano Vallejos el bailarín</li>
						        <li class="list-group-item">Paraje Tres Ahorcados</li>
						        <li class="list-group-item">El mounstruo del guarapo</li>
						        <li class="list-group-item">La anguila del tajamar</li>
						      </ul>
						    </div>
						  </div>
						</div>
						<!-- Cuentos de terror para Franco IV -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading4">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup4" aria-expanded="false" aria-controls="terrorListGroup4">
						          IV
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading4">
							  <h6 class="panel-title p-0 text-center text-muted">
							    Lista de cuentos
						      </h6>
						      <ul class="list-group">
						        <li class="list-group-item">La bestia <span class="text-muted pull-right">(1ra parte)</span></li>
						        <li class="list-group-item">Eduardo el lobisón <span class="text-muted pull-right">(3ra parte)</span></li>
						        <li class="list-group-item">Estero cuatro diablos <small class="btn btn-sm btn-outline-main pull-right">Leer</small></li>
						        <li class="list-group-item">Un extraño en la ventana</li>
						        <li class="list-group-item">El ojeo</li>
						        <li class="list-group-item">Crispín Soto y El Diablo <span class="text-muted pull-right">(1ra parte)</span></li>
						        <li class="list-group-item">Armas y Diablo</li>
						        <li class="list-group-item">La Poseída</li>
						        <li class="list-group-item">Una historia sobre el hombre del capote negro</li>
						      </ul>
						    </div>
						  </div>
						</div>
						<!-- Cuentos de terror para Franco V -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading5">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup5" aria-expanded="false" aria-controls="terrorListGroup5">
						          V
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading5">
							  <h6 class="panel-title p-0 text-center text-muted">
							    Lista de cuentos
						      </h6>
						      <ul class="list-group">
						        <li class="list-group-item">Mensajes del Más Allá <span class="text-muted pull-right">(1ra parte)</span></li>
						        <li class="list-group-item">El juego de la copa <small class="btn btn-sm btn-outline-main pull-right">Leer</small></li>
						        <li class="list-group-item">Crispín Soto y El Diablo <span class="text-muted pull-right">(2da parte)</span></li>
						        <li class="list-group-item">A la deriva</li>
						        <li class="list-group-item">La bestia <span class="text-muted pull-right">(2da parte)</span></li>
						        <li class="list-group-item">La pieza de las víboras</li>
						        <li class="list-group-item">Eduardo, el lobisón <span class="text-muted pull-right">(4ta parte - Final)</span></li>
						        <li class="list-group-item">Domingo sangriento</li>
						      </ul>
						    </div>
						  </div>
						</div>
						<!-- Cuentos de terror para Franco VI -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading6">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup6" aria-expanded="false" aria-controls="terrorListGroup6">
						          VI
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading6">
							  <h6 class="panel-title p-0 text-center text-muted">
							    Lista de cuentos
						      </h6>
						      <ul class="list-group">
						        <li class="list-group-item">Catalepsia</li>
						        <li class="list-group-item">Mensajes del Más Allá <span class="text-muted pull-right">(2da parte)</span></li>
						        <li class="list-group-item">Laguna El Palmar</li>
						        <li class="list-group-item">El nido de la ñacaniná <small class="btn btn-sm btn-outline-main pull-right">Leer</small></li>
						        <li class="list-group-item">Crispín Soto y El Diablo <span class="text-muted pull-right">(3ra parte)</span></li>
						        <li class="list-group-item">El destino del Sr. Sanabria</li>
						        <li class="list-group-item">El Ectoplasma</li>
						      </ul>
						    </div>
						  </div>
						</div>
						<!-- Cuentos de terror para Franco VII -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading7">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup7" aria-expanded="false" aria-controls="terrorListGroup7">
						          VII
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading7">
							  <h6 class="panel-title p-0 text-center text-muted">
							    Lista de cuentos
						      </h6>
						      <ul class="list-group">
						        <li class="list-group-item">El ataúd <small class="btn btn-sm btn-outline-main pull-right">Leer</small></li>
						        <li class="list-group-item">Mensajes del Más Allá <span class="text-muted pull-right">(3ra parte - Final)</span></li>
						        <li class="list-group-item">El monte de las ánimas</li>
						        <li class="list-group-item">La Bestia <span class="text-muted pull-right">(4ta parte)</span></li>
						        <li class="list-group-item">El velorio del hijo de doña Juana</li>
						        <li class="list-group-item">Los hermanitos Ávalos</li>
						        <li class="list-group-item">Crispín Soto y El Diablo <span class="text-muted pull-right">(4ta parte)</span></li>
						        <li class="list-group-item">El hombre (o el viejo) de la bolsa</li>
						        <li class="list-group-item">La espera y la despedida</li>
						      </ul>
						    </div>
						  </div>
						</div>
						<!-- Cuentos de terror para Franco VIII -->
						<div class="panel-group" role="tablist">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="terrorListGroupHeading8">
						      <h5 class="panel-title p-0">
						        <a class="collapsed text-main btn btn-block btn-main" data-toggle="collapse" href="#terrorListGroup8" aria-expanded="false" aria-controls="terrorListGroup8">
						          VIII
						        </a>
						      </h5>
						    </div>
						    <div id="terrorListGroup8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="terrorListGroupHeading8">
							  <h6 class="panel-title p-0 text-center text-muted">
							    Lista de cuentos
						      </h6>
						      <ul class="list-group">
						        <li class="list-group-item">El cuco</li>
						        <li class="list-group-item">El gallo asesino</li>
						        <li class="list-group-item">La lampalagua</li>
						        <li class="list-group-item">Palometas <small class="btn btn-sm btn-outline-main pull-right">Leer</small></li>
						        <li class="list-group-item">La puerta del ropero</li>
						        <li class="list-group-item">La víbora bajo la mesa</li>
						        <li class="list-group-item">La Pora</li>
						        <li class="list-group-item">Otra historia del hombre del capote negro</li>
						        <li class="list-group-item">El viejo y La Muerte</li>
						      </ul>
						    </div>
						  </div>
						</div>

						<hr class="bg-secondary">

				      </div>
				    </div>
				  </div>
				  <!-- Terror | CUENTOS -->

				  <!-- Aventura y Humor | CUENTOS -->
				  <div class="card">
				    <div class="card-header p-0" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Aventura y Humor
				        </button>
				      </h5>
				    </div>
				    <!-- Aventura y Humor Lista -->
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body text-dark">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <!-- Aventura y Humor | CUENTOS -->

				  <!-- Ciencia Ficción | CUENTOS -->
				  <div class="card">
				    <div class="card-header p-0" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Ciencia Ficción
				        </button>
				      </h5>
				    </div>
				    <!-- Ciencia Ficción Lista -->
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body text-dark">


				      </div>
				    </div>
				  </div>
				  <!-- Ciencia Ficción | CUENTOS -->

				  <!-- Curiosa Vida Animal | CUENTOS -->
				  <div class="card">
				    <div class="card-header p-0" id="headingFour">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          Curiosa Vida Animal
				        </button>
				      </h5>
				    </div>
				    <!-- Curiosa Vida Animal Lista -->
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				      <div class="card-body text-dark">
				      	<h5>Cuentos para la Princesa Anna K.</h5>

				      	<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Lista de cuentos
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										La chancha con ruleros
									</li>
									<li class="list-group-item">
										El gallo enamorado <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
									<li class="list-group-item">
										Una tortuga en apuros
									</li>
									<li class="list-group-item">
										El gran partido de futbol
									</li>
									<li class="list-group-item">
										La garza en pantuflas
									</li>
									<li class="list-group-item">
										La ovejita negra
									</li>
									<li class="list-group-item">
										La gansa viuda
									</li>
									<li class="list-group-item">
										Confesiones del Ratón Perez
									</li>
									<li class="list-group-item">
										Despelote en el gallinero
									</li>
									<li class="list-group-item">
										A la sombra de un perejil
									</li>
									<li class="list-group-item">
										Lucy, la hormiguita obrera
									</li>
									<li class="list-group-item">
										Las golondrinas viajan mucho
									</li>
								</ul>
							</div>
						</div>

				      	<hr class="bg-secondary">

				      </div>
				    </div>
				  </div>
				  <!-- Curiosa Vida Animal | CUENTOS -->

				  <!-- Mundo Médico | CUENTOS -->
				  <div class="card">
				    <div class="card-header p-0" id="headingFive">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				          Mundo Médico
				        </button>
				      </h5>
				    </div>
				    <!-- Mundo Médico Lista -->
				    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
				      <div class="card-body text-dark">
				      	<h5>Relatos</h5>

				      	<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Volumen I
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										Antimicótico
									</li>
									<li class="list-group-item">
										Autopsia <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
									<li class="list-group-item">
										Cáncer de vesícula
									</li>
									<li class="list-group-item">
										Certificado de defunción
									</li>
									<li class="list-group-item">
										Cesárea <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
									<li class="list-group-item">
										Hemicolectomía
									</li>
									<li class="list-group-item">
										Hernia inguinal "bilateral"
									</li>
									<li class="list-group-item">
										Laringuectomía
									</li>
									<li class="list-group-item">
										Oclusión intestinal
									</li>
									<li class="list-group-item">
										Úlcera perforada de duodeno
									</li>
								</ul>
							</div>
						</div>

				      	<hr class="bg-secondary">

				      </div>
				    </div>
				  </div>
				  <!-- Mundo Médico | CUENTOS -->

				  <!-- Mundo Neurótico | CUENTOS -->
				  <div class="card">
				    <div class="card-header p-0" id="headingSix">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          Mundo Neurótico
				        </button>
				      </h5>
				    </div>
				    <!-- Mundo Neurótico Lista -->
				    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
				      <div class="card-body text-dark">
				      	<h5>Compendio <span class="text-muted pull-right">(inédito)</span></h5>

				      	<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Compendio (pseudo-ensayos y relatos) de conductas anómalas, interpretaciones disparatadas y ocurrencias poco serias que pretende explicar y sentar las bases de una retorcida teoría sobre la importancia de las neurosis.
										<hr class="col-1 bg-secondary">
										Ensayos
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										Proteja su neurósis <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
									<li class="list-group-item">
										Maniobras básicas para tomar un helado
									</li>
									<li class="list-group-item">
										La mosca
									</li>
									<li class="list-group-item">
										No me quería casar
									</li>
									<li class="list-group-item">
										El matrimonio, la tabal periódica de los elementos y las leyes de la físico-química <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
									<li class="list-group-item">
										La billetera
									</li>
									<li class="list-group-item">
										Actividades distractivas
									</li>
									<li class="list-group-item">
										Insomnio
									</li>
									<li class="list-group-item">
										Angustia
									</li>
									<li class="list-group-item">
										El amor
									</li>
									<li class="list-group-item">
										Claustrofobia
									</li>
									<li class="list-group-item">
										Ordene su casa
									</li>
									<li class="list-group-item">
										Prospecto de mujer
									</li>
									<li class="list-group-item">
										La misión
									</li>
								</ul>
							</div>
						</div>

				      	<hr class="bg-secondary">

				      </div>
				    </div>
				  </div>
				  <!-- Mundo Neurótico | CUENTOS -->


				  <!-- Absurdo | CUENTOS -->
				  <div class="card">
				    <div class="card-header p-0" id="headingSeven">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				          Absurdo
				        </button>
				      </h5>
				    </div>
				    <!-- Absurdo Lista -->
				    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
				      <div class="card-body text-dark">
				      	<h5>Revelaciones <span class="text-muted pull-right">(inédito)</span></h5>

				      	<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Lista de cuentos
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										Atanasio (o, Io Satán)
									</li>
									<li class="list-group-item">
										El chorro eterno
									</li>
									<li class="list-group-item">
										El escritorio
									</li>
									<li class="list-group-item">
										El origen del guaraní
									</li>
									<li class="list-group-item">
										El veedor
									</li>
									<li class="list-group-item">
										Caú caídos
									</li>
									<li class="list-group-item">
										Mensajes encriptados
									</li>
									<li class="list-group-item">
										Mensajes encriptados II
									</li>
									<li class="list-group-item">
										Mensajes encriptados III
									</li>
									<li class="list-group-item">
										Nuevas tendencias
									</li>
									<li class="list-group-item">
										Nuevos Aires de Justicia
									</li>
									<li class="list-group-item">
										Ocaso comercial
									</li>
									<li class="list-group-item">
										Oficina de Correcciones <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
									<li class="list-group-item">
										Un enigma insospechado
									</li>
									<li class="list-group-item">
										Otro enigma insospechado
									</li>
									<li class="list-group-item">
										Particularmente
									</li>
									<li class="list-group-item">
										Un amor diferente
									</li>
									<li class="list-group-item">
										Una cuestión de fe
									</li>
									<li class="list-group-item">
										Viaje a destino <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
								</ul>
							</div>
						</div>

				      	<hr class="bg-secondary">

				      </div>
				    </div>
				  </div>
				  <!-- Absurdo | CUENTOS -->


				</div> <!-- Cuentos Accordion End -->
			</div> <!-- Cuentos Column End -->

			<!-- NOVELAS -->
			<div class="col-sm-12 col-md-6">
				<h4 class="text-center">Novelas</h4>
				<hr class="bg-light">
				<div id="accordion-novelas">
				  <!-- Infanto-Juveniles | NOVELAS  -->
				  <div class="card">
				    <div class="card-header p-0" id="novelasOne">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg" data-toggle="collapse" data-target="#collapseNovelasOne" aria-expanded="true" aria-controls="collapseNovelasOne">
				          Infanto-Juveniles
				        </button>
				      </h5>
				    </div>
				    <!-- Infanto-Juveniles Lista -->
				    <div id="collapseNovelasOne" class="collapse" aria-labelledby="novelasOne" data-parent="#accordion-novelas">
				      <div class="card-body text-dark">
				      	<h5>Historia de un niño-lobo</h5>

				      	<hr class="bg-secondary">

						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Capítulo I
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										La primera transformación <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>								
								</ul>
							</div>
						</div>

				      	<h5 class="pt-5">Mensajes del Más Allá</h5>

				      	<hr class="bg-secondary">

						<div class="panel-group">
							<div class="panel panel-default">
								<ul class="list-group">
									<li class="list-group-item">
										El velorio <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>					
								</ul>
							</div>
						</div>

				      	<h5 class="pt-5">Criaturas Celestes</h5>

				      	<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<ul class="list-group">
									<li class="list-group-item">
										Campo del Cielo <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
								</ul>
							</div>
						</div>

				      	<hr class="bg-secondary">

				      </div>
				    </div>
				  </div>
				  <!-- Infanto-Juveniles | NOVELAS -->

				  <!-- Género Negro | NOVELAS -->
				  <div class="card">
				    <div class="card-header p-0" id="novelasTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg" data-toggle="collapse" data-target="#collapseNovelasTwo" aria-expanded="true" aria-controls="collapseNovelasTwo">
				          Género Negro
				        </button>
				      </h5>
				    </div>
				    <!-- Género Negro Lista -->
				    <div id="collapseNovelasTwo" class="collapse" aria-labelledby="novelasTwo" data-parent="#accordion-novelas">
				      <div class="card-body text-dark">
				      	<h5>La cacería</h5>

				      	<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Contratapa
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										Texto contratapa <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
								</ul>
								<div class="panel-heading">
									<h6 class="panel-title p-0 pt-2 text-center text-muted">
										Capítulo I
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										El crimen de Miraflores <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
								</ul>
							</div>
						</div>
						
						<h5 class="pt-5">Los ojos de Mariel</h5>

						<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Capítulo I
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										Las copas de champagne <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
								</ul>
							</div>
						</div>
						<hr class="bg-secondary">
				      </div>
				    </div>
				  </div>
				  <!-- Género Negro | NOVELAS -->
				  <div class="card">
				    <div class="card-header p-0" id="novelasThree">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg" data-toggle="collapse" data-target="#collapseNovelasThree" aria-expanded="true" aria-controls="collapseNovelasThree">
				          Absurdo
				        </button>
				      </h5>
				    </div>
				    <div id="collapseNovelasThree" class="collapse" aria-labelledby="novelasThree" data-parent="#accordion-novelas">
				      <div class="card-body text-dark">
				      	<h5>Sin Luz</h5>

						<hr class="bg-secondary">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h6 class="panel-title p-0 text-center text-muted">
										Capítulo I
									</h6>
								</div>
								<ul class="list-group">
									<li class="list-group-item">
										El corte <small class="btn btn-sm btn-outline-main pull-right">Leer</small>
									</li>
								</ul>
							</div>
						</div>
						<hr class="bg-secondary">

				      </div>
				    </div>
				  </div>
				</div> <!-- Novelas Accordion End -->
			</div> <!-- Novelas Column End -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
