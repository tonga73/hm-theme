<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

?>

<div class="col-sm-12 col-md-6 text-center">
	<?php
	the_post_thumbnail( 'large' );
	?>	
</div>

<div class="col-sm-12 col-md-6 align-self-center">
	<?php
	the_content();
	?>	
</div>

<div class="col-sm-12 align-self-center text-center p-5">
    <a type="button" title="Me gusta" class="btn btn-green ml-3"><i class="fas fa-thumbs-up"></i></a>
    <a href="http://devhm.com/" type="button" title="Descargar en PDF" class="btn btn-ccprimary btn ml-3"><i class="fas fa-home"></i>&nbsp;&nbsp;INICIO</a>
    <a href="http://devhm.com/libros/" type="button" title="Descargar en PDF" class="btn btn-ccprimary btn ml-3"><i class="fas fa-book"></i>&nbsp;&nbsp;LIBROS</a>
    <a type="button" title="Comprar" class="btn btn-main ml-3"><i class="fas fa-shopping-cart"></i></a>
</div>

<div class="col-sm-12">
	<button class="btn btn-back btn-lg p-3" onclick="goBack()"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Volver atrás</button>
</div>