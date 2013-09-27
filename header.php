<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage CELA_THEME
 * @since CELA THEME 1.0
 */
?><!DOCTYPE html>
<head>
	
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="UNAM">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/pushbutton_favicon.ico">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- Jquery comun -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src='<?php bloginfo('template_directory'); ?>/js/jquery.hoverIntent.minified.js'></script>
<script type="text/javascript" src='<?php bloginfo('template_directory'); ?>/js/jquery.dcverticalmegamenu.1.3.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/vertical-menu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/tamtexto.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav-v.js"></script>
<!-- Scripts de la galería del encabezado -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cross-slide.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function() {
    $('#slideshow').crossSlide({
      sleep: 2,
      fade: 1
    }, [
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/1.png' },
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/4.png' },
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/5.png' },
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/6.png' }
    ])
  });
</script>
<!-- Scripts para el fondo reajustable -->
<script src="<?php bloginfo('template_directory'); ?>/js/fondo-reajustable.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('#background').smartBackgroundResize({ image: "<?php bloginfo('template_directory'); ?>/images/fondo-rectoria-2.jpg"});
	});
</script>
<!-- Scripts galería principal -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery-1.5.3-ui.min.js" ></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/image-rotate.js"></script>
<style type="text/css">
	.cela-title{
		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/logo-n.png);
		background-repeat: no-repeat;
		height: 103px;
		min-width:200px;
		width: 31%;
		float: right;
	}
	.encabezado{
		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/background-header-middle.png);
		background-repeat: repeat-x;
		min-width: 1020px;
		width:100%;
		height: 103px;
		border: 0;
		margin: 0px auto;
	}
	.barra-amarilla {
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/barra-amarilla.png);
  		background-repeat: repeat-x;
  		width: 100%;
  		min-width: 1000px;
  		height:20px;
	}
	.inicio {
  		height:20px;
  		float:left;
  		margin: 0px 0px 0px 6%;	
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/social/inicio-hover.png);
  		background-repeat: no-repeat;
	}
	.facebook {
  		height:20px;
  		float:left;
  		margin: 0px 0px 0px 6%;	
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/social/facebook-hover.png);
  		background-repeat: no-repeat;
	}	
	.twitter {
  		height:20px;
  		float:left;
  		margin: 0px 0px 0px 6%;	
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/social/twitter-hover.png) ;
  		background-repeat: no-repeat;
	}	
	.blog {
  		height:20px;
  		float:left;
  		margin: 0px 0px 0px 6%;	
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/social/blog-hover.png) ;
  		background-repeat: no-repeat;
	}
	.contactanos {
  		height:20px;
  		float:left;
  		margin: 0px 0px 0px 6%;	 
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/social/contactanos-hover.png) ;
  		background-repeat: no-repeat;
	}
	.directorio {
  		height:20px;
  		float:left;
  		margin: 0px 0px 0px 6%;	
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/social/directorio-hover.png) ;
  		background-repeat: no-repeat;
	}	
	.foro {
  		height:20px;
  		float:left;
  		margin: 0px 0px 0px 6%;	
  		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/social/foro-hover.png) ;
  		background-repeat: no-repeat;
	}	
}
</style>

</head>


<body>

<!-- Fondo reajustable -->	
<div id="background"></div>

<!-- Termina fondo reajustable -->

<!-- Centra la pagina -->
<div class="main">

<!-- Encabezado -->
<div class='encabezado'>
    <a href='http://www.unam.mx' target='_blank'>
		<img src='<?php bloginfo('template_directory'); ?>/images/encabezado-unam.png' alt='Universidad Nacional Autónoma de México' />
	</a>    
	<div class='cela-title'>
	</div>
<!-- Rotacion de imagenes del encabezado --> 	
	<div id='slideshow'>
	</div>
</div>
<!-- Termina Encabezado -->



<!-- Barra amarilla -->

