
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbsWhite" data-aos="fade-in">
        <div class="container">
          
        </div>
      </div><!-- End Breadcrumbs -->
      <div class="col-lg-12 bannerSecundario" style="text-align: center;">
        <img src="assets/img/bannerContacto.jpg">
     </div>

     <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-contacto-tab" data-toggle="tab" href="#nav-contacto" role="tab" aria-controls="nav-contacto" aria-selected="true">Contacto</a>
        <a class="nav-item nav-link" id="nav-denuncia-tab" data-toggle="tab" href="#nav-denuncia" role="tab" aria-controls="nav-denuncia" aria-selected="false">Comparte aquí los hallazgos, resultados y aportaciones que realizan en tu comunidad</a>
        
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-contacto" role="tabpanel" aria-labelledby="nav-contacto-tab">
        <section id="contact" class="contact">
      

          <div class="container" data-aos="fade-up">
            <div class="row mt-5" style="margin-bottom: 25px;">
    
              <div class="col-lg-4">
                <div class="info">
                  <div class="address">
                    <i class="icofont-google-map"></i>
                    <h4>Dirección:</h4>
                    <p>Av. Paseo de la Reforma, Ciudad de México.</p>
                  </div>
    
                  <div class="email">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>contacto@nammagicoymexicano.org</p>
                  </div>
    
                  <div class="phone">
                    <i class="icofont-phone"></i>
                    <h4>Teléfono:</h4>
                    <p> 55 3434 7719</p>
                  </div>
    
                </div>
    
              </div>
    
              <div class="col-lg-8 mt-5 mt-lg-0">
                <form method="POST" enctype=multipart/form-data action="mailer/enviar.php" class="php-email-form" id="formulario">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres." />
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Por favor ingrese un email válido." />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres de asunto." />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escriba algo para nosotros." placeholder="Mensaje"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-12 form-group" style="padding: 0px;">
                    <input class="form-control" type="file" name="adjunto" id="adjunto">
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Su mensaje ha sido enviado. Gracias!</div>
                  </div>    
                  <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form> 
  
              </div>
  
    
            </div>
    
            <div data-aos="fade-up" style="align-items: center;">
          
              <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.3308153496569!2d-99.16869369184816!3d19.42702059672184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35f5bd1563%3A0x6c366f0e2de02ff7!2sEl%20%C3%81ngel%20de%20la%20Independencia!5e0!3m2!1ses-419!2smx!4v1592713341035!5m2!1ses-419!2smx"  frameborder="0" allowfullscreen></iframe>
            </div>
    
          </div>
    
          
        </section><!-- End Contact Section -->

      </div>
      <div class="tab-pane fade" id="nav-denuncia" role="tabpanel" aria-labelledby="nav-denuncia-tab">
<form  action='global/administrar_libro.php' method='post' enctype="multipart/form-data">
        <div class="container" data-aos="fade-up">
          <div class="row mt-5" style="margin-bottom: 25px;">

      <div  class="col-sm-6">        
        
          <h3>Datos generales</h3>
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label for="name">Primer apellido</label>
            <input type="text" class="form-control" id="nombre" name="primerApellido" placeholder="Ingrese su primer apellido">
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
            <input type="text" class="form-control" name="titulo"  placeholder="Ingrese título del hallazgo">
          </div>
          <div class="form-group">
            <label for="name">Fecha del hallazgo</label>
            <input type="date" class="form-control" name="fechaReporte"  placeholder="Ingrese la fecha">
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripción</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descripcion"></textarea>
          <small id="passwordHelpBlock" class="form-text text-muted">
            Describe los hechos en máximo 100 caracteres
          </small>
        </div>
        <div class="form-group">
          <select class="custom-select" required name="objetivoReporte">
            <option value="">Objetivo del reporte</option>
            <option value="RESCATE, CONOCIMIENTO Y SABERES ANCESTRALES">Rescate, conocimiento y saberes ancestrales</option>
            <option value="REDUCCION DE RESIDUOS">Reducción de resíduos</option>
            <option value="RIESGO SANITARIO">Riesgo sanitario</option>
            <option value="DEFENSA DE LA NATURALEZA, LOS ECOSISTEMAS Y LA BIODIVERSIDAD">Defensa de la Naturaleza, los ecosistemas y la biodiversidad</option>
            <option value="RECONSTRUCCIÓN DEL TEJIDO SOCIAL, RONDA DE PAZ">Reconstrucción del Tejido Social, ronda de paz</option>
            <option value="OTRAS ACTIVIDADES">Otras actividades</option>
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
  
            <input type="file" name="fileToUpload" id="fileToUpload" multiple="true">
        <input type='hidden' name='insertar' value='insertar'>
        <div class="form-group" style="text-align: right;">
          <button type="submit" class="btn btn-primary" value="Guardar">Enviar</button>
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

      var serviceAPI = new ServiciosAPI();
      var formularioController = new  FormularioController();

      serviceAPI.getEntidadesSEPOMEX();
     

     </script>
   

      