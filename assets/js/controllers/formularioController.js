function  FormularioController(){

    var that = this;
    that.serviceAPI = serviceAPI;
    

    that.cargarEntidades = function (listaEntidades){
        var comboEntidades= document.getElementById("idEntidades");
        var option = ""
        $.each( listaEntidades, function( key, value ) {
            option = document.createElement("option");
            option.text = value;
            option.value = value;
            comboEntidades.add(option);
          });
    }

    that.cargarMunicipios = function (listaMunicipios){
        var comboMunicipios= document.getElementById("idMunicipios");
        var option = ""
        $.each( listaMunicipios, function( key, value ) {
            option = document.createElement("option");
            option.text = value;
            option.value = value;
            comboMunicipios.add(option);
          });
        
          if(serviceAPI.municipio != null){
            $("#idMunicipios option[value='"+serviceAPI.municipio+"']").attr("selected", true);
            that.changeMunicipios();
          }
    }

    that.cargarColonias = function (listaColonias){
        var comboColonias= document.getElementById("idColonias");
        var option = ""
        $.each( listaColonias, function( key, value ) {
            option = document.createElement("option");
            option.text = value;
            option.value = value;
            comboColonias.add(option);
          });

          if(serviceAPI.colonia != null){
            $("#idColonias option[value='"+serviceAPI.colonia+"']").attr("selected", true);
          }
    }

    that.changeEntidades = function(){
        $('#idMunicipios').children('option:not(:first)').remove();
        $('#idColonias').children('option:not(:first)').remove();
        var entidadSelecionada = $('#idEntidades').find(":selected").text();
        serviceAPI.getMunicipioPorEstadoSEPOMEX(entidadSelecionada);
    }

    that.changeMunicipios = function(){
        $('#idColonias').children('option:not(:first)').remove();
        var municipioSelecionado = $('#idMunicipios').find(":selected").text();
        serviceAPI.getColoniaPorMunicipioSEPOMEX(municipioSelecionado);
    }

    that.changeCP = function(input){
        var str = input.value; 
        var cpValido = str.match(/[0-9]{5}/g);
        if(cpValido != null){
            serviceAPI.getInfoPorCP(input.value);
        }else{
            
        }
        
    }

    that.cargarInfoCP = function(){
        $("#idEntidades option[value='"+serviceAPI.entidad+"']").attr("selected", true);
        that.changeEntidades(serviceAPI.entidad);
    }


}