<div class='barra-amarilla'>
	<div class='inicio'>	
		<a href=' <?php echo home_url(); ?>' target='_self'>
		<img src='<?php bloginfo('template_directory'); ?>/images/social/inicio.png' alt='Inicio' /></a></div>
	<div class='foro'>	
		<a href='http://celaunam.foroactivo.mx' target='_blank'>
		<img src='<?php bloginfo('template_directory'); ?>/images/social/foro.png' alt='Foro' /></a></div>
	<div class='facebook'>	
		<a href='http://www.facebook.com/pages/Colegio-de-Estudios-Latinoamericanos-FFyL-UNAM/175150885860519' target='_blank'>
		<img src='<?php bloginfo('template_directory'); ?>/images/social/facebook.png' alt='Facebook' /></a></div>
    <div class='twitter'>	
		<a href='https://twitter.com/CELA_FFyL_UNAM' target='_blank'>
		<img src='<?php bloginfo('template_directory'); ?>/images/social/twitter.png' alt='Twitter' /></a></div>
    <div class='blog'>
		<a href='http://colegiodeestudioslatinoamericanos.blogspot.mx/' target='_blank'>
		<img src='<?php bloginfo('template_directory'); ?>/images/social/blog.png' alt='Blog' /></a></div>
	<div class='contactanos'>
		<a href='' target='_blank'>
		<img src='<?php bloginfo('template_directory'); ?>/images/social/contactanos.png' alt='Contáctanos' /></a></div>
	<div class='directorio'>
		<a href=' <?php echo home_url(); ?> /directorio-y-cuerpos-colegiados/'>
		<img src='<?php bloginfo('template_directory'); ?>/images/social/directorio.png' alt='Directorio' /></a></div>	
</div>



<!-- Menu principal -->

<div class='wrap' style='width:250px;'>
<div class='demo-container clear'>
<div class='test'>
<ul id='mega-1' class='mega-menu' style='width:250px;'>
	
<li><a>Licenciatura</a>
<ul>
<li><ul>
<li><a href=' <?php echo home_url(); ?>/descripcion-de-la-carrera/'>Descripción de la carrera</a></li>	
<li><a href=' <?php echo home_url(); ?>/plan-del-aspirante/'>Perfil del aspirante</a></li>
<li><a href=' <?php echo home_url(); ?>/perfil-del-egresado/'>Perfil del egresado</a></li>
<li><a href=' <?php echo home_url(); ?>/campo-laboral/'>Campo Laboral</a></li>
<li><a href=' <?php echo home_url(); ?>/plan-de-estudios/'>Plan de estudios</a></li>
</ul></li>
</ul></li>

<li><a>Colegio</a>
<ul>
<li><ul>
<li><a href=' <?php echo home_url(); ?>/coordinacion/'>Coordinación</a></li>
<li><a href=' <?php echo home_url(); ?>/que-es-el-cela/'>¿Que es el CELA?</a></li>
<li><a href=' <?php echo home_url(); ?>/directorio-y-cuerpos-colegiados/'>Directorio y cuerpos colegiados</a></li>
<li><a href=' <?php echo home_url(); ?>/publicaciones/'>Publicaciones</a></li>
<li><a href=' <?php echo home_url(); ?>/plan-docente/'>Plan docente</a></li>
</ul></li>
</ul></li>

<li><a href='http://galileo.filos.unam.mx/index.php' target='_blank'>Servicios Escolares</a>
<ul>
	
<li><a>Programación</a><ul>
<li><a href='http://servicios.galileo.filos.unam.mx/prog/' target='_blank'>Sistema Escolarizado y SUAyED (Abierto)</a></li>
<li><a href='http://suayed.galileo.filos.unam.mx/' target='_blank'>SUAyED (Distancia)</a></li>
</ul></li>

<li><a href='http://servicios.galileo.filos.unam.mx/calendario' target='_blank'>Calendario</a></li>
<li><a>Horarios Ordinarios</a>
<ul><li><a href='http://servicios.galileo.filos.unam.mx/horarios/ordinarios' target='_blank'>Sistema Escolarizado y SUAyED (Abierto)</a></li>
<li><a href='http://servicios.galileo.filos.unam.mx/horarios/distancia' target='_blank'>SUAyED (Distancia)</a></li>
</ul></li>

<li><a>Manuales</a>
<ul>
<li><a href='http://wikifilos.galileo.filos.unam.mx/wiki/Manual_ordinario' target='_blank'>Sistema Escolarizado y SUAyED (Abierto)</a></li>
<li><a href='http://wikifilos.galileo.filos.unam.mx/wiki/Extraordinarios' target='_blank'>SUAyED (Distancia)</a></li>
</ul></li>

<li><a href='http://sifyl.galileo.filos.unam.mx/registro/inicio.php' target='_blank'>Registro</a>
<ul>
<li><a href='http://servicios.galileo.filos.unam.mx/nip' target='_blank'>Cambio de NIP</a></li>
<li><a href='http://sifyl.galileo.filos.unam.mx/nip/' target='_blank'>Comprobación de NIP</a></li>
</ul></li>

</ul></li>

<li><a>Bibliotecas</a>
<ul>
	
