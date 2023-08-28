$( document ).ready(function() {
    
    var host = '/namrepository';

    $("#main").load(host+"indexContent.html",function(){
        cargarCarousel();
        //$("#btnModal").click();
    });
    $("#bannerHome").show();

    abrirMenu = function(obj,to){
        $("#menuBar li").removeClass("active");
        $("#bannerHome").remove();
        $("#main").load(host+to,function(){
        });
        $("#"+obj.id).addClass("active");     
        $('.back-to-top').trigger("click");  
        $("#cerrarNavMobile").click();
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

   


});





        