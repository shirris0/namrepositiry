var host = "/namrepository";

$(document).ready(function() {



    showBook = function(libro, cuento,idioma) {

        if(idioma == "may"){
            var url = host + "libros/" + libro + "_may/Cuento" + cuento + "/cuento" + cuento + ".html";
        }else if(idioma == "yaq"){
            var url = host + "libros/" + libro + "_yaq/Cuento" + cuento + "/cuento" + cuento + ".html";
        
        }else if(idioma == "nah"){
            var url = host + "libros/" + libro + "_nah/Cuento" + cuento + "/cuento" + cuento + ".html";
        
        }else
        {
            var url = host + "libros/" + libro + "/Cuento" + cuento + "/cuento" + cuento + ".html";
        }
        
        var bookName = "cuento" + cuento;
        $("#cuentoContainer").load(url, function() {
            var elemento = document.getElementById(bookName);
            var myBook = $(elemento).turn({
                display: 'double',
                acceleration: true,
                elevation: 50,
                autoCenter: true,
                duration: 1300,
                turnCorners: 'tl,tr'
            });
            var audio = document.getElementById("audio");
            audio.play();

            setTimeout(function() {
                myBook.turn("next");
                if (bookName == "cuento1") {
                    setTimeout(function() {
                        myBook.turn("next")
                    }, 1000);
                }
            }, 1500);

            $("#" + bookName).bind("turned", function(event, page, view) {

            });


        });



    };

    descargarIlustraciones = function(ilustracion) {
        var url = host + "libros/" + ilustracion + "/Ilustraciones.zip";
        //window.open(url);
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";

        req.onload = function(event) {
            var blob = req.response;
            console.log(blob.size);
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = "Ilustracion_" + ilustracion + ".zip";
            link.click();
        };

        req.send();
    }

    setVarLibro = function(libro){
        this.libro = libro;
    }

    descargarLibro = function(lengua) {
        var url = "";
        var noLibro = this.libro;
    
        if(lengua == "esp"){
            url = host + "libros/" + this.libro + "/libro.pdf";
        }else{
            url = host + "libros/" + this.libro+lengua + "/libro.pdf";
        }

        
        //window.open(url);
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";

        req.onload = function(event) {
            var blob = req.response;
            console.log(blob.size);
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
           link.download = "Libro_" +  noLibro + "_" + lengua + ".pdf";
            link.click();
        };

        req.send();
        
    }

    descargarAudio = function(url, name) {
        //window.open(url);
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";

        req.onload = function(event) {
            var blob = req.response;
            console.log(blob.size);
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = name + ".mp3";
            link.click();
        };

        req.send();
    }




    cargarCarousel = function() {
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

    pruebaFunction = function(html, idMenu, funcion) {
        $("#menuBar li").removeClass("active");
        $("#hero").remove();
        $("#main").load(host + "aboutContent.html", function() {
            cargarCarousel();
        });
        $("#about").addClass("active");
        $('.back-to-top').trigger("click");
        $('.mobile-nav-toggle').trigger("click");
    }


    leerManual = function(manual) {
        var url = host + "manuales/" + manual + ".pdf";
        window.open(url);
    }

    hoverLibroMenu = function(element, libro) {
        var url = host + "assets/img/libro" + libro + "Hover.png";
        element.setAttribute('src', url);
    }

    unhoverLibroMenu = function(element, libro) {
        var url = host + "assets/img/libro" + libro + ".png";
        element.setAttribute('src', url);
    }

    hoverLibroMenuTerritorio = function(element, libro) {
        var url = host + "assets/img/" + libro + "Hover.png";
        element.setAttribute('src', url);
    }

    unhoverLibroMenuTerritorio = function(element, libro) {
        var url = host + "assets/img/" + libro + ".png";
        element.setAttribute('src', url);
    }


    abrirCapacitacion = function(id) {

        switch (id) {
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

    load = function() {
        var padre = document.getElementById("padre");
    };

    mostrarRompecabezas = (libro, cuento) => {
        var hijo = document.getElementById("hijo");
        padre.removeChild(hijo);
        var elemento = document.createElement('div');
        if (libro == 1) {
            if (cuento == 1) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=0e10dd67197b&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 2) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=11bb7bc177bf&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 3) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=395461425f0d&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 4) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=361640945f6d&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 5) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=3db59ccc6090&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 6) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1d0102dfef5a&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 7) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1a002325016e&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 8) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1ac8a9516158&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 9) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=15ba229321eb&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 10) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=3a9c214ceddf&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 11) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1ae085bab033&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            }
        } else if (libro == 2) {
            if (cuento == 1) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=16daefc0db70&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 2) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=21e997f79968&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 3) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=29b2928a1072&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 4) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1d61d8ade7a8&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 5) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=02a52dba2e3c&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 6) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1ab009b875de&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 7) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=056c2610c168&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 8) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=120bd5215019&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 9) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=025db9a3092d&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 10) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=2520a1e30882&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 11) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=028dde4905ca&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            }
        } else if (libro == 3) {
            if (cuento == 1) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=3d3570b0fd79&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 2) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=0bf6f9fe3364&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 3) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=24f80b3a55a4&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 4) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=0c270b0de30e&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 5) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=3bec93cd26ed&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 6) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=347e7db43d1c&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 7) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=337ff61f6a3f&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 8) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=04840d96795b&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 9) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=14c3438382d3&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 10) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=0bd7e43c9593&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 11) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=2bb3c1480723&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            }
        } else if (libro == 4) {
            if (cuento == 1) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1c5033877d8c&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe> ');
            } else if (cuento == 2) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=03a42843917d&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 3) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=3d24440c9f72&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 4) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=2d92589d4fff&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 5) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=3d14fb146233&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 6) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=05653d7b7cf2&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 7) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=2ea2d7582d9d&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 8) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=16d3cef530fe&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 9) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1102d0e7afe0&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 10) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1e88bea04d01&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 11) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=197159940233&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            }
        } else if (libro == 5) {
            if (cuento == 1) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=081f7824df90&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 2) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1f80efe07267&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 3) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=100a3b448b0b&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 4) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=07a5606f7c4d&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 5) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=2f4a2413d41f&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 6) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=375f0b115f7b&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 7) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=2f82bf7dd51a&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 8) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=18a98c3434ff&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 9) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=30464920f373&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 10) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=378fbe258d42&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 11) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=17ebfb23481d&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            }
        } else if (libro == 6) {
            if (cuento == 1) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=170196e7c495&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 2) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=004e5829a754&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 3) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=307cf7fdfc72&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 4) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=17d1dcfe3e85&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 5) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=0086c0e692c3&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 6) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=007e025a2a7f&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 7) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=083d4d993cf2&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 8) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=17e135834b1c&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 9) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=309c4c0be1c3&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 10) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=065ff03476cd&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            } else if (cuento == 11) {
                elemento.innerHTML = ('<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=366d36afe78f&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>');
            }
        }
        padre.appendChild(elemento);
    };




});