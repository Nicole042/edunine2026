// let ultimoElemento = Array.from(document.getElementsByClassName("showContentBtn"))[0];
// let ultimoBoton = document.getElementById("showContentBtn");
// Array.from(document.getElementsByClassName("schedule-btn")).forEach(element => {
//   element.addEventListener("click", function () {

//     ultimoElemento.classList.add("d-none");
//     ultimoBoton.classList.remove("btn-active");
//     const primerElemento = document.getElementsByClassName(element.id)[0];
//     console.log("primerElemento", primerElemento);
//     primerElemento.classList.remove("d-none");
//     element.classList.add("btn-active");

//     ultimoElemento = primerElemento;
//     ultimoBoton = element;

//     console.log("Click " + element.id);
//   });
// });

let ultimoElemento = document.querySelector(".showContentBtn");
let ultimoBoton = document.querySelector(".schedule-btn.btn-active");

document.querySelectorAll(".schedule-btn").forEach(btn => {
  btn.addEventListener("click", () => {

    // Ocultar anterior
    if (ultimoElemento) {
      ultimoElemento.classList.add("d-none");
    } 
    if (ultimoBoton) {
      ultimoBoton.classList.remove("btn-active");
    }

    // Mostrar nuevo
    const nuevoElemento = document.querySelector("." + btn.id);
    nuevoElemento.classList.remove("d-none");
    btn.classList.add("btn-active");

    // Guardar referencias
    ultimoElemento = nuevoElemento;
    ultimoBoton = btn;
  });
});

