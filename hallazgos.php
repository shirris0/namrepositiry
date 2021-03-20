<?php include("keys/keys.php") ?>
<!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbsWhite" data-aos="fade-in">
        <div class="container">
          
        </div>
</div><!-- End Breadcrumbs -->
<div class="col-lg-12 bannerSecundario" style="text-align: center;">
        <img src="assets/img/bannerContacto.jpg">
</div>
<form  action='global/administrar_libro.php' method='post' class="" enctype="multipart/form-data" id="formulario">
  <div class="container" data-aos="fade-up">
    <div class="row mt-5" style="margin-bottom: 25px;">
      <div  class="col-sm-6">        
        <h3>Datos generales</h3>
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label for="name">Primer apellido</label>
            <input type="text" required class="form-control" id="nombre" name="primerApellido" placeholder="Ingrese su primer apellido">
          </div>
          <div class="form-group">
            <label for="name">Segundo apellido</label>
            <input type="text" class="form-control" id="nombre" name="segundoApellido" placeholder="Ingrese su segundo apellido">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
          </div>
          <div class="form-group">
            <label for="name">Lugar de trabajo</label>
            <select class="custom-select" required name="lugarDeTrabajo">
              <option value="">Soy Defensor de la Naturaleza</option>
              <option value="PERSONAL DE SEMARNAT">Personal de SEMARNAT</option>
              <option value="SEMBRADORES DE VIDA">Sembradores de Vida</option>
              <option value="CULTURA COMUNITARIA">Cultura Comunitaria</option>
              <option value="VVERIFICADOR SANITARIO">Verificador Sanitario</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
          <div class="form-group">
            <label for="name">Código postal</label>
            <input type="number" name="codigoPostal" class="form-control"  title="Three letter country code" pattern="^[0-9]{5}$" placeholder="Ingrese su Código Postal" onfocusout='formularioController.changeCP(this)'>
          </div>
          <div class="form-group">
            <label for="name">Entidad federativa</label>
            <select class="custom-select" name="entidadFederativa" required id="idEntidades" onchange='formularioController.changeEntidades()'>
              <option value="N/A">Seleccione Entidad Federativa</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
          <div class="form-group">
            <label for="name">Municipio</label>
            <select class="custom-select" name="municipio" required id="idMunicipios" onchange='formularioController.changeMunicipios()'>
              <option value="N/A">Seleccione Municipio</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
          <div class="form-group">
            <label for="name">Localidad</label>
            <select class="custom-select" name="localidad" required id="idColonias">
              <option value="N/A">Seleccione Localidad / Colonia</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
          <div class="form-group">
            <label for="name">Teléfono</label>
            <input type="text" class="form-control" name="telefono" placeholder="Ingrese su teléfono (opcional)">
          </div>      
      </div>

      <div  class="col-sm-6">
        <h3>Datos del hallazgo</h3>
          <div class="form-group">
            <label for="name">Título</label>
            <input type="text" class="form-control" required name="titulo"  placeholder="Ingrese título del hallazgo">
          </div>
          <div class="form-group">
            <label for="name">Fecha del hallazgo</label>
            <input type="date" class="form-control" name="fechaReporte"  placeholder="Ingrese la fecha">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" maxlength="270" name="descripcion"></textarea>
            <small id="passwordHelpBlock" class="form-text text-muted">
             Describe los hechos en máximo 270 caracteres
            </small>
          </div>
          <div class="form-group">
            <select class="custom-select" required name="objetivoReporte">
              <option value="">Objetivo del reporte / Encargos</option>
              <option value="RESCATE, CONOCIMIENTOS Y SABERES ANCESTRALES">Rescate, conocimientos y saberes ancestrales</option>
              <option value="REDUCCION DE RESIDUOS">Reducción de residuos</option>
              <option value="RIESGO SANITARIO">Riesgos sanitarios</option>
              <option value="DEFENSA DE LA NATURALEZA, LOS ECOSISTEMAS Y LA BIODIVERSIDAD"><b>Defensa de la Naturaleza.</b> Los ecosistemas y la biodiversidad</option>
              <option value="RECONSTRUCCIÓN DEL TEJIDO SOCIAL, RONDA DE PAZ">Reconstrucción del Tejido Social. Ronda de la Paz.</option>
              <option value="PROTECCION A LA FAUNA SILVESTRE">Protección a la fauna silvestre</option>
              <option value="OTRAS ACTIVIDADES">Otras actividades.</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
          <div class="form-group">
            <label for="name">¿A cuántas personas impactaste?</label></br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="unoa10" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">De 1 a 10</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="dieza50" id="inlineRadio2" value="1">
              <label class="form-check-label" for="inlineRadio2">De 10 a 50</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="mas50" id="inlineRadio3" value="1">
              <label class="form-check-label" for="inlineRadio3">Más de 50</label>
            </div>
          </div>
          <div class="form-group">
            <label for="name">¿Deseas que tu evidencia sea pública?</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="evidenciaPrivada" id="inlineRadioE1" value="1" selected>
              <label class="form-check-label" for="inlineRadioE1">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="evidenciaPrivada" id="inlineRadioE2" value="0">
              <label class="form-check-label" for="inlineRadioE2">No</label>
            </div>
          </div>
          <input type="file" name="fileToUpload" id="adjunto" multiple="true">
          <input type='hidden' name='insertar' value='insertar'>
          <div class="form-group" style="text-align: right;">
            <button type="submit" class="btn btn-primary" value="Guardar">Enviar</button>
            <input type="hidden" name="token-google" id="token-google">
          </div>
          <div class="mb-3">
            <div class="loading" style="display: none; text-align: center">Loading</div>
            <div class="error-message" style="display: none;">Ah ocurrido algun error !!!</div>
            <div class="sent-message" style="display: none;">Su mensaje ha sido enviado. Gracias!</div>
          </div> 
      </div> 
        </div>
         </div>
       


</form>


      </div>
    </div>
      <!-- ======= Contact Section ======= -->
    
    
   
   
        
      <script src="assets/vendor/php-email-form/validate.js"></script>
     <!--<script src="assets/js/contactoController.js"></script> -->
   
<script>
var form = $('#formulario');
form.submit(function(event){
  event.preventDefault();
  $.ajax({
    url: $(this).attr('action'),
    type: "POST",
    data: $(this).serialize(),
    beforeSend: function(){
      form.fin('.loading').slideDown();
    }
  }).done(function(res){
    if(res){
      form.find('.loading').slideUp();
      form.find('.sent-message').slideDown();
      $('#formulario').trigger("reset");
    }
  }).fail(function(){
    form.find('.sent-message').slideUp();
    form.find('.error-message').slideDown();
  });
});
 var serviceAPI = new ServiciosAPI();
 var formularioController = new  FormularioController();
 serviceAPI.getEntidadesSEPOMEX();
</script>