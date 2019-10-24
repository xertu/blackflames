<?php

/**
*layout
*ce qui sera toujours affiche
*/

require '../views/header.php';
require '../views/nav.php';

?>


<!-- section contact -->


<div id="contact" class="grid-x contact-us">
  <div class="cell small-6 contact-us-section-left">
    <div class="t-titre"><h1 class="titre-section">Où nous trouver ?</h1></div>

    <!-- carte -->


    <div class="map">
      <div class="responsive-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5773.3777424055215!2d4.9451829371954865!3d45.33850701768924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f53ab5fdf83913%3A0x4480d6093bfb5d6a!2sRoute+des+Chats+Noirs%2C+38270+Jarcieu!5e0!3m2!1sfr!2sfr!4v1549122568371" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <!-- infos complementaires -->

    <ul class="contact-us-list">
      <li><i class="fi-marker">Facebook: Atelier des Flammes Noires
</i></li>
      <li> <i class="fi-mail"><a class="mail-cat" href="mailto:atelierdesflammesnoires@gmail.com">Mail: atelierdesflammesnoires@gmail.com</a></i></li>
      <li><i class="fi-mobile">
        Tel: 06.80.68.44.24
      </i></li>
    </ul>
  </div>



  <div class="cell small-6 contact-us-section-right">
    <div class="t-titre"><h1 class="titre-section">Contactez nous !</h1></div>

    <!-- formulaire de contact -->

    <div class="formulaire">
      <form class="contact-us-form" onsubmit="return verifForm(this)" action="../donnees-contact/recuperation.php" method="post" enctype="multipart/form-data">

        <p>
         <label for="nom"></label>
         <input type="text" id="nom" name="nom">
       </p>
       <p>
         <label for="email"></label>
         <input type="email" id="email" name="email">
       </p>
       <label for="message"></label>
       <textarea name="message" id="" rows="12" placeholder="ecrivez vôtre message"></textarea>
     </p>
     <div class="contact-us-form-actions">
      <input type="submit" class="button bouton" value="envoyez" />

    </div>
  </fieldset>
</form>
</div>








</div>


<script src="../Js/form.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/what-input/dist/what-input.js"></script>
<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="../js/app.js"></script>
</body>
</html>