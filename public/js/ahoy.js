function mostrarTexto() {

    var Check = document.getElementById("check");
    var Oculto = document.getElementById("oculto");
    var LeerMasButton = document.getElementById("mostrar");
    var TextoHistoria = document.getElementById("textohistoria");

    if (Check.style.display === "none") {
        Check.style.display = "inline";
        LeerMasButton.innerHTML = "Leer Más ...";
        oculto.style.display = "none";
        TextoHistoria.className = "textohistoria textomascara";
    } else {
        Check.style.display = "none";
        LeerMasButton.innerHTML = "Leer Menos";
        Oculto.style.display = "inline";
        TextoHistoria.className = 'textohistoria';
    }
}

function changeName(idnombre) {
    switch (idnombre) {
        case 0:
            var newname = "Gatunica la ladrona";
            break;
        case 1:
            var newname = "Contramaestre Cerdon";
            break;
        case 2:
            var newname = "Tiburosanson";
            break;
        case 3:
            var newname = "Simono El Apostador";
            break;
        case 4:
            var newname = "Sir. Crocodanilo";
            break;
        case 5:
            var newname = "Zoom Zoom y Zumi";
            break;
        case 6:
            var newname = "Paulpulpon El Lector";
            break;
    }

    var nombrepersonaje = document.getElementById("nombrepersonaje");
    nombrepersonaje.firstChild.nodeValue = newname;
}
