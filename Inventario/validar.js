function validar(){
    var nombre, lote, cantidad, vencimiento, description, precio;
    nombre = document.getElementById("nombre").value;
    lote = document.getElementById("lote").value;
    cantidad = document.getElementById("cantidad").value;
    vencimiento = document.getElementById("vencimiento").value;
    description = document.getElementById("description").value;
    precio = document.getElementById("precio").value;

    if (nombre === "") {
        alert("Ingrese un producto");
    } else {
        alert("hello");
        
    }
}