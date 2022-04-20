const formulario = document.querySelector('#formulario');
const card = document.querySelector('#mili-onza-form');

window.onload = () => {
	eventListeners();

}

function eventListeners(){

	formulario.addEventListener('submit', enviarFormulario);

}

function enviarFormulario(e){

	e.preventDefault();
	const form = new FormData(formulario);
	const url = "http://www.david.latapi.com/converter.php";
	fetch(url, {
		method: 'POST',
		body: form
	})
	.then(datos => datos.json())
	.then(respuesta => mostrarAlerta(respuesta));
}

function mostrarAlerta(msg){

	if(document.querySelectorAll('.activo').length !== 0) return;

	const mensaje = document.createElement('div');
	mensaje.textContent = msg;
	mensaje.classList.add('bg-indigo-600', 'text-center', 'text-white', 'w-full', 'border', 'rounded-md', 'mt-5', 'activo');
	card.appendChild(mensaje);
	setTimeout(() => {
		mensaje.remove();
	}, 5000);
}
