$( document ).ready(function() {

    cargarGaleria(1);

    $('a[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'bottom',
        html: true
    });

});


var noLibro1 = 20;
var noLibro2 = 20;
var noLibro3 = 20;
var noLibro4 = 20;
var noLibro5 = 20;
var noLibro6 = 20;

cargarGaleria = function(libro){
    
    //Limpieza
    $("#idCarouselGaleria").empty();
    $("#idOLGaleria").empty();

    var noIlustraciones;

    switch(libro){
        case 1: 
            noIlustraciones = noLibro1;
        break;
        case 2:
            noIlustraciones = noLibro2;
        break;
        case 3:
            noIlustraciones = noLibro3;
        break;
        case 4:
            noIlustraciones = noLibro4;
        break;
        case 5:
            noIlustraciones = noLibro5;
        break;
        case 6:
            noIlustraciones = noLibro6;
        break;
    }

    var cont = 1;
    var str = "";
    var str2 = "";
    while (cont <= noIlustraciones){

        if(cont == 1 ){
            str =  str.concat("<div class='carousel-item active'><img class='d-block w-100' src='libros/"+libro+"/Ilustraciones/"+cont+".jpg'></div>");
            str2 = str2.concat("<li data-target='#carousel-thumb' data-slide-to='"+cont+"' class='active'> <img class='d-block w-100' src='libros/"+libro+"/Ilustraciones/"+cont+".jpg' class='img-fluid'></li>");
        }else{
            str =  str.concat("<div class='carousel-item'><img class='d-block w-100' src='libros/"+libro+"/Ilustraciones/"+cont+".jpg' ></div>");
            str2 = str2.concat("<li data-target='#carousel-thumb' data-slide-to='"+cont+"'><img class='d-block w-100' src='libros/"+libro+"/Ilustraciones/"+cont+".jpg' class='img-fluid'></li>");
        }
    
        cont++;
        
    }

    $("#idCarouselGaleria").append(str);
    $("#idOLGaleria").append(str2);
    

}