<?php get_header(); ?>

         
        <!--BG PRINCIPAL-->
      <div class="bg-principal">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>         
            <div class="text-center col-lg-6 col-md-8 col-sm-10 middle" style="margin-top: 120px;" >  
              <h1 class="middle"><a href="<?php echo home_url(); ?>"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/02/logo-e1549575967709.png" class="logo img-responsive img-fluid" alt="logo"></a></h1>
              <br>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
          </div>
          <div class="row">
              <div class="text-center col-sm-12 middle input-group buscador">
                   <?php get_search_form() ?>
              </div>
             
          </div>
          
            <div class="text-center">
              <br>
              <ul class="redes-header social-network social-circle text-center"> 
                <li><a href="https://www.facebook.com/sofia.m.fernandez2019" target="_blank" class="icoFacebook" title="Facebook" style="margin-bottom: 8px;"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/sophieferdz/" target="_blank" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/sofia-m-fernandez-lacroux-54609059/" target="_blank" class="icoLinkedin" title="Linkedin" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
          
            </div>
          
        </div> 
      </div>  		
		    <!-- Nav principal -->
        <?php get_template_part('template-parts/nav') ?>  
        <div class="row"></div>
        <br>
        <!--SERVICIOS-->
        <section class="container servicios">
            <div class="row sv-list text-center">
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service" style="margin: 10px;padding: 10px;">
                            <div class="card-link-overlay"></div>
                            <figure class="card-figure">
                                <div class="card-icon service-icon">
                                    <i class="fas fa-pen"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="card-title service-title">DISEÑO Y MAQUETACIÓN WEB</h3>
                            </header>
                            <p class="card-text">Captá clientes en internet a través del diseño de un sitio dinámico, actualizado y utilizando los lenguajes de vanguardia en la web. Adaptá tus ideas a un diseño creativo.</p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service"style="margin: 10px;padding: 10px;">
                            <div class="card-link-overlay"></div>
                            <figure class="card-figure">
                                <div class="card-icon service-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="card-title service-title">RESPONSIVE WEB DESIGN</h3>
                            </header>
                            <p class="card-text">Presentá a tu público un sitio web adaptable a todos los dispositivos y fácil de visualizar en pantallas de diversos tamaños. Ajustá tu diseño a todos los dispositivos.</p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card-primary card-service"style="margin: 10px;padding: 10px;">
                            <div class="card-link-overlay"></div>
                            <figure class="card-figure">
                                <div class="card-icon service-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                            </figure>
                            <header class="card-header">
                                <h3 class="card-title service-title">SEO (Search Engine Optimization)</h3>
                            </header>
                            <p class="card-text">Obtené el mejor posicionamiento en los buscadores y sé la primera opción en Google. SEO optimiza tu página y hace a tu sitio más visible.</p>
                        </article>
                    </div>
          </div>
        <br>
        
        </section>
        
         <!-- Page Content -->
        
		<!-- PORTFOLIO -->
      <?php get_template_part('template-parts/portfolio') ?> 

    <!-- NOTICIAS -->
        
      <?php get_template_part('template-parts/noticias') ?>  

    <!-- FOOTER -->
		  <?php get_footer(); ?>
