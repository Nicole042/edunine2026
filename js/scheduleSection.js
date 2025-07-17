let ultimoElemento = Array.from(document.getElementsByClassName("showContentBtn"))[0];
let ultimoBoton = document.getElementById("showContentBtn");
Array.from(document.getElementsByClassName("schedule-btn")).forEach(element => {
  element.addEventListener("click", function () {

    ultimoElemento.classList.add("d-none");
    ultimoBoton.classList.remove("btn-active");
    const primerElemento = document.getElementsByClassName(element.id)[0];
    primerElemento.classList.remove("d-none");
    element.classList.add("btn-active");

    ultimoElemento = primerElemento;
    ultimoBoton = element;

    console.log("Click " + element.id);
  });
});

