window.onload = function(){

    var regexEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    var formRegistro = document.querySelector(".registro-form");
    var elementos = formRegistro.elements;  //tengo una coleccion html
    elementos = Array.from(elementos);//array de elementos html
    elementos.pop();//saco el boton inputFile
    elementos.pop();//saco el checkbox de recordarme
    elementos.pop();//saco el btn de reset
    elementos.pop();//saco el boton guardar cambios

    function descartarEdicion(){
      elementos.forEach(function(element){
        element.classList.remove("is-invalid");
        element.classList.remove("is-valid");
      });

      // inputFile = document.querySelector(".input-file-ale");
      // inputFile.classList.remove("is-invalid");
      // inputFile.classList.remove("is-valid");

    }

    var botonDescartar = document.querySelector("#botonDescartar");
    botonDescartar.addEventListener('click',descartarEdicion);

    //antes de hacer enviar el form lo freno y valido
    formRegistro.addEventListener('submit',function(event){

      if (
        inputNombre.value.trim() === "" || inputNombre.value.length < 4 || inputNombre.value.length > 30 ||
        inputApellido.value.trim() === "" || inputApellido.value.length < 4 || inputApellido.value.length > 30 ||
        inputUsername.value.trim() === "" || inputUsername.value.length < 4 || inputUsername.value.length > 30 ||
        inputEmail.value.trim() === "" || !regexEmail.test((inputEmail.value)) ||
        inputPassword.value.trim() === "" || inputPassword.value.length < 4 || inputPassword.value.length > 30 ||
        inputPasswordR.value.trim() === "" || inputPassword.value !== inputPasswordR.value
        )
      {
        event.preventDefault();
        elementos.forEach(function(element){
            if (element.value == "") {
              element.classList.add("is-invalid");
              var div = element.parentElement.querySelector('.invalid-feedback');
              div.innerHTML = 'Campo obligatorio';
            }
        });
        // alert("Error en algun campo");
      }
    });

    //valido los campos
    var inputNombre = document.querySelector('input[name="name"]');
    var inputApellido = document.querySelector('input[name="lastname"]');
    var inputUsername = document.querySelector('input[name="username"]');
    // var inputPais = document.querySelector('input[name="pais"]');
    var inputEmail = document.querySelector('input[name="email"]');
    var inputPassword = document.querySelector('input[name="password"]');
    var inputPasswordR = document.querySelector('input[name="confirmPassword"]');

    //VALIDACION DEL NOMBRE
    inputNombre.addEventListener('keyup',function(event){
      if ((this.value).length < 3) {
        this.classList.add('is-invalid');
        var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El nombre es demasiado corto';
      }else if ((this.value).length >30) {
        this.classList.add('is-invalid');
        var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El nombre es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DEL APELLIDO
    inputApellido.addEventListener('keyup',function(event){
      if ((this.value).length < 3) {
        this.classList.add('is-invalid');
        var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El apellido es demasiado corto';
      }
      else if ((this.value).length >30) {
        this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El apellido es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DEL USERNAME
    inputUsername.addEventListener('keyup',function(event){
      if ((this.value).length < 3) {
        this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El username es demasiado corto';
      }
      else if ((this.value).length >30) {
        this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El username es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });


    //VALIDACION DEL EMAIL
    inputEmail.addEventListener('keyup',function(event){
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

    //VALIDACION DEL PASSWORD
    inputPassword.addEventListener('keyup',function(event){
      if ((this.value).length < 6) {
        this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El password es demasiado corto';
      }
      else if ((this.value).length >30) {
        this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'El password es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DE LA REPETICION DE PASSWORD
    inputPasswordR.addEventListener('keyup',function(event){
      if (this.value !== inputPassword.value) {
        this.classList.add('is-invalid');
      var div = this.parentElement.querySelector('.invalid-feedback');
        div.innerHTML = 'Las password no coinciden';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });


}
