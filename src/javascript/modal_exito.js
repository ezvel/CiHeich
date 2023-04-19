const modal_exito = document.querySelector(".modal-exito");
const cerrar_exito = document.querySelector(".cerrar-exito");

modal_exito.classList.add('show');

cerrar_exito.addEventListener('click', () => {
	modal_exito.classList.remove('show');
})