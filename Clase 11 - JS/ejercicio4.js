let input = document.getElementsByName("nuevoElemento")[0];
let lista = document.getElementById("lista");

function agregarElemento() {
  let li = document.createElement("li");
  let palabras = input.value.split(" ");
  let tieneDe = false;
  palabras.forEach((palabra) => {
    if (palabra == "de") {
      tieneDe = true;
    }
  });
  li.innerHTML = input.value;
  li.style.backgroundColor = tieneDe ? "yellow" : "";
  lista.appendChild(li);
}
