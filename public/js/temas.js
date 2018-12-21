let temaBody = localStorage.getItem('temaBody');
let temaNav = localStorage.getItem('temaNav');
let body = document.querySelector("body");
let nav = document.querySelector("nav");

//Si hay algo guardado en el localStorage de nav y body, se lo seteo
if (temaBody != null && temaNav != null) {
  body.className = temaBody;
  nav.className = temaNav;
}

//TEMA LIGHT 
let lightButton = document.getElementById("light");

lightButton.addEventListener("click", function () {

  let nav = document.querySelector("nav");
  let body = document.querySelector("body");
  let temaBodyClase = 'light'
  let temaNavColor = 'navbar navbar-expand-lg navbar-dark bg-dark';

  localStorage.setItem("temaBody", temaBodyClase);
  sessionStorage.setItem("temaBody", temaBodyClase);

  localStorage.setItem("temaNav", temaNavColor);
  sessionStorage.setItem("temaNav", temaNavColor);

  body.className = temaBodyClase;

  nav.className = temaNavColor;

});

//TEMA RELAX
let relaxButton = document.getElementById("relax");

relaxButton.addEventListener("click", function () {

  let body = document.querySelector("body");
  let nav = document.querySelector("nav");
  let temaBodyClase = 'relax'
  let temaNavColor = 'navbar navbar-expand-lg navbar-relax bg-relax';

  localStorage.setItem("temaBody", temaBodyClase);
  sessionStorage.setItem("temaBody", temaBodyClase);

  localStorage.setItem("temaNav", temaNavColor);
  sessionStorage.setItem("temaNav", temaNavColor);

  body.className = temaBodyClase;

  nav.className = temaNavColor;

});

//TEMA COOL
// let coolButton = document.getElementById("cool");

// coolButton.addEventListener("click", function () {

//   let body = document.querySelector("body");
//   let nav = document.querySelector("nav");
//   let temaBodyClase = 'cool'
//   let temaNavColor = 'navbar navbar-expand-lg navbar-german bg-german';

//   localStorage.setItem("temaBody", temaBodyClase);
//   sessionStorage.setItem("temaBody", temaBodyClase);

//   localStorage.setItem("temaNav", temaNavColor);
//   sessionStorage.setItem("temaNav", temaNavColor);

//   body.className = temaBodyClase;

//   nav.className = temaNavColor;

// });