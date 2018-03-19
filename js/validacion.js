function validarForm() {
    var numero = document.getElementById("txtnumero").value;
    var titulo = document.getElementById("txttitulo").value;
    var paginas = document.getElementById("txtpaginas").value;
    var precio = document.getElementById("txtprecio").value;
    var cantidad = document.getElementById("txtcantidad").value;

    var aniopublicacion = document.getElementById("combo_aniopublicacion").selectedIndex;
    var materia = document.getElementById("combo_materia").selectedIndex;
    var editorial = document.getElementById("combo_editorial").selectedIndex;
    var autor = document.getElementById("combo_autor").selectedIndex;

    if(numero == null || numero.length == 0 || /^\s+$/.test(numero)) {
        alert("Debes escribir el id del libro!");
        document.getElementById("txtnumero").focus();
        return false;
    }
    else if (titulo == null || titulo.length == 0 || /^\s+$/.test(titulo)) {
        alert("Debes escribir un titulo");
        document.getElementById("txttitulo").focus();
        return false;
    }
    else if (paginas == null || paginas.length == 0 || /^\s+$/.test(paginas)) {
        alert("Cuantas paginas tiene!!");
        document.getElementById("txtpaginas").focus();
        return false;
    }
    else if (precio == null || precio.length == 0 || /^\s+$/.test(precio)) {
        alert("Especifica el precio del libro!");
        document.getElementById("txtprecio").focus();
        return false;
    }
    else if (cantidad == null || cantidad.length == 0 || /^\s+$/.test(cantidad)) {
        alert("Anota una cantidad de libros!");
        document.getElementById("txtcantidad").focus();
        return false;
    }
    else if (aniopublicacion == null || aniopublicacion == 0) {
        alert("Debes elegir un año de publicación");
        document.getElementById("combo_aniopublicacion").focus();
        return false;
    }
    else if (materia == null || materia == 0) {
        alert("Debes elegir una Materia");
        document.getElementById("combo_materia").focus();
        return false;
    }
    else if (editorial == null || editorial == 0) {
        alert("Debes elegir una Editorial");
        document.getElementById("combo_editorial").focus();
        return false;
    }
    else if (autor == null || autor == 0) {
        alert("Debes elegir un Autor");
        document.getElementById("combo_autor").focus();
        return false;
    }
    return true;
}