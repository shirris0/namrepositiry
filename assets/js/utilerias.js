 /*Agregar funciones jquery validator*/
 $.validator.addMethod("RFC", function (value, element) {
    if (value !== '') {
        var patt = new RegExp("^[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?$");
        return patt.test(value);
    } else {
        return false;
    }
}, "Ingrese un RFC valido");
$.validator.addMethod("CURP", function (value, element) {
    if (value !== '') {
        var patt = new RegExp("^[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]$");
        return patt.test(value);
    } else {
        return false;
    }
}, "Ingrese una CURP valido");
$.validator.addMethod("CodigoPostal", function (value, element) {
    if (value !== '') {
        var patt = new RegExp("^[0-9]{5}$");
        return patt.test(value);
    } else {
        return false;
    }
}, "Ingrese una Código Postal valido");
