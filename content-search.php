               
               <span class=""><small class=""><?php the_tags();?></small></span>
	           <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	           <p><?php the_date(); ?></p>
	           
	           <?php the_post_thumbnail('large', array('class' =>'thumbnail img-responsive img-fluid')); ?>
	           <br>

	           <p class="card-text" style="margin-top: 15px; margin-bottom: 20px;"><?php excerpt('20'); ?><a href="<?php the_permalink(); ?>" class="link">Ver más...</a></p>
       



