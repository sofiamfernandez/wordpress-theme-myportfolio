<?php get_header(); ?>


        <div class="bg-noticias page-breadcrumbs">
            <div class="container">
              <div class="row">
              <div class="text-center col-sm-12 middle" >
                <br>
                <h3 class="categoria middle" style="font-family:'Raleway'; font-size: 2rem;"><?php the_title(); ?></h3>             
                <span class="linea middle">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">HOME</a> 
                    <a href="" class="breadcrumb-item active"><?php the_category('15');?> / </a>
                    <a href="<?php the_permalink (); ?>" class="breadcrumb-item active"><?php the_title(); ?></a>
                    <br>
                    <div  style="margin-top: 15px;"><?php get_search_form() ?></div>
                </span>
              </div>
            </div>
          </div>
        </div> 
    
    <br>
    <div class="container">
    <div class="row text-center">
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
    <div class="container">

     <?php get_template_part('template-parts/nav'); ?>
      <div class="row">
        <div class="container">
        <p><a class="" href="javascript: history.go(-1)"><i class="fas fa-arrow-circle-left"></i>  VOLVER</a></p>
        </div>
      </div>
     <div class="row">
      
      <section class="col-lg-12">
      
          <article class="article-full">
                        
                          

              <header class="">                  
                <h3 class="titulo-centrado card-title service-title"><a href="<?php the_permalink (); ?>" ><?php the_title(); ?></a></h3>
              </header>
                      <p><?php the_date(); ?> | <span class=""><small class=""><i class="fas fa-tag"></i>  <?php the_tags();?></small> </span> </p>
                      <p class="card-text parrafo"><?php the_content(); ?></p>
                   
          </article>
        
          <?php endwhile; else : ?>
          <article>
            <p>¡Lo sentimos! La publicación no está disponible</p>
          </article>
          <?php endif; ?>
      </section>
    </div>
    </div>
  </div>
          <?php get_footer(); ?>