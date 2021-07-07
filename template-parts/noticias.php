
    <!--NOTICIAS-->
        <section class="container">
            <hr>
           <div class="row">
             <div class="col-md-6 text-center" >
               <img class="img-responsive img-fluid text-center if-image" style="width: 370px;" src="https://sofiamfernandez.com/wp-content/uploads/2020/01/59888-scaled.jpg">
             </div> 
             <article class="col-md-6 text-center">
               <h2 style="font-family:'Raleway';">¿Necesitás un presupuesto? ¡CONTACTANOS!</h2>
               <p class="lead my-3">Si querés armar tu web personal o modificar la de tu empresa, enviá tu consulta a través de nuestro formulario web y nos pondremos en contacto con vos.</p>
               <span class="text-center d-flex flex-column align-items-start">
                 <a class="btn mx-auto d-block text-white" href="https://sofiamfernandez.com/contacto/" >CONTACTO</a>
               </span>
             </article>
                                   
           </div>
          <hr>
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header text-center"><a href="https://sofiamfernandez.com/category/noticias/"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/05/infogeek.png" style="width: 250px;"></a></h2>
              </div>
              <br>
              <br>
          </div>
                  

          <div class="row sv-list text-center bg-light">
<?php
// Parámetros de la consulta
$arg = array (
        'posts_per_page' => 3,
        'category_name' => 'noticias',
       );
 
// Creamos un objeto WP_Query 
$entradas = new WP_Query ($arg);
 
// Si tenemos entradas en nuestro objeto...
  if ($entradas->have_posts()): while($entradas->have_posts()):  $entradas->the_post(); ?>

              <?php if ( in_category('12')) { ?>   
            <div class="col-lg-4 col-md-6 espacio">
              <article class="card-primary card-service">
                
                <figure class="img-responsive">
                    <a href="<?php the_permalink (); ?>" >
                     

                          <?php the_post_thumbnail('large', 
                          array(
                            'class' => 'img-responsive img-fluid text-center if-image',
                            'style' => 'width:100%;')
                            ); ?>
                                 
                    </a>
                </figure>
                <span class=""><small class=""><?php the_tags();?></small></span>
                <header class="card-header espacio-header">                  
                    <h4 class="titulo-centrado espacio-noticias card-title service-title"><a href="<?php the_permalink (); ?>" ><?php the_title(); ?></a></h4>
                </header>
                 
                <p class="card-text espacio-texto"><?php excerpt('15'); ?><a href="<?php the_permalink(); ?>" class="link">Ver más...</a></p>
               </article>    
              </div>
              
           

            <?php } ?>
          <?php $i++; endwhile;  ?> 
          </div>      
                <?php else: ?>
                <!--Not post found-->   
                <?php get_template_part('content','none'); ?>

                <?php endif; ?>
                <?php wp_reset_postdata();?>       
          
          <br>
          <div class="row">
            <div class="col-md-12">
              <span class="text-center d-flex flex-column align-items-start">
                  <a href="https://sofiamfernandez.com/category/noticias/" class="btn mx-auto d-block" role="button">VER MÁS NOTICIAS</a>
              </span>
            </div>
          </div>
              <br>
                 
      </section>