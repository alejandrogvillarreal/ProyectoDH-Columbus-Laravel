//PAISES API 
var inputState = document.getElementById('country');
var inputProvincias = document.getElementById('provincia');
var provinciaSelect = document.getElementById('provinciaSelect');

fetch('https://restcountries.eu/rest/v2/all')
  .then(function (response) {
    return response.json();
  })

  .then(function (paises) {
    paises.forEach(function (pais) {
      inputState.innerHTML += '<option>' + pais.name + '</option>';
    });
  })

  .catch(function (error) {
    console.log(error);
  });

inputState.addEventListener('change', function () {
  if (this.value === 'Argentina') {
    provinciaSelect.style.display = 'block';
    fetch('https://dev.digitalhouse.com/api/getProvincias')
      .then(function (response) {
        return response.json();
      })

      .then(function (provincias) {
        provinciaSelect.innerHTML = '';
        provincias.forEach(function (prov) {
          provinciaSelect.innerHTML += '<option>' + prov.state + '</option>';
        });
      })

      .catch(function (error) {
        console.log(error);
      });

  } else {
    provinciaSelect.style.display = 'none';
    inputProvincias.innerHTML = '';
  }
});