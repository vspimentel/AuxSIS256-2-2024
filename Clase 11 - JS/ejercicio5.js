let celdas = document.querySelectorAll(".celda");
var turno = "X";

celdas.forEach((celda) => {
  celda.addEventListener("click", (e) => {
    if (e.target.innerHTML == "") {
      e.target.innerHTML = turno;
      if (turno == "X") {
        turno = "O";
      } else {
        turno = "X";
      }
      mensaje.innerHTML = `Turno ${turno}`;
    }
  });
});
