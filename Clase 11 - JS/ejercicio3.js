let imagen = document.querySelector("img");
let input = document.querySelector("input");

let reducir = document.querySelector("#reducir");
let aumentar = document.getElementById("agrandar");

reducir.addEventListener("click", () => {
  let width = imagen.style.width;
  width = parseInt(width);
  let value = parseInt(input.value);
  width -= value;
  imagen.style.width = `${width}px`;
});

aumentar.onclick = () => {
  let width = imagen.style.width;
  width = parseInt(width);
  let value = parseInt(input.value);
  width += value;
  imagen.style.width = `${width}px`;
};
