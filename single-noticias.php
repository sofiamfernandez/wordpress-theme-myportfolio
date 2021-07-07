<?php get_header(); ?>


        <div class="bg-noticias page-breadcrumbs">
            <div class="container">
              <div class="row">
              <div class="text-center col-sm-12 middle" >
                <br>
                <h3 class="py-3 categoria linea" style="font-family:'Raleway';font-size: 2.5rem;"><?php the_title(); ?></h3>             
                <span class="linea middle">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">HOME</a> 
                    <a href="" class="breadcrumb-item active"><?php the_category('12');?> / </a>
                    <a href="<?php the_permalink (); ?>" class="breadcrumb-item active"><?php the_title(); ?></a>
                    <br>
                </span>
              </div>
            </div>
          </div>
        </div>
    
    <br>
    
    <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
      <figure class="text-center img-fluid img-responsive">
               <?php the_post_thumbnail('full', 
                 array(
                 'class' => 'img-responsive img-fluid',
                 'style' => 'width: auto; height:auto;'
                )
                  ); ?>
      </figure>
    </div>
    </div>
    </div>
    <div class="container">
     
     <?php get_template_part('template-parts/nav'); ?>
      <div class="row">
        <div class="container">
        <p><a class="" href="javascript: history.go(-1)"><i class="fas fa-arrow-circle-left"></i>  VOLVER</a></p>
        </div>
      </div>
     <div class="row py-2">
      

      <section class="col-xs-12 col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
      
          <article class="article">
                        
              
              

              <header class="">                  
                <h2 class="titulo-centrado card-title service-title"><a href="<?php the_permalink (); ?>" ><?php the_title(); ?></a></h2>
              </header>
                      <p>  <?php the_date(); ?> | <span class=""><small class=""><i class="fas fa-tag"></i>  <?php the_tags();?></small> </span> </p>
                      <p class="card-text parrafo parrafo-noticia"><?php the_content(); ?></p>
                      
           
          </article>
          
          <?php endwhile; else : ?>
          <article>
            <p>¡Lo sentimos! La publicación no está disponible</p>
          </article>
          <?php endif; ?>
      </section>
            <div class="col-lg-4">
                         <?php
                dynamic_sidebar( 'sidebar' );
                ?>
            <hr>
            </div>
    </div>
    </div>
 

          <?php get_footer(); ?>