function ServiciosAPI(){

    var that = this;
    that.formularioController = formularioController;

    that.getEntidadesSEPOMEX = function(){

        $.ajax({
            url: 'https://api-sepomex.hckdrk.mx/query/get_estados',
            success: function(respuesta) {
                console.log(respuesta);
                
                formularioController.cargarEntidades(respuesta.response.estado);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });
    
    }

    that.getMunicipioPorEstadoSEPOMEX = function(estado){
        var myurl = 'https://api-sepomex.hckdrk.mx/query/get_municipio_por_estado/'+estado; 

        $.ajax({
            url: myurl,
            success: function(respuesta) {
                console.log(respuesta);
                
                formularioController.cargarMunicipios(respuesta.response.municipios);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });
    
    }

    that.getColoniaPorMunicipioSEPOMEX = function(municipio){
        
        var myurl = 'https://api-sepomex.hckdrk.mx/query/get_colonia_por_municipio/'+municipio; 

        $.ajax({
            url: myurl,
            success: function(respuesta) {
                console.log(respuesta);
                
                formularioController.cargarColonias(respuesta.response.colonia);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });
    
    }

    that.getInfoPorCP= function(cp){
        
        var myurl = 'https://api-sepomex.hckdrk.mx/query/info_cp/'+cp; 

        $.ajax({
            url: myurl,
            success: function(respuesta) {
                console.log(respuesta);
                
                that.entidad = respuesta[0].response.estado;
                that.municipio = respuesta[0].response.municipio;
                that.colonia = respuesta[0].response.asentamiento;

                formularioController.cargarInfoCP();
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });
    
    }

} 

