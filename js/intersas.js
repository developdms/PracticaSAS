/*global document*/
"use strict";
(function () {
    document.getElementById("btSubir").addEventListener("click", function () {
        var input = document.createElement("input");
        input.type = "file";
        input.name = "imagen[]";
        document.getElementById("inputSubir").appendChild(input);
        input.addEventListener("change", function () {
            var nombre = input.value;
            var indice = nombre.lastIndexOf("/");
            if (indice < 0) {
                indice = nombre.lastIndexOf("\\");
            }
            var mostrar = nombre.substr(indice + 1);
            var p = document.createElement("p");
            var a = document.createElement("a");
            var t1 = document.createTextNode(mostrar + " ");
            var t2 = document.createTextNode("borrar");
            a.href = "#";
            a.addEventListener("click", function () {
                p.parentElement.removeChild(p);
                input.parentElement.removeChild(input);
            }, false);
            a.appendChild(t2);
            p.appendChild(t1);
            p.appendChild(a);
            document.getElementById("imagenesSubir").appendChild(p);
        }, false);
        input.click();
    }, false);
}());