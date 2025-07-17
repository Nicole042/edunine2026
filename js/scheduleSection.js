let ultimoElemento = null;

Array.from(document.getElementsByClassName("schedule-btn")).forEach(element => {
  element.addEventListener("click", function () {

    if (ultimoElemento) {
      ultimoElemento.classList.add("d-none");
    }

    const primerElemento = document.getElementsByClassName(element.id)[0];
    primerElemento.classList.remove("d-none");

    ultimoElemento = primerElemento;

    console.log("Click " + element.id);
  });
});

