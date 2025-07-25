let ultimoElemento = Array.from(document.getElementsByClassName("category1"))[0];
let ultimoBoton = document.getElementById("category1");
Array.from(document.getElementsByClassName("category-btn")).forEach(element => {
  element.addEventListener("click", function () {

    ultimoElemento.classList.add("d-none");
    ultimoBoton.classList.remove("category-btn-active");
    const primerElemento = document.getElementsByClassName(element.id)[0];
    primerElemento.classList.remove("d-none");
    element.classList.add("category-btn-active");

    ultimoElemento = primerElemento;
    ultimoBoton = element;
  });
});