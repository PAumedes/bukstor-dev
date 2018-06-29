window.addEventListener('load', function () {

  function formData() {
  var form = document.querySelector('#register');
  var elements = form.elements;

  form.addEventListener('submit', function(e) {
    e.preventDefault()

    if (form.querySelector('[name="name"]').value === '' ) {
        form.querySelector('#errorName').innerText = "Por favor, introduce un nombre";
    } else {
      form.querySelector('#errorName').innerText = "";
    }
    if (form.querySelector('#nationality').value === '' ) {
        form.querySelector('#errorPais').innerText = "Por favor, elegí un país";
    } else {
      form.querySelector('#errorPais').innerText = "";
    }

    if (form.querySelector('#prov').value === '' ) {
        form.querySelector('#errorProv').innerText = "Por favor, elegí una provincia";
    } else {
      form.querySelector('#errorProv').innerText = "";
    }

    if (form.querySelector('#email').value === '' ) {
        form.querySelector('#errorEmail').innerText = "Por favor, introduce un E-mail";
    } else {
      form.querySelector('#errorEmail').innerText = "";
    }

    if (form.querySelector('#password').value === '' ) {
        form.querySelector('#errorPass').innerText = "Por favor, introduce una contraseña";
    } else {
      form.querySelector('#errorPass').innerText = "";
    }

    if (form.querySelector('#password-confirm').value === '' ) {
        form.querySelector('#errorPassConf').innerText = "Por favor, introduce nuevamente la contraseña";
    } else {
      form.querySelector('#errorPassConf').innerText = "";
    }

    if (form.querySelector('#password').value != form.querySelector('#password-confirm').value) {
        form.querySelector('#errorPassMatch').innerText = "Las contraseñas no coinciden";
    }

  })
}
});
formData();

