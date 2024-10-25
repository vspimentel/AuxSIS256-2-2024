class Estudiante {
  constructor(apellidos_nombres, edad, calificaciones) {
    this.apellidos_nombres = apellidos_nombres;
    this.edad = edad;
    this.calificaciones = calificaciones;
  }
}

class Calificacion {
  constructor(materia, nota) {
    this.materia = materia;
    this.nota = nota;
  }
}

let estudiantes = [];

estudiantes.push(
  new Estudiante("Perez, Juan", 20, new Calificacion("SIS256", 60))
);
estudiantes.push(
  new Estudiante("Gomez, Maria", 21, new Calificacion("SIS256", 70))
);
estudiantes.push(
  new Estudiante("Lopez, Pedro", 22, new Calificacion("SIS256", 40))
);
estudiantes.push(
  new Estudiante("Gonzalez, Ana", 23, new Calificacion("SIS256", 90))
);

let tabla = document.getElementById("tabla");
let tbody = tabla.querySelector("tbody");
let formulario = document.querySelector("form");

function mostrarEstudiantes() {
  tbody.innerHTML = "";
  estudiantes.forEach((estudiante, i) => {
    let htmlString = "";
    if (i % 2 != 0) {
      htmlString += `<tr style="background-color: rgb(160, 160, 160)">`;
    } else {
      htmlString += `<tr>`;
    }
    htmlString += `<td>${i + 1}</td>
      <td>${estudiante.apellidos_nombres}</td>
      <td>${estudiante.edad}</td>
      <td>${estudiante.calificaciones.materia}</td>
      <td>${estudiante.calificaciones.nota}</td>
    </tr>`;

    tbody.innerHTML += htmlString;
  });
}

mostrarEstudiantes();

function encontrarMejorEstudiante() {
  let mejorEstudiante = 0;
  let mejorNota = 0;
  estudiantes.forEach((estudiante, i) => {
    if (estudiante.calificaciones.nota > mejorNota) {
      mejorEstudiante = i;
      mejorNota = estudiante.calificaciones.nota;
    }
  });
  let trs = tbody.querySelectorAll("tr");
  trs[mejorEstudiante].style.backgroundColor = "red";
}

encontrarMejorEstudiante();

function mostrarFormulario() {
  formulario.style.display = "block";
}

function guardarEstudiante() {
  const nombres = document.getElementById("nombres").value;
  const edad = document.getElementById("edad").value;
  const materia = document.getElementById("materia").value;
  const nota = document.getElementById("nota").value;

  estudiantes.push(
    new Estudiante(nombres, edad, new Calificacion(materia, nota))
  );

  formulario.style.display = "none";

  document.getElementById("nombres").value = "";
  document.getElementById("edad").value = "";
  document.getElementById("materia").value = "";
  document.getElementById("nota").value = "";

  mostrarEstudiantes();

  encontrarMejorEstudiante();
}
