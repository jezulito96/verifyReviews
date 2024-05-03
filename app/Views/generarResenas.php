<?php 
    // primero se muestra el formulario y cuando se envia 
    if(!isset($imagenQr)){
?>
<h3>Genera códigos Qr para que tus clientes puedan opinar sobre tu negocio</h3>
<p>
    Cada reseña será unica, de esta manera protegemos tu negocio. Nos aseguramos de que las reseñas que recibe tu negocio sean de tus clientes.
</p>
<div class="containerformGenerarResena">
    <form action="setGenerarResenas" method="post" class="formLogin">

        <label>Elige el estilo del Qr</label>
        <select name="estiloQr" id="estiloQr" >
            <option value="0">Verify Reviews</option>
            <option value="1">Morado azulado</option>
            <option value="2">Tonos verdes</option>
            <option value="4">Tonos marrones</option>
            <option value="5">Tonos rosas</option>
            <option value="3">Tonos grises 1</option>
            <option value="6">Tonos grises 2</option>
        </select>

        <!-- <label>Escoge un color para el codigo Qr</label>
        <select name="colorQr" id="colorQr" >
            <option value="150px">Pequeño</option>
            <option value="200px">Mediano</option>
            <option value="300px">Grande</option>
        </select> -->

        <!-- <input type="button" name="previsualizarQr" id="previsualizarQr" value="Previsualizar Qr" style="background:red;"/>  -->

        <div id="previsualizacionQr" class="previsualizacionQr">
            <img src="<?php echo base_url()?>img/preQr/verify.webp" id="prevQr" class="prevQr">
                <!-- Aqui se mostrara la previsualizacion de las imagenes qr  -->
        </div>

        
        <input type="submit" name="generaQr" value="Generar codigos">
    </form>

</div>

<?php
    }else{
        
        echo $imagenQr;
?><?php
        


    }
?>
<script>
    $(document).ready(function(){

        var preQr = $("#prevQr");

        $("#estiloQr").change(function(){
            var valorSeleccionado = $(this).val();
            console.log($valorSeleccionado);

            var cambioSrc;
            switch (valorSeleccionado) {
                case "1":
                    console.log("entra");
                    cambioSrc = "<?php echo base_url()?>img/preQr/morados.webp";
                    break;
                case "2":
                    console.log("entra");
                    cambioSrc = "<?php echo base_url()?>img/preQr/verdes.webp";
                    break;
                case "4":
                    console.log("entra");
                    cambioSrc = "<?php echo base_url()?>img/preQr/marrones.webp";
                    break;
                case "5":
                    console.log("entra");
                    cambioSrc = "<?php echo base_url()?>img/preQr/rosas.webp";
                    break;
                case "3":
                    console.log("entra");
                    cambioSrc = "<?php echo base_url()?>img/preQr/grises1.webp";
                    break;
                case "6":
                    console.log("entra");
                    cambioSrc = "<?php echo base_url()?>img/preQr/grises2.webp";
                    break;
                default:
                    cambioSrc = "<?php echo base_url()?>img/preQr/verify.webp";
            }
        });
        
        preQr.attr('src', nuevoSrc);

    });
</script>

