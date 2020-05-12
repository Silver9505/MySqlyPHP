var codigo = document.getElementById("codigo")
var titulo = document.getElementById("titulo")
var desarrollador = document.getElementById("desarrollador")
var editor = document.getElementById("editor")
var precio = document.getElementById("precio")

function validar(){
    var mensajeError=[];
    if(codigo.value === null || codigo.value ===''){
        mensajeError.push('Debes ingresar un codigo');
    }
    if(titulo.value === null || titulo.value ===''){
        mensajeError.push('Debes ingresar el titulo del juego');
    }
    if(desarrollador.value === null || desarrollador.value ===''){
        mensajeError.push('Debes ingresar el desarrollador del juego');
    }
    if(editor.value === null || editor.value ===''){
        mensajeError.push('Debes ingresar el o los editores del juego');
    }
    if(precio.value === null || precio.value ===''){
        mensajeError.push('Debes ingresar el precio del juego');
    }
    if(precio.value <0){
        mensajeError.push('El precio no puede ser negativo');
    }

    if(mensajeError.length !==0){
        mensajeError.join(', ');
        alert(mensajeError);
        return false
    }
    return true
}
