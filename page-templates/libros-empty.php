<?php
/**
 * Template Name: Página Libros
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();?>
<nav>
  <div class="nav nav-tabs justify-content-center pt-1 bg-dgreen" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-todos-tab" data-toggle="tab" href="#nav-todos" role="tab" aria-controls="nav-todos" aria-selected="true">Todo</a>
    <a class="nav-item nav-link" id="nav-cuentos-tab" data-toggle="tab" href="#nav-cuentos" role="tab" aria-controls="nav-cuentos" aria-selected="false">Cuentos</a>
    <a class="nav-item nav-link" id="nav-novelas-tab" data-toggle="tab" href="#nav-novelas" role="tab" aria-controls="nav-novelas" aria-selected="false">Novelas</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-todos" role="tabpanel" aria-labelledby="nav-todos-tab">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo" role="tab" aria-controls="todo" aria-selected="true">Todo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="terror-tab" data-toggle="tab" href="#terror" role="tab" aria-controls="terror" aria-selected="false">Terror</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="aventura-tab" data-toggle="tab" href="#aventura" role="tab" aria-controls="aventura" aria-selected="false">Aventura y Fantasía</a>
      </li>
    </ul>
    <div class="tab-content" id="rotateCards">
        <div class="tab-pane fade show active" id="todo" role="tabpanel" aria-labelledby="todo-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h5 class="p-3 text-muted"><?php echo get_the_title( 137 ); ?></h5>
                            </div>
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
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h5 class="p-3 text-muted"><?php echo get_the_title( 150 ); ?></h5>
                            </div>
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

      <div class="tab-pane fade" id="terror" role="tabpanel" aria-labelledby="terror-tab">...</div>
      <div class="tab-pane fade" id="aventura" role="tabpanel" aria-labelledby="aventura-tab">...</div>
      </div>
    </div>
  <div class="tab-pane fade" id="nav-cuentos" role="tabpanel" aria-labelledby="nav-cuentos-tab">+++</div>
  <div class="tab-pane fade" id="nav-novelas" role="tabpanel" aria-labelledby="nav-novelas-tab">+++</div>
</div>

<?php
get_footer();
