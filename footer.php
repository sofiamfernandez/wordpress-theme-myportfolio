<footer>
      <div class="container">
      	<div class="text-center">
      		    <br>
              <ul class="redes-header social-network social-circle text-center"> 
                <li class="background-icon-footer"><a href="https://www.facebook.com/sofia.m.fernandez2019" target="_blank" class="icoFacebook" title="Facebook" style="margin-bottom: 8px;"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li class="background-icon-footer"><a href="https://twitter.com/sophieferdz/" target="_blank" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li class="background-icon-footer"><a href="https://www.linkedin.com/in/sofia-m-fernandez-lacroux/" target="_blank" class="icoLinkedin" title="Linkedin" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
			<p>© SofiaMFerdz 2020 | powered by <a href="http://sofiamfernandez.com/">© SofiaMFerdz <i class="far fa-heart"></i></a></p>
      	  <!-- <a class="whatsapp-movil" href="whatsapp://send/?phone=33665678319%C2%A1Hola!Quisiera%20saber%20el%20precio%20de%20una%20p%C3%A1gina%20web.%20%C2%BFPodr%C3%ADa%20tener%20un%20presupuesto%3FGracias" target="_blank"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/06/WhatsApp-150x150.png" alt="whatsapp" style="width: 50px;"></a>

          <a class="whatsapp-web" href="https://web.whatsapp.com/send/?phone=33665678319%C2%A1Hola!Quisiera%20saber%20el%20precio%20de%20una%20p%C3%A1gina%20web.%20%C2%BFPodr%C3%ADa%20tener%20un%20presupuesto%3FGracias" target="_blank"><img src="https://sofiamfernandez.com/wp-content/uploads/2019/06/WhatsApp-150x150.png" alt="whatsapp" style="width: 50px;"></a> -->
          <a href="#" id="js_up" class="boton-subir">
            <!-- link del icono http://fontawesome.io/icon/rocket/ -->
               <i class="fas fa-chevron-circle-up" aria-hidden="true"></i>
          </a> 
        </div>
      </div>
</footer>
    <?php wp_footer(); ?>
    <script>
//invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
$(window).scroll(function(){
  if($(this).scrollTop() > 300){ //condición a cumplirse cuando el usuario aya bajado 301px a más.
    $("#js_up").slideDown(300); //se muestra el botón en 300 mili segundos
  }else{ // si no
    $("#js_up").slideUp(300); //se oculta el botón en 300 mili segundos
  }
});

//creamos una función accediendo a la etiqueta i en su evento click
$("#js_up i").on('click', function (e) { 
  e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
  $("body,html").animate({ // aplicamos la función animate a los tags body y html
    scrollTop: 0 //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
  },700); //el valor 700 indica que lo ara en 700 mili segundos
  return false; //rompe el bucle
});
</script>

<script>
//<![CDATA[
document.cookie = 'same-site-cookie=foo; SameSite=Lax'; 
document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
//]]>
</script>
  </body>
</html>