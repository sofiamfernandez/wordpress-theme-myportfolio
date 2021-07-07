<?php get_header()?>
 
<!-- Page Content -->
    

        <!-- Page Heading/Breadcrumbs -->
        <div class="bg-trabajos page-breadcrumbs">
            <div class="container-fluid">
              <div class="row">
              <div class="text-center col-sm-12 middle" >
                <br>
                <h2 class="catogoria middle"><a href="https://sofiamfernandez.com/category/portfolio/"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/05/mistrabajosblanco.png" style="width: 270px;"></a></h2>
                <span class="linea middle">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">HOME</a> 
                    <a href="" class="breadcrumb-item active"><?php single_cat_title();?></a>
                </span>
              </div>
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
        </div>
        <br> 
        <!--SERVICIOS PORTFOLIO --> 
          <section class="container servicios">
            <div class="row sv-list text-center">
                    <div class="col-lg-3 col-md-6">
                        <article class="card-primary card-service" style="margin: 10px;padding: 10px;">
                            
                            <figure class="card-figure">
                                <div class="card-icon service-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="card-title service-title">BOOTSTRAP 4</h3>
                            </header>
                            <p class="card-text">Bootstrap es uno de los frameworks más populares para programar con HTML, CSS y JS.</p>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="card-primary card-service"style="margin: 10px;padding: 10px;">
                           
                            <figure class="card-figure">
                                <div class="card-icon service-icon">
                                    <i class="fab fa-js-square"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="card-title service-title">JAVASCRIPT</h3>
                            </header>
                            <p class="card-text">Es el sistema de programación de scripts más utilizado en páginas interactivas y en servidores a través de Node.js.</p>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="card-primary card-service"style="margin: 10px;padding: 10px;">
                            
                            <figure class="card-figure">
                                <div class="card-icon service-icon">
                                    <i class="fab fa-wordpress-simple"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="card-title service-title">WORDPRESS</h3>
                            </header>
                            <p class="card-text">Es un sistema de gestión de contenidos, (en inglés, Content Management System o CMS). </p>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="card-primary card-service"style="margin: 10px;padding: 10px;">
                            
                            <figure class="card-figure">
                                <div class="card-icon service-icon">
                                    <i class="fa fa-database"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="card-title service-title">MYSQL</h3>
                            </header>
                            <p class="card-text">MySQL es un sistema de gestión de bases de datos.</p>
                        </article>
                    </div>
          </div>
        <br>
      
        </section>
          
                    
        
 
		
      		<!-- PORTFOLIO -->
       <div class="container">
          <div class="row container-a4">
            
              <?php if (have_posts()): while(have_posts()): the_post(); ?>
              <?php if ( in_category('15')) { ?>
              <article class="caption-style-4 py-3 column article-full col-md-6 col-sm-12">
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
                    <a href="<?php the_permalink (); ?>">
                    <div class="blur"></div>
                    <div class="caption-text d-flex flex-column align-items-start">

                      <span class="btn mx-auto d-block" style="font-style: 'Raleway';outline: none;"><i class="fas fa-search-plus"></i> VER PROYECTO</span>
                    </div>
                  </a>
                  </div>
                </figcaption>

              </article>
             
                     
                  <?php } ?>
                        <?php endwhile;    ?>
            </div>
          </div>
                        <!--posts navigation -->
                    
                     <div class="container"> 
                      <div class="row">
                        <div class="col-sm-12 text-center">
                        
                          <p class="alignleft"><?php previous_posts_link( '<i class="fas fa-arrow-circle-left"></i> Últimos proyectos' ); ?></p>
                          <p class="alignright"><?php next_posts_link( 'Más proyectos <i class="fas fa-arrow-circle-right"></i>'); ?></p>
                        </div>
                      </div>
                      </div>
                        <?php else: ?>
                        <!--Not post found-->   
                        <?php get_template_part('content','none'); ?>

                        <?php endif; ?>
                        <?php wp_reset_postdata();?>    
                                     
 
              <!-- /.row -->

              <!-- Features Section -->

     
      
    
    <!-- /.container -->




 <?php get_footer(); ?>