<li><a>Bibliotecas UNAM</a><ul>
<li><a href='http://dgb.unam.mx/'>Dirección General de Bibliotecas UNAM</a></li>
<li><a href='http://bc.unam.mx/'>Biblioteca Central UNAM</a></li>
<li><a href='http://bnm.unam.mx/'>Biblioteca Nacional de México</a></li>
<li><a href='http://palas-atenea.filos.unam.mx/'>Facultad de Filosofía y Letras FFyL 'Samuel Ramos'</a></li>
<li><a href='http://www.economia.unam.mx/biblioteca/'>Facultad de Ciencias Políticas y Sociales FCPyS 'Isidro Fabela'</a></li>
</ul></li>

<li><a>Centros de Investigación UNAM</a><ul>
<li><a href='http://www.cialc.unam.mx/biblioteca.html'>Centro de Investigaciones sobre América Latina y el Caribe CIALC 'Simón Bolivar'</a></li>
<li><a href='http://www.cisan.unam.mx/biblioteca/index.php'>Centro de Investigación sobre América del Norte CISAN</a></li>
<li><a href='http://www.historicas.unam.mx/biblioteca/biblioteca.html'>Instituto de Investigaciones Históricas IIH</a></li>
<li><a href='http://www.filosoficas.unam.mx/~bib/'>Instituto de Investigaciones Filosóficas IIFs</a></li>
<li><a href='http://biblioteca.iiec.unam.mx/'>Instituto de Investigaciones Económicas IIEc</a></li>
<li><a href='http://www.filologicas.unam.mx/bibliorbn.htm'>Instituto de Investigaciones Filológicas IIFL</a></li>
</ul></li>

<li><a>Bibliotecas Externas</a><ul>
<li><a href='http://132.248.9.11/cgi-bin/nacional/multibase.pl'>Catálogo Nacional de Bibliotecas Académicas</a></li>
<li><a href='http://www.bibliotecavasconcelos.gob.mx/'>Biblioteca Vasconcelos</a></li>
<li><a href='http://mora.edu.mx/Docencia/Biblioteca/SitePages/Inicio.aspx'>Instituto Mora 'Ernesto de la Torre Villar'</a></li>
<li><a href='http://biblioteca.colmex.mx/'>Colegio de México 'Daniel Cosío Villegas'</a></li>
<li><a href='http://biblioteca.flacso.edu.mx/'>Facultad Latinoamericana de Ciencias Sociales FLACSO</a></li>
<li><a href='http://www.hacienda.gob.mx/cultura/museo_virtual_biblioteca_lerdo/index.htm'>Bilioteca Miguel Lerdo de Tejada</a></li>
<li><a href='http://www.historicas.unam.mx/'>Instituto de Investigaciones Históricas IIH</a></li>
<li><a href='http://recursos.filosoficas.unam.mx/~jrg/iifs/sitio/index.php'>Instituto de Investigaciones Filosóficas IIFs</a></li>
<li><a href='http://www.iiec.unam.mx/'>Instituto de Investigaciones Económicas IIEc</a></li>
<li><a href='http://filologicas.unam.mx/'>Instituto de Investigaciones Filológicas IIFL</a></li>
<li><a href='http://www.iia.unam.mx/'>Instituto de Investigaciones Antropológicas IIA</a></li>
</ul></li>


</ul></li>

<li><a>Enlaces</a>
<ul>
	
<li><a>Centros de Investigación</a><ul>
<li><a href='http://www.cialc.unam.mx/'>Centro de Investigaciones sobre América Latina y el Caribe CIALC</a></li>
<li><a href='http://www.politicas.unam.mx/cela/'>Centro de Estudios Latinoamericanos de la Facultad de Ciencias Políticas y Sociales</a></li>
<li><a href='http://www.ceiich.unam.mx/0/0000Home.html'>Centro de Investigaciones Interdisciplinarias en Ciencias y Humanidades CEIICH</a></li>
<li><a href='http://palas-atenea.filos.unam.mx/'>Instituto de Investigaciones sobre la Universidad y la Educación IISUE</a></li>
<li><a href='http://www.cisan.unam.mx/'>Centro de Investigaciones sobre América del Norte</a></li>
<li><a href='http://www.iis.unam.mx/'>Instituto de Investigaciones Sociales IIS</a></li>
</ul></li>


<li><a>Estudios Latinoamericanos en el Mundo</a><ul>
</ul></li>


<li><a>Idiomas</a><ul>	
</ul></li>

</ul></li>


<li><a>Acceso al Foro</a>
</li>


<li><a href=' <?php echo home_url(); ?>/cineclub'>Programación del Cineclub</a>
</li>

</ul>
</li>


</ul>
</div>
</div>
</div>	
