


<div class="container">
  <div class="row">
    
    <nav class="col-lg-12 navbar text-center justify-content-between navbar-expand-lg">

      <button class="navbar-toggler ml-auto navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

              
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <?php

                      wp_nav_menu(array(
                        
                        'theme_location' => 'nav-top',
                        'depth'          => 2,
                        'container'      => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'   => 'navbarSupportedContent',
                        'menu_class'     => 'nav navbar-nav text-center nav-principal mx-auto d-sm-flex d-block flex-sm-nowrap',
                        'aria-current'   => 'true',
                        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'         => new WP_Bootstrap_Navwalker())

                      );

                    ?>
        
      </div>
    </nav>    
  </div>
</div>