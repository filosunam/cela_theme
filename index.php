<?php
/**
 * The main template file.
 *
 * Template designed for CELA UNAM
 *
 * @package WordPress
 * @subpackage CELA_THEME
 */

get_header(); ?>

<!-- centro de la página-->


<div id='centro' >
	

<!-- Prara la página de cineclub Muestra solo posts referentes a la categoría de cineclub -->
	
<?php
if($pagename == '/cineclub/'){ ?>
	<div class='caja-titulo'>Programación del cineclub “Manuel González Casanova” *
	</div>

	
	<?php while ( have_posts() ) : the_post(); ?>
	
    <div class='caja-texto'>  	
	<?php the_content(); ?>
	</div>

   <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    
	<?php query_posts('tag=cineclub');
 		while (have_posts()) : the_post(); ?>
 		
 		 <div class='caja-texto'>
 		 <ul>
 		 <li>
		<a href="<?php the_permalink(); ?>" style="font-size: 16px;"rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		 </div> <!-- Fin de la caja de título -->
		 </li>
		 </ul>	 
 		<?php endwhile;}
       

/* Para todas las demás páginas excepto inicio*/

else{ ?>
		
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <div class='caja-titulo'>
   		 <div class="post-header">	 	
   		     <div class="date"><?php the_time( 'M j y' ); ?></div>
    		 <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>	 
       	 </div><!-- fin caja titulo-->	 
  		 </div><!--end post header-->	 
   			 <div class="entry clear">
        	  		<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        	 <div class='caja-texto'>  		
       	    		 <?php the_content(); ?>
       	    </div><!-- fin caja texto -->	
    			    <?php edit_post_link(); ?>
      				  <?php wp_link_pages(); ?>	  
		     </div><!--end entry-->
   			 <div class="post-footer">
  			 </div><!--end post footer--> 	
		</div><!--end post-->
			 <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
 			 <div class="navigation index">
   				 <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
   				 <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
 			 </div><!--end navigation-->
						<?php else : ?>
						<?php endif; ?>
		</div>
		<?php }; ?>
		
		

</div><!-- Final de centro -->	

<?php get_sidebar("general"); ?>	


<?php get_footer(); ?>
