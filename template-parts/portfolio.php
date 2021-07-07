

<div class="container">
   <div class="row">
      <div class="col-lg-12">
        <h2 class="page-header text-center"><a href="https://sofiamfernandez.com/category/portfolio/"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/05/mistrabajos.png" style="width: 250px;"></a></h2>
      </div>
              <br>
              <br>
    </div>
    <div class="row container-a4">
      <?php
// Parámetros de la consulta
$arg = array (
        'posts_per_page' => 6,
        'category_name' => 'portfolio',
       );
 
// Creamos un objeto WP_Query 
$entradas = new WP_Query ($arg);
 
// Si tenemos entradas en nuestro objeto... 

if ($entradas->have_posts()): while($entradas->have_posts()):  $entradas->the_post(); ?>

              <?php if ( in_category('15')) { ?>
              <article class="caption-style-4 column article-full col-md-6 col-sm-12" style="margin-top: 30px;">
                <figcaption>
                  <figure>
                      <a href="<?php the_permalink (); ?>" >
                       

                            <?php the_post_thumbnail('large', 
                            array(
                              'class' => 'img-responsive img-fluid text-center if-image',
                              'style' => 'width:100%;')
                              ); ?>
                                   
                      </a>
                  </figure>
                  <div class="caption ver-p">
                    <div class="blur"><a href="<?php the_permalink (); ?>" ></div>
                    <div class="caption-text d-flex flex-column align-items-start">
                      <span class="btn mx-auto d-block" style="font-style: 'Raleway';outline: none;"><i class="fas fa-search-plus"></i> VER PROYECTO</span>
                    </div>
                  </div>
                </figcaption>
                <br>
                        
              </article>
          
                   <?php } ?>
                 <?php endwhile;  ?>
              

                <?php else: ?>
                <!--Not post found-->   
                <?php get_template_part('content','none'); ?>

                <?php endif; ?>
                <?php wp_reset_postdata();?>
            
          
      </div>
      <br>
          <div class="row">
            <div class="col-md-12 text-center d-flex flex-column align-items-start">
              <span class="text-center d-flex flex-column align-items-start">
                  <a href="https://sofiamfernandez.com/category/portfolio/" class="btn mx-auto d-block" role="button">VER MÁS PROYECTOS</a>
              </span>
            </div>
          </div>
              <br>
  </div>