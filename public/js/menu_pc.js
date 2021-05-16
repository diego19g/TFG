/* global bootstrap: false */
(function () {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl)
    })
  })()

function cambiar_boton(id,id2,id3){
  var boton = document.getElementById(id);
  boton.removeAttribute("style");

  var atributo = document.createAttribute("style");
  atributo.value = "background-color:red;padding:5px;margin:5px;";
  boton.setAttributeNode(atributo);

  var boton2 = document.getElementById(id2);
  boton2.removeAttribute("style");

  var atributo2 = document.createAttribute("style");
  atributo2.value = "background-color:black;padding:5px;margin:5px;";
  boton2.setAttributeNode(atributo2);

  var boton3 = document.getElementById(id3);
  boton3.removeAttribute("style");

  var atributo3 = document.createAttribute("style");
  atributo3.value = "background-color:black;padding:5px;margin:5px;";
  boton3.setAttributeNode(atributo3);

  var titulo = document.getElementById("titulo_carta");

  if(id=="carta_1"){
    titulo.innerHTML="ENTRANTES";
  }
  if(id=="carta_2"){
    titulo.innerHTML="BURRITOS Y HAMBURGUESAS";
  }
  if(id=="carta_3"){
    titulo.innerHTML="BEBIDAS";
  }
}

function mostrar_comida(id,id2,id3){
  var comida = document.getElementById(id);
  comida.removeAttribute("style");

  var comida2 = document.getElementById(id2);
  comida2.removeAttribute("style");

  var atributo2 = document.createAttribute("style");
  atributo2.value = "display:none;";
  comida2.setAttributeNode(atributo2);

  var comida3 = document.getElementById(id3);
  comida3.removeAttribute("style");

  var atributo3 = document.createAttribute("style");
  atributo3.value = "display:none;";
  comida3.setAttributeNode(atributo3);
}
  