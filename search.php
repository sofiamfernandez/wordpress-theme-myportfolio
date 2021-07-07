<?php get_header(); ?>
<!-- Page Heading/Breadcrumbs -->
        <div class="bg-noticias page-breadcrumbs">
            <div class="container-fluid">
             <div class="row">
              <div class="text-center col-sm-12 middle" >
                <br>
                <h2 class="categoria middle"><a href="https://sofiamfernandez.com/"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/02/logo-e1549575967709.png" style="width: 270px;"></a></h2> 
                              
                </h2>
                
              </div>
             </div>
            </div>
        </div> 
        
        <!-- /.row -->
         <?php get_template_part('template-parts/nav'); ?>

<div class="container">
  <div class="row">
    <article class="col-lg-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('content','search'); ?>


			<?php endwhile; ?>
			<!-- post navigation -->
			<div class="navigation">
                          <p class="alignleft"><?php previous_posts_link( '<i class="fas fa-arrow-circle-left"></i> Últimos' ); ?></p>
                          <p class="justify-content-end"><?php next_posts_link( 'Anteriores <i class="fas fa-arrow-circle-right"></i>', '' ); ?></p>
                        </div>
			<?php else: ?>				
			<?php get_template_part('content','none'); ?>

			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
    </article>
		<div class="col-md-4">
          <?php
                dynamic_sidebar( 'sidebar' );
                ?>
                
    </div>
  </div>
</div>	
		
  <!-- FOOTER -->
		  <?php get_footer(); ?>


