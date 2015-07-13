<?php 
include("head.php");
?>

  <div class="row">
    <div class="medium-4 small-4 columns reset">
      <div class="etiqueta">
         NOSOTROS
       </div>
    </div>   
   </div>
</div>


<div class="contenedor">
  <div class="catalogo_cont"><!--Catalogo_cont-->
<hr>
    <div class="row">
          <div class="large-6 medium-6 small-6 columns format_text_news ">
            
     <p>ESCRÍBENOS</p>

      
      <div class="cont_cantacto">

        <div class="campo">
           <input  class="campo_style" type="text" name="web" placeholder="Compañia">
        </div> 

        <div class="campo">
           <input  class="campo_style" type="email" name="web" placeholder="E-mail">
        </div> 

       <div class="campo">
           <textarea name="" id="" placeholder="Mensaje"></textarea>
        </div> 
 
        <div class="campo">
            <button type="submit" id="" ><i class="fi-check tm"></i></button>
        </div> 

      </div>
  
    </div> 

          </div>
     </div>
  </div>    
</div>




   </div>
  </div><!--Fin catalogo_cont-->
</div><!-- contenedor Items -->





<?php 
include("news.php");
include("items_sugeridos.php");
 ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


<?php 
include("footer.php");
?>