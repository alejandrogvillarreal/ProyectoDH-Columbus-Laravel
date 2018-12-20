window.onload = function(){

    var regexEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    var formLogin = document.querySelector(".login-form");
    var elementos = formLogin.elements;  //tengo una coleccion html
    elementos = Array.from(elementos);//array de elementos html
    elementos.pop();//saco el btn de ingresar
    elementos.pop();//saco el checkbox de recordarme
    console.log(elementos);



    //antes de hacer enviar el form lo freno y valido
    formLogin.addEventListener('submit',function(event){

      if (
        inputEmail.value.trim() === "" || !regexEmail.test((inputEmail.value)) ||
        inputPassword.value.trim() === "" || inputPassword.value.length < 4 || inputPassword.value.length > 30
        )
      {
        event.preventDefault();
        elementos.forEach(function(element){
            if (element.value == "") {
              element.classList.add("is-invalid");
              var div = element.parentElement.querySelector('.invalid-feedback');
              console.log(div);
              div.innerHTML = 'Campo obligatorio';
            }
        });
        console.log(elementos);
        // alert("Error en algun campo");
      }
    });

    //valido los campos
    var inputEmail = document.querySelector('input[name="email"]');
    var inputPassword = document.querySelector('input[name="password"]');



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
      if ((this.value).length < 4) {
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


}
