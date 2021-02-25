$(document).ready(function() {

    cargarInfografias(null, 1);



});

var noLibro1 = 12;
var noLibro2 = 12;
var noLibro3 = 12;
var noLibro4 = 12;
var noLibro5 = 12;
var noLibro6 = 12;

cargarInfografias = function(element, libro) {
    //Limpieza
    $("#idCarouselInfografias").empty();
    $("#idOLInfografias").empty();


    var noInfografias;

    switch (libro) {
        case 1:
            noInfografias = noLibro1;
            break;
        case 2:
            noInfografias = noLibro2;
            break;
        case 3:
            noInfografias = noLibro3;
            break;
        case 4:
            noInfografias = noLibro4;
            break;
        case 5:
            noInfografias = noLibro5;
            break;
        case 6:
            noInfografias = noLibro6;
            break;
    }

    var cont = 1;
    var str = "";
    var str2 = "";
    while (cont <= noInfografias) {

        if (cont == 1) {
            str = str.concat("<div class='carousel-item active'><img class='d-block w-100' src='assets/img/capacitacion/libro" + libro + "/" + cont + ".jpg' alt='First slide'></div>");
            str2 = str2.concat("<li data-target='#carousel-thumb' data-slide-to='" + (cont - 1) + "' class='active'> <img class='d-block w-100' src='assets/img/capacitacion/libro" + libro + "/" + cont + ".jpg' class='img-fluid'></li>");
        } else {
            str = str.concat("<div class='carousel-item'><img class='d-block w-100' src='assets/img/capacitacion/libro" + libro + "/" + cont + ".jpg' alt='Second slide'></div>");
            str2 = str2.concat("<li data-target='#carousel-thumb' data-slide-to='" + (cont - 1) + "'><img class='d-block w-100' src='assets/img/capacitacion/libro" + libro + "/" + cont + ".jpg' class='img-fluid'></li>");
        }

        cont++;

    }

    $("#idCarouselInfografias").append(str);
    $("#idOLInfografias").append(str2);


}


hoverLibroInfografia = function(element, libro) {
    var url = host + "assets/img/capacitacion/libro" + libro + "Hover.png";
    element.setAttribute('src', url);
    element.setAttribute('style', 'width: 100%');
}

unhoverLibroInfografia = function(element, libro) {
    var url = host + "assets/img/capacitacion/libro" + libro + ".png";
    element.setAttribute('src', url);
    element.setAttribute('style', 'width: 60%');
}