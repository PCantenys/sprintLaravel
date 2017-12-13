// var form = document.querySelector('form');
//
// form.enctype = 'multipart/form-data';
// form.name = 'contact';
//
// var campos = form.elements;
//
// var regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
//
// var pass = document.getElementById('password1');
// var errorpass = pass.nextElementSibling;
// var repass = document.getElementById('password2');
//
// form.onsubmit = function (e) {
//   var campos = form.elements;
//   for (var i = 0; i < campos.length; i++) {
//     if(campos[i].tagName != 'BUTTON' && campos[i].type != 'file'){
//       if(campos[i].value.trim() === ''){
//         e.preventDefault();
//         campos[i].className = 'errores';
//       }
//     }
//   // }
//   // if(!radios()){
//   //   e.preventDefault();
//   }if (pass.value !== repass.value){
//     e.preventDefault();
//     errorpass.innerText = 'Las contraseñas no coinciden';
//   }
// };
//
//
// for (var i = 0; i < campos.length; i++) {
//   if(campos[i].tagName != 'BUTTON' && campos[i].type != 'file'){
//   campos[i].addEventListener('blur', function(){
//     // this.className = '';
//     var error = this.nextElementSibling;
//   	if (this.value === '') {
//   		this.className = 'errores';
//   		error.innerText = 'requerido';
//   	} else if (this.name == 'email') {
//   	  if (!regexEmail.test(this.value)) {
//   	    error.innerText = 'Pone un mail valido';
//   	  }else {
//   	    error.innerText = '';
//   	  }
//   	} else {
//   		error.innerText = '';
//   		this.className = '';
//   	}
//   });
// }
// }

// function radios(){
//   var radio = form.genero;
//   var elegido = false;
//   for (var i = 0; i < radio.length; i++) {
//     if (radio[i].checked){
//       elegido = true;
//     }
//   }
//   return (elegido) ? true : false;
// }


// mostrar la contraseña
// var checkboxPass = document.getElementById('show_password');
// var pass = document.getElementById('password1');
// var repass = document.getElementById('password2');
//
// checkboxPass.onchange = function(){
//   if (checkboxPass.checked == true) {
//     pass.type = 'text';
//     repass.type = 'text';
//   } else {
//     pass.type = 'password';
//     repass.type = 'password';
//   }
// };

// ------------------------ a partir de aca ajax -----------------------------

// Función Genérica
function ajaxCall (url, callbackFunction) {
	var myAjax = new XMLHttpRequest();
	myAjax.onreadystatechange = function () {

		if (this.readyState === 4 && this.status === 200) {
			var resultado = JSON.parse(this.responseText);
      console.log(resultado);
			callbackFunction(resultado.contenido);
		}
	};

	myAjax.open('GET', url);
	myAjax.send();
}



var urlPaises = 'http://pilote.techo.org/?do=api.getPaises';
var urlRegiones = '  http://pilote.techo.org/?do=api.getRegiones?idPais=';
var urlCiudades = ' http://pilote.techo.org/?do=api.getCiudades?idRegionLT=';

ajaxCall(urlPaises, getPaises);

// paises -------------------------------------------
function getPaises (resultado) {
	var comboPaises = document.getElementById('paises');
	for (var x in resultado) {
		var option = document.createElement('option');
		option.innerText = x;
		option.value = resultado[x];
		comboPaises.appendChild(option);
	}

	comboPaises.onchange = function () {
		ajaxCall(urlRegiones + this.value, getProvincias);

		// Vaciar  el combo de provincias si tiene hijos
		var comboRegiones = document.getElementById('regiones');
		if (comboRegiones.hasChildNodes()) {
			comboRegiones.innerHTML = '';
		}

		// Vaciar el combo de ciudades si tiene hijos
		var comboCiudades = document.getElementById('ciudades');
		if (comboCiudades.hasChildNodes()) {
			comboCiudades.innerHTML = '';
			}
		}
	};

//regiones --------------------------------------------
function getProvincias (resultado) {
	var comboRegiones = document.getElementById('regiones');

	var option = document.createElement('option');

	option.innerText = 'Elegí una región';
	option.value = 0;
	comboRegiones.appendChild(option);

	for (var x in resultado) {
		var option = document.createElement('option');
		option.innerText = x;
		option.value = resultado[x];
		comboRegiones.append(option);
	}

	comboRegiones.onchange = function () {

		ajaxCall(urlCiudades + this.value, getCiudades);

		// Vaciar el combo de ciudades si tiene hijos
		var comboCiudades = document.getElementById('ciudades');
		if (comboCiudades.hasChildNodes()) {
			comboCiudades.innerHTML = '';
		}
	};
}

//ciudades ---------------------------------------
function getCiudades (resultado) {
	var comboCiudades = document.getElementById('ciudades');

	var option = document.createElement('option');
	option.innerText = 'Elegí una ciudad';
	option.setAttribute('value', '0');
	comboCiudades.append(option);

	for (var x in resultado) {
		var option = document.createElement('option');
		option.innerText = x;
		option.setAttribute('value', resultado[x]);
		comboCiudades.append(option);

	}

}
