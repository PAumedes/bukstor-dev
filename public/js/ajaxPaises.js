window.onload = function () {
  var selectPaises = document.querySelector('#paises')
  var selectProv = document.querySelector('#prov')
  var provContainer = document.querySelector('#prov-container')

  var urlPaises = 'http://pilote.techo.org/?do=api.getPaises';
  var urlProv = 'http://pilote.techo.org/?do=api.getRegiones?idPais=';

  function pedidoAjax(url, callback){
       fetch(url)
       .then(function(response){
         return response.json();
       })
       .then(function(data){
         data = data.contenido;
         callback(data)
       })
       .catch(function(error){
         console.error(error);
       });
  };

  pedidoAjax(urlPaises, cargarPaises);

  function cargarPaises(data){
    for (var n in data){
      var option = `<option value="${data[n]}"> ${n} </option>`;
      selectPaises.innerHTML += option;
    }

    selectPaises.onchange = function () {
  		var idPais = this.value;

  		if (idPais != '') {
  			provContainer.style.display = 'flex';
        pedidoAjax(urlProv + idPais, cargarProv);
  		} else {
  			provContainer.style.display = 'none';
  		};

		  if (selectProv.hasChildNodes()) selectProv.innerHTML = '';


	};
  }

  function cargarProv(data){
    for (var n in data){
      var option = `<option value = "${data[n]}"> ${n} </option>`;
      selectProv.innerHTML += option;
    };
  }

}
