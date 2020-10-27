var host = "/namrepository/";

$( document ).ready(function() {

    

    showBook = function(libro,cuento){
        var url = host+"libros/"+libro+"/Cuento"+cuento+"/cuento"+cuento+".html";
        var bookName = "cuento"+cuento;
        $("#cuentoContainer").load(url, function(){
            var elemento = document.getElementById(bookName);
            var myBook = $(elemento).turn({
                display:'double',
                acceleration: true,
                elevation: 50,
                autoCenter: true,
                duration : 1300,
                turnCorners:'tl,tr'
            });
            var audio = document.getElementById("audio");
            audio.play();
           
            setTimeout(function(){ 
                myBook.turn("next");
                if(bookName  == "cuento1"){
                    setTimeout(function(){ 
                        myBook.turn("next")
                    }, 1000);
                }
            }, 1500);

            $("#"+bookName).bind("turned", function(event, page, view) {  

            });
            
            
        });
    
        
       
    };

   

    descargarLibro = function(libro){
        var url = host+"libros/"+libro+"/libro.pdf";
        //window.open(url);
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";
      
        req.onload = function (event) {
          var blob = req.response;
          console.log(blob.size);
          var link=document.createElement('a');
          link.href=window.URL.createObjectURL(blob);
          link.download="Libro_"+ libro+ ".pdf";
          link.click();
        };
      
        req.send();
    }

    descargarAudio = function(url,name){
        //window.open(url);
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";
      
        req.onload = function (event) {
          var blob = req.response;
          console.log(blob.size);
          var link=document.createElement('a');
          link.href=window.URL.createObjectURL(blob);
          link.download=name+ ".mp3";
          link.click();
        };
      
        req.send();
    }




    cargarCarousel = function(){
        // Testimonials carousel (uses the Owl Carousel library)
        $(".testimonials-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            900: {
                items: 2
            }
            }
        });
    }

    pruebaFunction = function(html,idMenu,funcion){
        $("#menuBar li").removeClass("active");
        $("#hero").remove();
        $("#main").load(host+"aboutContent.html",function(){
            cargarCarousel();
        });
        $("#about").addClass("active");     
        $('.back-to-top').trigger("click");   
        $('.mobile-nav-toggle').trigger("click");
    }

   
    leerManual = function(manual){
        var url = host+"manuales/"+manual+".pdf";
        window.open(url);
    }

    hoverLibroMenu = function(element,libro) {
        var url = host+"assets/img/libro"+libro+"Hover.png";
        element.setAttribute('src', url);
      }
      
    unhoverLibroMenu = function(element,libro) {
        var url = host+"assets/img/libro"+libro+".png";
        element.setAttribute('src', url);
    }

    abrirCapacitacion = function(id){

        switch(id){
            case 1:
                $("#videoCap").attr('src', 'https://www.youtube.com/embed/VMKcnkwNAUE');
                $("#tituloCap").text("Proceso Nacional de Reconciliación con la Naturaleza (PNRN) - Introducción");
                $("#subtituloCap").text("");
                
            break;
            
            case 2:
                $("#videoCap").attr('src', 'https://www.youtube.com/embed/GDCR_sgEeiw');
                $("#tituloCap").text("Colección de Libros “Cuentos desde el Ombligo de la Luna” - Libro 1");
                $("#subtituloCap").text("Consumismo");
            break;

            case 3:
                $("#videoCap").attr('src', 'https://www.youtube.com/embed/LWhMpCKlzb0');
                $("#tituloCap").text("Colección de Libros “Cuentos desde el Ombligo de la Luna” - Libro 2");
                $("#subtituloCap").text("Empaques y etiquetados");
            break;

            case 4:
                $("#videoCap").attr('src', 'https://www.youtube.com/embed/sFQH_4vAwoo');
                $("#tituloCap").text("Colección de Libros “Cuentos desde el Ombligo de la Luna” - Libro 3");
                $("#subtituloCap").text("Huella del Bienestar");
            break;

            case 5:
                $("#videoCap").attr('src', 'https://www.youtube.com/embed/XMncB8U2nok');
                $("#tituloCap").text("Colección de Libros “Cuentos desde el Ombligo de la Luna” - Libro 4");
                $("#subtituloCap").text("Enfermedades de la tierra");
            break;

            case 6:
                $("#videoCap").attr('src', 'https://www.youtube.com/embed/Wr9gUVPNWlw');
                $("#tituloCap").text("Colección de Libros “Cuentos desde el Ombligo de la Luna” - Libro 5");
                $("#subtituloCap").text("Enfermedades de la sociedad");
            break;

            case 7:
                $("#videoCap").attr('src', 'https://www.youtube.com/embed/FqFUUC3SGck');
                $("#tituloCap").text("Colección de Libros “Cuentos desde el Ombligo de la Luna” - Libro 6");
                $("#subtituloCap").text("La reconciliación");
            break;
          
              
        }

        
        
    }

    



   
});