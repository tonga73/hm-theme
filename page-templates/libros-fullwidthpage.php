<?php
/**
 * Template Name: Página Libros Full
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="libros-page-wrapper">
	<nav>
	  <div class="nav nav-tabs justify-content-center bg-dgreen" id="nav-tab" role="tablist">
	    <a class="nav-item nav-link active" id="nav-todos-tab" data-toggle="tab" href="#nav-todos" role="tab" aria-controls="nav-todos" aria-selected="true"><h5>Todos</h5></a>
	    <a class="nav-item nav-link" id="nav-cuentos-tab" data-toggle="tab" href="#nav-cuentos" role="tab" aria-controls="nav-cuentos" aria-selected="false"><h5>Cuentos</h5></a>
	    <a class="nav-item nav-link" id="nav-novelas-tab" data-toggle="tab" href="#nav-novelas" role="tab" aria-controls="nav-novelas" aria-selected="false"><h5>Novelas</h5></a>
	  </div>
	</nav> 
	<div class="tab-content" id="nav-tabContent">
	  <!-- TODO TAB -->
	  <div class="tab-pane fade show active" id="nav-todos" role="tabpanel" aria-labelledby="nav-todos-tab">
	    <ul class="nav nav-tabs justify-content-around" id="todosTab" role="tablist">
	      <li class="nav-item">
	        <a class="nav-link active" id="todoTodo-tab" data-toggle="tab" href="#todoTodo" role="tab" aria-controls="todoTodo" aria-selected="true">Todo</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoAbsurdo-tab" data-toggle="tab" href="#todoAbsurdo" role="tab" aria-controls="todoAbsurdo" aria-selected="false">Absurdo</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoAventura-tab" data-toggle="tab" href="#todoAventura" role="tab" aria-controls="todoAventura" aria-selected="false">Aventuras y Humor</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoCienciaFiccion-tab" data-toggle="tab" href="#todoCienciaFiccion" role="tab" aria-controls="todoCienciaFiccion" aria-selected="false">Ciencia Ficción</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoGeneroNegro-tab" data-toggle="tab" href="#todoGeneroNegro" role="tab" aria-controls="todoGeneroNegro" aria-selected="false">Género Negro</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoMundoMedico-tab" data-toggle="tab" href="#todoMundoMedico" role="tab" aria-controls="todoMundoMedico" aria-selected="false">Mundo Médico</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoMundoNeurotico-tab" data-toggle="tab" href="#todoMundoNeurotico" role="tab" aria-controls="todoMundoNeurotico" aria-selected="false">Mundo Neurótico</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoProyectoAnimal-tab" data-toggle="tab" href="#todoProyectoAnimal" role="tab" aria-controls="todoProyectoAnimal" aria-selected="false">Proyecto Animal</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoTerror-tab" data-toggle="tab" href="#todoTerror" role="tab" aria-controls="todoTerror" aria-selected="false">Terror</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="todoTerrorFant-tab" data-toggle="tab" href="#todoTerrorFant" role="tab" aria-controls="todoTerrorFant" aria-selected="false">Terror y Fantasía</a>
	      </li>
	    </ul>
	    <div class="tab-content" id="librosCards">
	        <div class="tab-pane fade show active" id="todoTodo" role="tabpanel" aria-labelledby="todoTodo-tab">
	            <div class="container-fluid">
	                <div class="row">
	                    <div id="libroCard" class="col-sm-12 col-md-6">
	                        <div class="row">
	                            <a id="libroTitle" href="<?php the_permalink(137); ?>" class="col-sm-12 text-center">
	                                <h4 class="m-0"><?php echo get_the_title( 137 ); ?></h4>
	                                <div class="arrow-down m-auto"></div>
	                            </a>
	                            <div class="col-sm-12 col-md-8 align-self-center">
	                                <?php 
	                                $id=137; 
	                                $post = get_post($id); 
	                                $content = apply_filters('the_content', $post->post_content);
	                                 echo $content;  
	                                ?>    
	                            </div>
	                            <div class="col-sm-12 col-md-4 align-self-center">
	                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
	                            </div>
	                        </div>
	                    </div>
	                    <div id="libroCard" class="col">
	                        <div class="row">
	                            <a id="libroTitle" href="<?php the_permalink(150); ?>" class="col-sm-12 text-center">
	                                <h4 class="m-0"><?php echo get_the_title( 150 ); ?></h4>
	                                <div class="arrow-down m-auto"></div>
	                            </a>
	                            <div class="col-sm-12 col-md-8 align-self-center">
	                                <?php 
	                                $id=150; 
	                                $post = get_post($id); 
	                                $content = apply_filters('the_content', $post->post_content); 
	                                echo $content;  
	                                ?>    
	                            </div>
	                            <div class="col-sm-12 col-md-4 align-self-center">
	                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
	                            </div>
	                        </div>
	                    </div>
	                    <div id="libroCard" class="col-sm-12 col-md-6">
	                        <div class="row">
	                            <a id="libroTitle" href="<?php the_permalink(137); ?>" class="col-sm-12 text-center">
	                                <h4 class="m-0"><?php echo get_the_title( 137 ); ?></h4>
	                                <div class="arrow-down m-auto"></div>
	                            </a>
	                            <div class="col-sm-12 col-md-8 align-self-center">
	                                <?php 
	                                $id=137; 
	                                $post = get_post($id); 
	                                $content = apply_filters('the_content', $post->post_content);
	                                 echo $content;  
	                                ?>    
	                            </div>
	                            <div class="col-sm-12 col-md-4 align-self-center">
	                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
	                            </div>
	                        </div>
	                    </div>
	                    <div id="libroCard" class="col">
	                        <div class="row">
	                            <a id="libroTitle" href="<?php the_permalink(150); ?>" class="col-sm-12 text-center">
	                                <h4 class="m-0"><?php echo get_the_title( 150 ); ?></h4>
	                                <div class="arrow-down m-auto"></div>
	                            </a>
	                            <div class="col-sm-12 col-md-8 align-self-center">
	                                <?php 
	                                $id=150; 
	                                $post = get_post($id); 
	                                $content = apply_filters('the_content', $post->post_content); 
	                                echo $content;  
	                                ?>    
	                            </div>
	                            <div class="col-sm-12 col-md-4 align-self-center">
	                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
	                            </div>
	                        </div>
	                    </div>
	                </div>        
	            </div>
	        </div>

	      <div class="tab-pane fade" id="todoAbsurdo" role="tabpanel" aria-labelledby="todoAbsurdo-tab">...</div>
	      <div class="tab-pane fade" id="todoAventura" role="tabpanel" aria-labelledby="todoAventura-tab">...</div>
	      <div class="tab-pane fade" id="todoCienciaFiccion" role="tabpanel" aria-labelledby="todoCienciaFiccion-tab">...</div>
	      <div class="tab-pane fade" id="todoGeneroNegro" role="tabpanel" aria-labelledby="todoGeneroNegro-tab">...</div>
	      <div class="tab-pane fade" id="todoMundoMedico" role="tabpanel" aria-labelledby="todoMundoMedico-tab">...</div>
	      <div class="tab-pane fade" id="todoMundoNeurotico" role="tabpanel" aria-labelledby="todoMundoNeurotico-tab">...</div>
	      <div class="tab-pane fade" id="todoProyectoAnimal" role="tabpanel" aria-labelledby="todoProyectoAnimal-tab">...</div>
	      <div class="tab-pane fade" id="todoTerror" role="tabpanel" aria-labelledby="todoTerror-tab">...</div>
	      <div class="tab-pane fade" id="todoTerrorFant" role="tabpanel" aria-labelledby="todoTerrorFant-tab">...</div>
	    </div>
	  </div>
	  <!-- CUENTOS TAB -->
	  <div class="tab-pane fade" id="nav-cuentos" role="tabpanel" aria-labelledby="nav-cuentos-tab">
	    <ul class="nav nav-tabs justify-content-around" id="cuentosTab" role="tablist">
	      <li class="nav-item">
	        <a class="nav-link active" id="cuentosTodo-tab" data-toggle="tab" href="#cuentosTodo" role="tab" aria-controls="cuentosTodo" aria-selected="true">Todo</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="cuentosAbsurdo-tab" data-toggle="tab" href="#cuentosAbsurdo" role="tab" aria-controls="cuentosAbsurdo" aria-selected="false">Absurdo</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="cuentosAventura-tab" data-toggle="tab" href="#cuentosAventura" role="tab" aria-controls="cuentosAventura" aria-selected="false">Aventuras y Humor</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="cuentosCienciaFiccion-tab" data-toggle="tab" href="#cuentosCienciaFiccion" role="tab" aria-controls="cuentosCienciaFiccion" aria-selected="false">Ciencia Ficción</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="cuentosMundoMedico-tab" data-toggle="tab" href="#cuentosMundoMedico" role="tab" aria-controls="cuentosMundoMedico" aria-selected="false">Mundo Médico</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="cuentosMundoNeurotico-tab" data-toggle="tab" href="#cuentosMundoNeurotico" role="tab" aria-controls="cuentosMundoNeurotico" aria-selected="false">Mundo Neurótico</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="cuentosProyectoAnimal-tab" data-toggle="tab" href="#cuentosProyectoAnimal" role="tab" aria-controls="cuentosProyectoAnimal" aria-selected="false">Proyecto Animal</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="cuentosTerror-tab" data-toggle="tab" href="#cuentosTerror" role="tab" aria-controls="cuentosTerror" aria-selected="false">Terror</a>
	      </li>
	    </ul>
	    <div class="tab-content" id="librosCards">
	        <div class="tab-pane fade show active" id="cuentosTodo" role="tabpanel" aria-labelledby="cuentosTodo-tab">
	            <div class="container-fluid">
					TAB CUENTOS      
	            </div>
	        </div>

	      <div class="tab-pane fade" id="cuentosAbsurdo" role="tabpanel" aria-labelledby="cuentosAbsurdo-tab">TAB CUENTOS ABSURDO</div>
	      <div class="tab-pane fade" id="cuentosAventura" role="tabpanel" aria-labelledby="cuentosAventura-tab">TAB CUENTOS AVENTURA</div>
	      <div class="tab-pane fade" id="cuentosCienciaFiccion" role="tabpanel" aria-labelledby="cuentosCienciaFiccion-tab">TAB CUENTOS CIENCIA FICCION</div>
	      <div class="tab-pane fade" id="cuentosMundoMedico" role="tabpanel" aria-labelledby="cuentosMundoMedico-tab">TAB CUENTOS MUNDO MEDICO</div>
	      <div class="tab-pane fade" id="cuentosMundoNeurotico" role="tabpanel" aria-labelledby="cuentosMundoNeurotico-tab">TAB CUENTOS MUNDO NEUROTICO</div>
	      <div class="tab-pane fade" id="cuentosProyectoAnimal" role="tabpanel" aria-labelledby="cuentosProyectoAnimal-tab">TAB CUENTOS PROYECTO ANIMAL</div>
	      <div class="tab-pane fade" id="cuentosTerror" role="tabpanel" aria-labelledby="cuentosTerror-tab">TAB CUENTOS TERROR</div>
	    </div> 
	   </div>
	   <!-- NOVELAS TAB -->
	  <div class="tab-pane fade" id="nav-novelas" role="tabpanel" aria-labelledby="nav-novelas-tab">
	    <ul class="nav nav-tabs justify-content-around" id="novelasTab" role="tablist">
	      <li class="nav-item">
	        <a class="nav-link active" id="novelasTodo-tab" data-toggle="tab" href="#novelasTodo" role="tab" aria-controls="novelasTodo" aria-selected="true">Todo</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="novelasAbsurdo-tab" data-toggle="tab" href="#novelasAbsurdo" role="tab" aria-controls="novelasAbsurdo" aria-selected="false">Absurdo</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="novelasGeneroNegro-tab" data-toggle="tab" href="#novelasGeneroNegro" role="tab" aria-controls="novelasGeneroNegro" aria-selected="false">Género Negro</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="novelasTerrorFant-tab" data-toggle="tab" href="#novelasTerrorFant" role="tab" aria-controls="novelasTerrorFant" aria-selected="false">Terror y Fantasía</a>
	      </li>
	    </ul>
	    <div class="tab-content" id="librosCards">
	        <div class="tab-pane fade show active" id="novelasTodo" role="tabpanel" aria-labelledby="novelasTodo-tab">
	            <div class="container-fluid">
	               	TAB NOVELAS     
	            </div>
	        </div>

	      <div class="tab-pane fade" id="novelasAbsurdo" role="tabpanel" aria-labelledby="novelasAbsurdo-tab">TAB NOVELAS ABSURDO</div>
	      <div class="tab-pane fade" id="novelasGeneroNegro" role="tabpanel" aria-labelledby="novelasGeneroNegro-tab">TAB NOVELAS GÉNERO NEGRO</div>
	      <div class="tab-pane fade" id="novelasTerrorFant" role="tabpanel" aria-labelledby="novelasTerrorFant-tab">TAB NOVELAS TERROR Y FANTASÍA</div>
	    </div>
	  </div>
	</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
