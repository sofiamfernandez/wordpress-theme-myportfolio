<?php get_header()?>
 
<!-- Page Content -->
        

        <!-- Page Heading/Breadcrumbs -->
        <div class="bg-noticias page-breadcrumbs">
            <div class="container">
             <div class="row">
              <div class="text-center col-sm-12 middle" >
                <br>
                <h2 class="categoria middle"><a href="https://sofiamfernandez.com/category/noticias/"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/05/infogeekblanco.png" style="width: 270px;"></a></h2>              
                </h2>
                <span class="linea middle">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">HOME</a>
                    <a href="" class="breadcrumb-item">TAG </a>  
                    <a href="" class="breadcrumb-item active"><?php single_tag_title(); ?> </a>
                </span>
              </div>
             </div>
            </div>
        </div> 
    <div class="container">
        <!-- /.row -->
         <?php get_template_part('template-parts/nav'); ?>
               <div class="row">
        <div class="container">
        <p><a class="" href="javascript: history.go(-1)"><i class="fas fa-arrow-circle-left"></i>  VOLVER</a></p>
        </div>
      </div>
         <div class="row py-3">

                       
            <!--FUNCIÓN DE LOOP-->
            <section class="col-xs-12 col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">

             <span class="">ETIQUETA: <small class="btn"> <?php single_tag_title(); ?></small></span>

            
            </article>
       


              <?php if (have_posts()): while(have_posts()): the_post(); ?>
              <?php if ( in_category('12')) { ?>
                <article class="row article-full py-2">
                    <figure class="card-figure col-lg-6">
                       <a href="<?php the_permalink (); ?>" >
                     

                          <?php the_post_thumbnail('large', 
                          array(
                            'class' => 'img-thumbnail img-responsive img-fluid text-center if-image',
                            'style' => 'width:100%;')
                            ); ?>
                                 
                       </a>
                    </figure>       
                    <div class="col-md-6">
                      
                      <header class="">                  
                        <h3 class="titulo-centrado card-title service-title"><a href="<?php the_permalink (); ?>" ><?php the_title(); ?></a></h3>
                      </header>
                      <p><?php the_date(); ?></p>
                      <span class="py-2"><small class=""><?php the_tags();?></small></span>
                      <p class="card-text py-2"><?php excerpt('20'); ?><a href="<?php the_permalink(); ?>" class="link">Ver más...</a></p>
                            
                    </div>
                
                </article>
                <hr> 
                    <?php } ?>
                    <?php endwhile;    ?>
<!--                         <p class="navigation justify-content-end">
                          <?php posts_nav_link('&amp;','<span class=""><i class="fas fa-arrow-circle-left"></i> Últimas noticias </span>','<span> Más noticias <i class="fas fa-arrow-circle-right"></i></span>') ?>
                        </p>  -->
                        <div class="navigation">
                          <p class="alignleft"><?php previous_posts_link( '<i class="fas fa-arrow-circle-left"></i> Últimas noticias' ); ?></p>
                          <p class="justify-content-end"><?php next_posts_link( 'Más noticias <i class="fas fa-arrow-circle-right"></i>', '' ); ?></p>
                        </div>

                    <?php else: ?>
                        <!--Not post found-->   
                    <?php get_template_part('content','none'); ?>

                    <?php endif; ?>
                    
                    <?php wp_reset_postdata();?> 
                                 
                                
            </section>
            <div class="col-lg-4">
              <div>
                  <?php
                dynamic_sidebar( 'sidebar' );
                ?>
              </div>
            <hr>    

          </div> 
        </div>
        
      </div>
    <!-- /.container -->
      
   
 


 <?php get_footer(); ?>