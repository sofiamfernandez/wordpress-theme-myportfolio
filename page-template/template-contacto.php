<?php 
/*
 Template name: Página de contacto
*/
 ?>
 <?php get_header()?>
     <!-- Page Content -->
        <div class="bg-contacto page-breadcrumbs">
            <div class="container">
             <div class="row">
              <div class="text-center col-sm-12 middle" >
                <br>
                <h3 class="categoria middle"><a href="http://sofiamfernandez.com/category/noticias/"><img src="http://sofiamfernandez.com/wp-content/uploads/2019/05/contacto.png" style="width: 250px;"></a></h3>             
                <span class="linea middle">
                    <a href="<?php echo home_url(); ?>" class="breadcrumb-item">HOME</a> 
                    
                    <a href="<?php the_permalink (); ?>" class="breadcrumb-item active">CONTACTO</a>
                </span>
              </div>
            </div>
          </div> 
        </div>
    
    <br>

    <div class="container">
    <?php get_template_part('template-parts/nav'); ?>
          <div class="row">
        <div class="container">
        <p><a class="" href="javascript: history.go(-1)"><i class="fas fa-arrow-circle-left"></i>  VOLVER</a></p>
        </div>
      </div>

   <br>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="formulario col-md-6">

                <h3 class="text-center" style="font-family: 'Raleway';">DEJANOS TU MENSAJE</h3>
              
            

              <form class="text-center wpcf7-form" method="post" action="/contacto/#wpcf7-f499-o1" novalidate="novalidate" >
                        
                  
               <?php
                the_content( 'contacto' );
                ?> 
                </form>
            </div>

            <style type="text/css">
                input {
                    overflow: hidden !important;
                    width: 90%;
                }
            </style>

        
        <!-- /.row -->
        <!-- Content Row -->
        
            <!-- Map Column -->
            <div class="col-md-6">
                <img class="img-fluid img-responsive" src="https://sofiamfernandez.com/wp-content/uploads/2019/12/contacto.jpg" alt="responsive">
                <br>
                <h3 class="text-center" style="font-family: 'Raleway'; margin-top: 25px;" >DATOS DE CONTACTO</h3>
                <p class="text-center" style="color: pink;font-size: 1.2rem;"><i class="fab fa-whatsapp" ></i><abbr title="teléfono"></abbr> +33 06 65 67 83 19 </p>
                <p class="text-center" style="color: pink;font-size: 1.2rem;"><i class="fas fa-envelope" ></i><abbr title="Email"></abbr><a href="mailto:contacto@sofiamfernandez.com" target="_blank" > contacto@sofiamfernandez.com</a>
                </p>
                <div class="text-center d-flex flex-column align-items-start">
                   <a href="https://forms.gle/MLp5GJKwJweWca8B7" target="_blank" role="button" class="btn mx-auto d-block">TRABAJA CON NOSOTROS</a>
                </div>
            </div> 
            <!-- Contact Details Column -->
        </div>
        

    <br>

    </div>
 <?php get_footer(); ?>