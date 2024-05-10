<?php
  if(isset($error)){
    echo $error;
  }elseif(isset($inicio_sesion_container) && $inicio_sesion_container == true){
?>

    <div id="containerSesion">
      <form action="setLogin" method="post">

        <input type="hidden" name="es_sesion_resena" value="sesion">
        <input type="hidden" name="qr_key" value="<?php echo $qr_key ;?>">
        
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>

        <input type="submit" value="Iniciar sesión" >
        <input type="button" id="opcion2" value="Continuar sin iniciar sesión">

      </form>
    </div>  
    
    <div id="containerNickname" hidden>
        <form action="setLogin" method="post">

            <input type="hidden" name="es_sesion_resena" value="nickname">
            <input type="hidden" name="qr_key" value="<?php echo $qr_key ;?>">

            <input type="text" name="nickname" id="nickname" placeholder="Nickname" required />
            
            <input type="submit" name="loginResenaNick" id="loginResenaNick" value="Continuar" >
            <input type="button" id="opcion1" value="Iniciar sesion">
        
        </form>
    </div>

  <script>
      $(document).ready(function(){

        var opcion1 = $("#opcion1");
        var opcion2 = $("#opcion2");

        var containerSesion = $("#containerSesion");
        var containerNickname = $("#containerNickname");
        
        opcion2.click(function(){

          containerNickname.hide();
          containerSesion.show();

        });

        opcion1.click(function(){

          containerSesion.show();
          containerNickname.hide();

        });
      });
  </script>

<?php

  }elseif(isset($completar_formulario_resena) && $completar_formulario_resena == true) {
?>
<h1 class="tituloResenaContent">Escribe tu reseña</h1>

<div class="resenaContainer" id="resenaContainer">

  <div class="negocio" id="negocio">

    <div class="fotoPerfilNegocio" id="fotoPerfilNegocio">
      <!-- cambiar url -->
      <img class="imagenNegocio" src="caballo.png" alt="Imagen negocio" title="Imagen negocio" />
    </div>

    <div class="datosNegocio" id="datosNegocio">

      <div class="nombreNegocio" id="nombreNegocio">
        La terraza del caballo blanco
      </div>

      <div class="direccionNegocio" id="direccionNegocio">
        Av. Valladolid, 106, 42005 Soria
      </div>

    </div>

    <div class="valoracion">
      <h3 class="tituloValoracion">
        ¿Cómo puntuar&iacute;as la experiencia?
      </h3>
      <div class="puntuacionValoracion">
        <!-- imagen --- https://iconos8.es/icon/set/tick/stickers  -->
        <img class="imgPuntuacion" id="imgTick1"
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABcUlEQVR4nO3UvUoDQRAH8NVKFPwCFRuDycwVFnYWQiRkNpEgwcoH8AF8BdFObAS10047fYiAH5lJCCgigiIIgqBYBwtNTk4QLnsXuMQNWOQPV92wP3bYGaW6+Q8hxlUS2MudwVjHEF1KzJPglxZ0SfBNlyBvHclXJvuJ4d5DfN/Hhqt6rUIksGsgrmY8sYpk2EkSY60RgXfi6QlrSPZ6dkALPpq3IYEVZTMkcBBomeCxXYQhqxnrxk1eFoszo9aQTCU+RIzP5m3SjEuRD0meT42Q4JY3F81qNONRsGVwGBlJXcWGiaH80wbGaqbkaLMmzYnlEOQpJzAYGSLBQkPPGatpcej3v7datOCrMS91f01ECC4CT9WHacbT4GDCvmo12cv4uGa8DcOIcSc4L/jgrR/VTrz2kMBNyHyYeI0EF9pCWsIYt/+ERMFI4C5ViPVZgZpj8KnLzpyyncADYdy0jvhXjmZYJ8E15aqejkHdqJB8A0RHO5NtxEWKAAAAAElFTkSuQmCC">
        <img class="imgPuntuacion" id="imgTick2"
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABcUlEQVR4nO3UvUoDQRAH8NVKFPwCFRuDycwVFnYWQiRkNpEgwcoH8AF8BdFObAS10047fYiAH5lJCCgigiIIgqBYBwtNTk4QLnsXuMQNWOQPV92wP3bYGaW6+Q8hxlUS2MudwVjHEF1KzJPglxZ0SfBNlyBvHclXJvuJ4d5DfN/Hhqt6rUIksGsgrmY8sYpk2EkSY60RgXfi6QlrSPZ6dkALPpq3IYEVZTMkcBBomeCxXYQhqxnrxk1eFoszo9aQTCU+RIzP5m3SjEuRD0meT42Q4JY3F81qNONRsGVwGBlJXcWGiaH80wbGaqbkaLMmzYnlEOQpJzAYGSLBQkPPGatpcej3v7datOCrMS91f01ECC4CT9WHacbT4GDCvmo12cv4uGa8DcOIcSc4L/jgrR/VTrz2kMBNyHyYeI0EF9pCWsIYt/+ERMFI4C5ViPVZgZpj8KnLzpyyncADYdy0jvhXjmZYJ8E15aqejkHdqJB8A0RHO5NtxEWKAAAAAElFTkSuQmCC">
        <img class="imgPuntuacion" id="imgTick3"
        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABcUlEQVR4nO3UvUoDQRAH8NVKFPwCFRuDycwVFnYWQiRkNpEgwcoH8AF8BdFObAS10047fYiAH5lJCCgigiIIgqBYBwtNTk4QLnsXuMQNWOQPV92wP3bYGaW6+Q8hxlUS2MudwVjHEF1KzJPglxZ0SfBNlyBvHclXJvuJ4d5DfN/Hhqt6rUIksGsgrmY8sYpk2EkSY60RgXfi6QlrSPZ6dkALPpq3IYEVZTMkcBBomeCxXYQhqxnrxk1eFoszo9aQTCU+RIzP5m3SjEuRD0meT42Q4JY3F81qNONRsGVwGBlJXcWGiaH80wbGaqbkaLMmzYnlEOQpJzAYGSLBQkPPGatpcej3v7datOCrMS91f01ECC4CT9WHacbT4GDCvmo12cv4uGa8DcOIcSc4L/jgrR/VTrz2kMBNyHyYeI0EF9pCWsIYt/+ERMFI4C5ViPVZgZpj8KnLzpyyncADYdy0jvhXjmZYJ8E15aqejkHdqJB8A0RHO5NtxEWKAAAAAElFTkSuQmCC">
        <img class="imgPuntuacion" id="imgTick4"
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABQ0lEQVR4nO3UvUoDQRSG4dFKFPwD9UosBG0UGxErL8AL8BYkdmIjqNW6zPsls6TRi7CxshQRFEEQBMU6WGiyspBIGEbZxAlY+ME0O7PnYQ67x5j//IVI2gKOrLUzA0NqtdoC8CEpB16stevRkSRJRoHbAuks4K1SqQxHhYDDbqS9TqMi1tpFSU0PeU3TdC4a4pwbA+7921hrN03MACeBlmWxkVWg5SFPaZpOR0OSJJmQ9OjfBlgrXaRer08Be8V/8d0ZwAValpZGJE1Kumy/2JC04p+pVqsbgZs8ZFk2XhoCzr0iDWC5s1+MFknPHtLqPlMWugi05AuTdBbYPza9xjk3C1yHMEkHged3xfgx/aTdnqtAUX81gaW+kF4wYP9XSBkMuJE0EgX6AXsH5k3sBD6Q3eiIN3J2gO08z4cGBv3HBPIJaDKqLtu70qIAAAAASUVORK5CYII=">
        <img class="imgPuntuacion" id="imgTick5"
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABQ0lEQVR4nO3UvUoDQRSG4dFKFPwD9UosBG0UGxErL8AL8BYkdmIjqNW6zPsls6TRi7CxshQRFEEQBMU6WGiyspBIGEbZxAlY+ME0O7PnYQ67x5j//IVI2gKOrLUzA0NqtdoC8CEpB16stevRkSRJRoHbAuks4K1SqQxHhYDDbqS9TqMi1tpFSU0PeU3TdC4a4pwbA+7921hrN03MACeBlmWxkVWg5SFPaZpOR0OSJJmQ9OjfBlgrXaRer08Be8V/8d0ZwAValpZGJE1Kumy/2JC04p+pVqsbgZs8ZFk2XhoCzr0iDWC5s1+MFknPHtLqPlMWugi05AuTdBbYPza9xjk3C1yHMEkHged3xfgx/aTdnqtAUX81gaW+kF4wYP9XSBkMuJE0EgX6AXsH5k3sBD6Q3eiIN3J2gO08z4cGBv3HBPIJaDKqLtu70qIAAAAASUVORK5CYII=">
        <div class="resultadoValoracion">

        </div>
      </div>

    </div>

    <div class="moduloResena">
      <h3 class="titulos">
        T&iacute;tulo de su experiencia
      </h3>

      <div class="areaTexto">

        <textarea class="textoTitulo" minlenght="5" maxlength="50" title="Título de la reseña" required placeholder="Velada perfecta en pareja ..."></textarea>
        <div id="infoInputs1" class="infoInputs"></div>

      </div>

    </div>

    <div class="moduloResena">
      <h3 class="titulos">
        Describe tu experiencia
      </h3>

      <div class="areaTexto">

        <textarea class="textoTituloArea" minlenght="50" maxlength="300" required placeholder="Cuenta como fué tu experiencia para otros usuarios"></textarea>
        <div id="infoInputs2" class="infoInputs"></div>

      </div>

    </div>

    <div class="moduloResena">
      <h3 class="titulos">
        Añade alguna foto <span class="subtitulo">(opcional)</span>
      </h3>

      <div class="areaFile">

        <!-- <input type="file" class="fotosResena" aria-label="Archivo"/> -->

        <div class="file-select" id="foto1">
          <input type="file" id="foto1" name="foto1" aria-label="Archivo">
        </div>

        <div class="file-select" id="foto2">
          <input type="file" id="foto2" name="foto2" aria-label="Archivo">
        </div>

      </div>

    </div>

    <div class="moduloResena">
      <h3 class="titulos">
        Fecha de tu experiencia
      </h3>

      <div class="areaFecha">
        <input type="date" id="fechaResena" class="fechaResena" required placeholder="d/m/Y" min="2024-01-01"></p>
      </div>

    </div>
  </div>
</div>
<?php

  }

?>
<!-- script para pintar los ticks verdes de una nueva reseña -->
<?php echo "<script src='". base_url() . "js/ticksResenas.js' > </script>";        ?>






