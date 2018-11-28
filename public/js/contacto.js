window.onload = function () {

  var regexEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

  var inputNombre = document.querySelector('input[name="nombre"]');
  var inputEmail = document.querySelector('input[name="email"]');
  var inputTextarea = document.querySelector('input[name="texto"]');

  inputNombre.addEventListener('keyup', function(event) {
    if ((this.value).length < 4) {
      this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
      div.innerHTML = 'El nombre es demasiado corto';
    } else if ((this.value).length > 30) {
      this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
      div.innerHTML = 'El nombre es demasiado largo';
    }
    else {
      this.classList.remove("is-invalid");
      this.classList.add('is-valid');
    }
  });

  inputEmail.addEventListener('keyup', function (event) {
    if (!regexEmail.test((this.value))) {
      this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
      div.innerHTML = 'El formato de email es invalido';
    }
    else {
      this.classList.remove("is-invalid");
      this.classList.add('is-valid');
    }
  });

}
  
